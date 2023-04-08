<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/noticias', [NewsController::class, 'index']);

Route::get('/noticias/create', [NewsController::class, 'create']);
