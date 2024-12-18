<?php

namespace App\Service;

use App\Models\Article;
use App\Repositories\ArticleRepo;
use Illuminate\Pagination\LengthAwarePaginator;
use Str;

class ArticleService
{
    public function __construct(
        private readonly ArticleRepo $articleRepo
    ) {}


    public function getPreviewArticles(): LengthAwarePaginator
    {
        $articles = $this->articleRepo->getAllWithPaginate();

        $articles->getCollection()->transform(fn(Article $article) => [
            'id' => $article->id,
            'title' => $article->title,
            'content' => Str::limit($article->content, 100),
            'url' => route('articles.show', $article->slug),
            'created_at' => $article->created_at->format('M, j Y'),
        ]);

        return new LengthAwarePaginator(
            $articles->values(),
            $articles->total(),
            $articles->perPage(),
            $articles->currentPage(),
            [
                'path' => LengthAwarePaginator::resolveCurrentPath(),
            ]
        );
    }


    public function getArticles(): LengthAwarePaginator
    {
        return $this->articleRepo->getAllWithPaginate();
    }

    public function getBySlug(string $slug)
    {
        /** @var Article $article */
        $article =  $this->articleRepo->getBySlug($slug);

        if (!$article) {
            abort(404);
        }

        return [
            'id' => $article->id,
            'title' => $article->title,
            'content' => $article->content,
            'created_at' => $article->created_at->format('M, j Y'),
        ];
    }

    public function create(array $data): Article
    {
        return $this->articleRepo->create($data);
    }

    public function update(int $articleId, array $data): Article
    {
        return $this->articleRepo->update($articleId, $data);
    }

    public function delete(int $articleId): void
    {
        $this->articleRepo->delete($articleId);
    }
}
