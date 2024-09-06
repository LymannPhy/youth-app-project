@extends('admin.layouts.app')

@section('main_content')
    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Volunteers</h1>
                <div>
                    <a href="{{ route('admin_volunteer_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                        New</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Profession</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($volunteers as $volunteer)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ asset('uploads/' . $volunteer->photo) }}"
                                                            alt="" class="w_100">
                                                    </td>
                                                    <td>
                                                        {{ $volunteer->name }}
                                                    </td>
                                                    <td>
                                                        {{ $volunteer->profession }}
                                                    </td>
                                                    <td class="pt_10 pb_10">
                                                        <a href="{{ route('admin_volunteer_edit', $volunteer->id) }}"
                                                            class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                        <form id="delete-form-{{ $volunteer->id }}"
                                                            action="{{ route('admin_volunteer_delete', $volunteer->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        <a href="#" class="btn btn-danger btn-sm delete-button"
                                                            data-id="{{ $volunteer->id }}"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $('.delete-button').click(function(event) {
                event.preventDefault();

                var id = $(this).data('id');
                var form = $('#delete-form-' + id);

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this volunteer!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
