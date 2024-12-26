<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'profession',
        'image'
    ];

    public function scopeFilter(Builder $query, array $filters):void
    {
        if ($filters['author'] ?? false) {
            $query->where('slug',$filters['author']);
        }
    }
}
