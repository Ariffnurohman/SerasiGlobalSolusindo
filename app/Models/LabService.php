<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabService extends Model
{
    protected $fillable = [
        'lab_id', 'category_id', 'name', 'slug', 'description',
        'parameters', 'range', 'accuracy', 'standard', 'turnaround_time',
        'price', 'is_negotiable', 'certificates', 'views', 'is_active'
    ];

    protected $casts = [
        'parameters' => 'array',
        'certificates' => 'array',
        'is_negotiable' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function orders()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function incrementViews()
    {
        $this->increment('views');
    }

    public function getFormattedPriceAttribute()
    {
        return $this->price ? 'Rp ' . number_format($this->price, 0, ',', '.') : 'Hubungi Kami';
    }
}