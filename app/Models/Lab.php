<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'city',
        'logo',
        'about',
        'scope_of_calibration',
        'is_active',
        'is_verified',
    ];
}