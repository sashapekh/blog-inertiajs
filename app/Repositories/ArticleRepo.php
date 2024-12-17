<?php

namespace App\Repositories;

use App\Models\Article;
use  \Illuminate\Pagination\LengthAwarePaginator;

class ArticleRepo
{
    public function getAllWithPaginate($count = 10): LengthAwarePaginator
    {
        return Article::query()
            ->isPublished()
            ->orderByNewToOld()
            ->paginate($count);
    }


    public function getBySlug(string $slug)
    {
        return Article::query()
            ->isPublished()
            ->where('slug', $slug)
            ->first();
    }
}
