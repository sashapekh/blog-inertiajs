<?php

namespace App\Http\Controllers;

use App\Service\ArticleService;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function __construct(private readonly ArticleService $articleService) {}

    public function list(): \Inertia\Response
    {

        $articles = $this->articleService->getPreviewArticles();

        return Inertia::render('Articles/List', [
            'articles' => $articles,
        ]);
    }

    public function showArticle(string $articleSlug)
    {
        $article = $this->articleService->getBySlug($articleSlug);

        return Inertia::render('Articles/Show', [
            'article' => $article,
        ]);
    }
}
