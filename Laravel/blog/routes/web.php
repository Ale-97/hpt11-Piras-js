<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('articles', \App\Http\Controllers\ArticleController::class);
    Route::get('account/ResetPassword', [App\Http\Controllers\AccountController::class, 'viewUpdatePassword'])->name('updatePassword');
    Route::post('account/ResetPassword', [App\Http\Controllers\AccountController::class, 'updatePassword'])->name('updatePassword.store');
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);

});


Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'form'])->name('contacts');

Route::get('/whoIAm', [App\Http\Controllers\PageController::class, 'whoIAm'])->name('whoIAm');

Route::post('/contatti/invia', [App\Http\Controllers\ContactController::class, 'send'])->name('contacts.send');

Route::get('/anime/generi', [App\Http\Controllers\AnimeController::class, 'genres'])->name('anime.genres');
Route::get('/anime/generi/{id}', [App\Http\Controllers\AnimeController::class, 'genre'])->name('anime.genre');
Route::get('/anime/view/{id}/{category_id?}', [App\Http\Controllers\AnimeController::class, 'anime'])->name('anime.anime');




Route::get('account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
Route::get('/users', [App\Http\Controllers\userController::class, 'index']);

Route::get('/counter', Counter::class);
