<?php

use App\Events\JoinLobby;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

Route::post('/send-message', function (Request $request) {
    event(
        new JoinLobby($request->input('username'),
            $request->input('message')
        )
    );
    return ["succes" => true];
});
