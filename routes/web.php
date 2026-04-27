<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::post('/login', [PageController::class, 'prosesLogin']);

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);

Route::get('/info', [PageController::class, 'info']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/logout', [PageController::class, 'logout']);
