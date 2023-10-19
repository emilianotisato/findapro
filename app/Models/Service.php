<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'active', 'photo', 'provider_id'];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
    
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('active', true);
    }

    public function scopeInactive(Builder $query)
    {
        return $query->where('active', false); 
    }

    public function scopeSearch(Builder $query, string $term)
    {
        return $query->where('name', 'LIKE', "%$term%");
    }
}
