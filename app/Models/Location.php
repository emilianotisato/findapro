<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function scopeSearch(Builder $query, string $term)
    {
        return $query->where('name', 'LIKE', "%$term%");
    }
}
