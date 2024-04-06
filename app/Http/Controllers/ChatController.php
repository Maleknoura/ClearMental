<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
       
        
       
        $pusher = new Pusher('f4414fe3293d74a74a54', '9a936db3a44460433ed3', '1781900', [
            'cluster' => 'eu',
            'useTLS' => true,
        ]);

        $pusher->trigger('chat-channel', 'new-message', [
            'message' => $request->input('message'),
            'user' => $request->user()->name,
        ]);

        return response()->json(['status' => 'Message sent']);
    }
}
