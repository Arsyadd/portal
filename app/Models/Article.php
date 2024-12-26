<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'image',
        'title',
        'slug',
        'body',
        'is_slider',
        'category_id',
        'author_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function scopeFilter(Builder $query, array $filters = []):void
    {
        if ( $filters['search'] ?? false ) {
            $query->where('title','like','%'.$filters['search'].'%');
        }

        if ($filters['category'] ?? false) {
            $query->whereHas('category', fn ($query) => $query->where('slug',$filters['category']));
        }

        if ($filters['author'] ?? false) {
            $query->whereHas('author', fn ($query) => $query->where('slug',$filters['author']));
        }

        $query->with('category')->with('author')->latest();
    }
}
