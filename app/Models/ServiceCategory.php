<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LabService;

class ServiceCategory extends Model
{
    public function services()
    {
        return $this->hasMany(LabService::class, 'category_id');
    }
}