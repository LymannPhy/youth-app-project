<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetAudience extends Model
{
    use HasFactory;

    protected $table = 'target_audiences';

    // Define the fillable attributes
    protected $fillable = ['name'];
}
