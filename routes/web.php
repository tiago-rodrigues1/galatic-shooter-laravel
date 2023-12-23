<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartidaController;

Route::get('/', function() {
    return view('welcome');
});
Route::post('/player/new', [PlayerController::class, 'create']);
Route::post('/session/new', [LoginController::class, 'authenticate']);


Route::middleware('validate')->group(function() {
    Route::get('/game', function() {
        return view('game');
    });
    Route::get('/ranking', [PartidaController::class, 'ranking']); 
    Route::post('/partida/new', [PartidaController::class, 'create']);

});