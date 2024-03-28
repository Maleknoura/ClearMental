<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Coach;
use App\Models\Publication;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $totalTags = Tag::count();
        $totalPublications = Publication::count();
        $totalCoachs = Coach::count();
        $totalClients = Client::count();

        $users = User::all();
        $tags = Tag::all();
        $publications = Publication::with('coach')->get();
        return view('dashboard', compact('totalTags', 'totalPublications', 'totalCoachs', 'totalClients', 'tags', 'users', 'publications'));
    }
    public function toggleStatus(Request $request, User $user)
    {
        // dd($request);
        $request->validate([
            'status' => 'required|boolean',
        ]);

        $user->update(['status' => !$user->status]);
        // dd($user->status);
        if ($user->status === true) {
            return redirect()->back()->withErrors(['error' => 'Unauthorized. User is banned.']);
        }

        return back()->with('success', 'User status updated successfully.');
    }
    
}
