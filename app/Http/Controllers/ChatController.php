<?php

namespace App\Http\Controllers;

use App\Events\JoinLobby;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
    public function showChat(Request $request){

            event(
                new JoinLobby($request->input('username'),
                    $request->input('message')
                )
            );
            return ["succes" => true];
    }
}
