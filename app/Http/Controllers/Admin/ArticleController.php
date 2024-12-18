<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Service\ArticleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function __construct(
        private readonly ArticleService $articleService
    ) {}

    public function list()
    {
        return inertia("Admin/Article/List", [
            "articles" => $this->articleService->getArticles()
        ]);
    }

    public function showArticle(Article $article)
    {
        return inertia("Admin/Article/Show", [
            "article" => $article
        ]);
    }

    public function create(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "title" => "required|string",
            "content" => "required|string",
            "slug" => "required|string|unique:articles,slug",
            "is_published" => "required|boolean"
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $this->articleService->create($request->all());

        return redirect()->route("admin.articles.list");
    }

    public function update(Request $request, Article $article)
    {
        $validate = Validator::make($request->all(), [
            "title" => "required|string",
            "content" => "required|string",
            "slug" => "required|string|unique:articles,slug," . $article->id,
            "is_published" => "required|boolean"
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $this->articleService->update($article->id, $request->all());

        return redirect()->route("admin.articles.list");
    }

    public function delete(Article $article)
    {
        $this->articleService->delete($article->id);

        return redirect()->route("admin.articles.list");
    }
}
