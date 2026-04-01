<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = [
        'name', 'slug', 'logo', 'description', 'address', 'city',
        'phone', 'email', 'website', 'contact_person', 'contact_phone',
        'service_areas', 'operation_hours', 'is_verified', 'is_featured',
        'rating', 'total_reviews'
    ];

    protected $casts = [
        'service_areas' => 'array',
        'operation_hours' => 'array',
        'is_verified' => 'boolean',
        'is_featured' => 'boolean',
        'rating' => 'decimal:2'
    ];

    public function services()
    {
        return $this->hasMany(LabService::class);
    }

    public function accreditations()
    {
        return $this->hasMany(LabAccreditation::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCity($query, $city)
    {
        return $query->where('city', $city);
    }

    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : 'https://via.placeholder.com/150';
    }
}