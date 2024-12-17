<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Service\SeoService;


Route::get('/', function () {
    return Inertia::render('Index', [
        "seoParams" => app(SeoService::class)->getDefaulSeoParams(
            h1Header: "Personal Blog of a Web Developer"
        )->toArray()
    ]);
});

Route::group(["prefix" => "articles"], function () {
    Route::get('/', [App\Http\Controllers\ArticleController::class, 'list'])->name('articles.list');
    Route::get('/{articleSlug}', [App\Http\Controllers\ArticleController::class, 'showArticle'])->name("articles.show");
});
