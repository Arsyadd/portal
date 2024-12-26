<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerAds extends Model
{
    protected $fillable = [
        'image',
        'link',
        'type',
        'is_active',
    ];
}
