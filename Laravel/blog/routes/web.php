<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::get('/articoli', [App\Http\Controllers\ArticleController::class, 'viwArticles'])->name('articles');

Route::get('/articolo/{id}', [App\Http\Controllers\ArticleController::class, 'viwArticle'])->name('article');

Route::get('/contatti', [App\Http\Controllers\PageController::class, 'contacts'])->name('contacts');

Route::get('/whoIAm', [App\Http\Controllers\PageController::class, 'whoIAm'])->name('whoIAm');
