<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    use HasFactory;


    public function scopeIsPublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrderByNewToOld($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
