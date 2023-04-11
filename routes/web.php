<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/noticias', [NewsController::class, 'index']);

Route::get('/noticias/create', [NewsController::class, 'create']);
Route::post('/noticias/create', [UserController::class, 'store']);
Route::delete('noticias.destroy.{id}', [NewsController::class, 'destroy'])->name('noticias.destroy');

