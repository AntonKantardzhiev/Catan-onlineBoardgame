<?php

namespace App\Http\Controllers;

use App\Events\JoinLobby;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    public function showPlayerName(Request $request){

        event(
            new JoinLobby($request->input('username')
            )
        );
        return ["succes" => true];
    }
}
