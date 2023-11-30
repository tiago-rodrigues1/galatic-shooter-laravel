<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LoginController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/game', function() {
    return view('game');
});

Route::post('/player/new', [PlayerController::class, 'create']);
Route::post('/session/new', [LoginController::class, 'authenticate']);