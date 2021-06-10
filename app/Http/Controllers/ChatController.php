<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
    public function showChat(Request $request){

            event(
                new Message($request->input('username'),
                    $request->input('message')
                )
            );
            return ["succes" => true];
    }
}
