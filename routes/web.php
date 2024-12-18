<?php

use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Service\SeoService;
use App\Http\Controllers\ArticleController as PageArticleController;

Route::get('/', function () {
    return Inertia::render('Index', [
        "seoParams" => app(SeoService::class)->getDefaulSeoParams(
            h1Header: "Personal Blog of a Web Developer"
        )->toArray()
    ]);
})->name('index');

Route::group(["prefix" => "articles"], function () {
    Route::get('/', [PageArticleController::class, 'list'])->name('articles.list');
    Route::get('/{articleSlug}', [PageArticleController::class, 'showArticle'])->name("articles.show");
});

Route::middleware(["auth"])->group(function () {
    Route::group(["prefix" => "admin"], function () {
        Route::group(["prefix" => "article"], function () {
            Route::get("/", [ArticleController::class, 'list'])->name('admin.articles.list');
            Route::get("/{article}")->name('admin.articles.show');
            Route::put("/{articleId}")->name('admin.articles.update');
            Route::post("/{articleId}")->name('admin.articles.create');
            Route::delete("/{articleId}")->name('admin.articles.delete');
        });
    });
});
