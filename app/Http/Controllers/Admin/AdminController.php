<?php

namespace App\Http\Controllers\Admin;

// use App\Charts\MonthlyCausesAreaChart;
// use App\Charts\MonthlyCausesDonationsBarChart;
// use App\Charts\SubscribersStatusChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use App\Models\Cause;
use App\Models\CauseDonation;
use App\Models\Event;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    { 
        // Fetch data from the database for subscribers
        $subscribers = Subscriber::select(DB::raw("count(*) as count, status"))
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray(); // Return as associative array
    
        // For causes created in the current year
        $causes = Cause::select(DB::raw("count(*) as count, MONTH(created_at) as month"))
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();
    
        // Ensure all 12 months are represented for causes
        $months = range(1, 12);
        $causes = array_replace(array_fill_keys($months, 0), $causes);
    
        // For donations
        $causeDonations = CauseDonation::select(DB::raw("sum(price) as total, MONTH(created_at) as month"))
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();
    
        // Ensure all 12 months are represented for donations
        $causeDonations = array_replace(array_fill_keys($months, 0), $causeDonations);

        // Fetch volunteer data for the Datatables
        if (request()->ajax()) {
            $volunteers = Volunteer::latest()->get();
            return DataTables::of($volunteers)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $editUrl = route('admin_volunteer_edit', $row->id);
                    $deleteUrl = route('admin_volunteer_delete', $row->id);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-primary btn-sm">Edit</a>
                    <form method="POST" style="display:inline">
                        <a href="javascript:void(0)" data-url="'.$deleteUrl.'" class="delete-button btn btn-danger btn-sm">Delete</a>
                    </form>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        // Return view with the data passed to it
        return view('admin.dashboard', [
            'subscribers' => json_encode(array_values($subscribers)), // Convert to array of counts
            'causes' => json_encode(array_values($causes)), // Convert to array of counts
            'causeDonations' => json_encode(array_values($causeDonations)), // Convert to array of totals
            'total_events' => Event::count(),
            'total_volunteers' => Volunteer::count(),
            'total_users' => User::count(),
            'total_causes' => Cause::count(),
            'total_donations' => CauseDonation::sum('price'),
            'total_subscribers' => Subscriber::count(),
        ]);
    }
    
    
    
    
    

    
    
    public function edit_profile()
    {
        return view('admin.edit_profile');
    }
    public function edit_profile_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $admin_data = Admin::find(Auth::guard('admin')->user()->id);

        if($request->photo != null) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png',
            ]);
            //dd($request->photo->extension());
            
            if (Auth::guard('admin')->user()->photo != null) {
                $oldPhotoPath = public_path('uploads/' . Auth::guard('admin')->user()->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }            

            $final_name = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $admin_data->photo = $final_name;
        }

        if($request->password != '' || $request->password_confirmation != '') {
            $request->validate([
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]);
            $admin_data->password = Hash::make($request->password);
        }

        $admin_data->name = $request->name;
        $admin_data->email = $request->email;
        $admin_data->update();

        return redirect()->back()->with('success','Profile updated successfully');
    }

    public function login()
    {
        return view('admin.login');
    }
    public function login_submit(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];
        
        if(Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin_dashboard')->with('success','Login Successfull');
        } else {
            return redirect()->route('admin_login')->with('error','Invalid Credentials');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success','Logout Successfully');
    }

    public function forget_password()
    {
        return view('admin.forget-password');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data) {
            return redirect()->back()->with('error','Email not found');
        }

        $token = hash('sha256',time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = "Please click on below link to reset your password<br><br>";
        $message .= "<a href='".$reset_link."'>Click Here</a>";

        Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success','Reset password link sent on your email');
    }

    public function reset_password($token,$email)
    {
        $admin_data = Admin::where('email',$email)->where('token',$token)->first();
        if(!$admin_data) {
            return redirect()->route('admin_login')->with('error','Invalid token or email');
        }
        return view('admin.reset-password', compact('token','email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $admin_data = Admin::where('email',$request->email)->where('token',$request->token)->first();
        $admin_data->password = Hash::make($request->password);
        $admin_data->token = "";
        $admin_data->update();

        return redirect()->route('admin_login')->with('success','Password reset successfully');
    }
}
