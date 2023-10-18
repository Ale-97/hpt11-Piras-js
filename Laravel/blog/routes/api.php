<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/articoli', function () {

    return [
        ['id' => 1, 'title' => 'Articolo 1', 'category' => 'Esteri', 'description' => 'Descrizione breve ...', 'visible' => true],
        ['id' => 2, 'title' => 'Articolo 2', 'category' => 'Sport', 'description' => 'Descrizione breve ...', 'visible' => true],
        ['id' => 3, 'title' => 'Articolo 3', 'category' => 'Economia', 'description' => 'Descrizione breve ...', 'visible' => true],
        ['id' => 4, 'title' => 'Articolo 4', 'category' => 'Cronaca', 'description' => 'Descrizione breve ...', 'visible' => false],
    ];
});
