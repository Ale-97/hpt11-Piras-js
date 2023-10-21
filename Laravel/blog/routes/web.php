<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::get('/articoli', [App\Http\Controllers\ArticleController::class, 'viwArticles'])->name('articles');

Route::get('/articolo/{id}', [App\Http\Controllers\ArticleController::class, 'viwArticle'])->name('article');

Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'form'])->name('contacts');

Route::get('/whoIAm', [App\Http\Controllers\PageController::class, 'whoIAm'])->name('whoIAm');

Route::post('/contatti/invia', [App\Http\Controllers\ContactController::class, 'send'])->name('contacts.send');

Route::get('/anime/generi', [App\Http\Controllers\AnimeController::class, 'genres'])->name('anime.genres');
Route::get('/anime/generi/{id}', [App\Http\Controllers\AnimeController::class, 'genre'])->name('anime.genre');
Route::get('/anime/view/{id}/{category_id?}', [App\Http\Controllers\AnimeController::class, 'anime'])->name('anime.anime');

Route::get('/insert-data', [App\Http\Controllers\ArticleController::class, 'insertData'])->name('createArticle');
Route::get('/account/articoli/crea', [App\Http\Controllers\ArticleController::class, 'create'])->name('account.articles.create');
Route::post('/account/articoli/crea', [App\Http\Controllers\ArticleController::class, 'store'])->name('account.articles.store');