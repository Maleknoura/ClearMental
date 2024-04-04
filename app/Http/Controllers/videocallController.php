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
        $roomName = 'JitsiMeetAPIExample';
        $width = 700;
        $height = 700;
        $lang = 'fr';
        $meetingUrl = "https://$domain/$roomName";
        return view('meet', compact('domain', 'roomName', 'width', 'height', 'lang'));
    }
}
