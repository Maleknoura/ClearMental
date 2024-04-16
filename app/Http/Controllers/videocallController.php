<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videocallController extends Controller
{
    public function show()
    {
        return view('meet');
    }

    public function startMeeting()
    {
        $domain = 'meet.jit.si';
        $roomName = 'your room';
        $width = 1200;
        $height = 600;
        $lang = 'fr';
        $meetingUrl = "https://$domain/$roomName";
        return view('meet', compact('domain', 'roomName', 'width', 'height', 'lang'));
    }
}
