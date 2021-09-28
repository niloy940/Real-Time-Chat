<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
        return view('chat');
    }

    // public function send(Request $request)
    // {
    //     $user = auth()->user();

    //     event(new ChatEvent($request->message, $user));
    // }

    public function send()
    {
        $user = auth()->user();

        $message = 'hello';

        event(new ChatEvent($message, $user));
    }
}
