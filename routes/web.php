<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('game', [GameController::class, 'show']);

Route::get('board', [GameController::class, 'getBoard']);

Route::post('/send-message', [ChatController::class,'showChat']);

Route::post('/show-username', [PlayerController::class,'showPlayerName']);
