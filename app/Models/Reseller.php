<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    protected $table = 'resellers';

    protected $fillable = [
        'nama',
        'email',
        'whatsapp',
        'perusahaan',
        'alamat',
    ];
}