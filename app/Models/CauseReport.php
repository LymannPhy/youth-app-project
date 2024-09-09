<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CauseReport extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'cause_id',        
        'user_id',
        'report_type',
        'report_date',
        'report',
        'challenges',
        'solutions',
    ];
    
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10)
            ->quality(60)
            ->performOnCollections('images');

    }

    public function user()
    {
        return $this->belongsTo(User::class); // Make sure the 'cause_reports' table has a 'user_id' column
    }

    public function cause()
    {
        return $this->belongsTo(Cause::class);
    }
}