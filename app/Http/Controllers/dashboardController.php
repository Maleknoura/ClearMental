<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Coach;
use App\Models\Publication;
use App\Models\Tag;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $totalTags = Tag::count();
        $totalPublications = Publication::count();
        $totalCoachs = Coach::count();
        $totalClients = Client::count();

        $tags = Tag::all();
        return view('dashboard', compact('totalTags', 'totalPublications', 'totalCoachs', 'totalClients', 'tags'));
    }
}
