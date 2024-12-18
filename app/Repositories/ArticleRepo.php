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

    public function create(array $data): Article
    {
        return Article::query()->create($data);
    }

    public function update(int $articleId, array $data): Article
    {
        $article = Article::query()->findOrFail($articleId);
        $article->update($data);
        return $article->refresh();
    }

    public function delete(int $articleId): void
    {
        Article::query()->findOrFail($articleId)->delete();
    }
}
