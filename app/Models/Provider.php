<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_name',
        'contact_phone',
        'contact_email',
        'service_category_id',
    ];

    protected $appends = ['category_name'];
    
    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->serviceCategory?->name ?? 'No category';        
    }
}
