<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Favoris;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachs = Coach::with('user')->paginate(3);

        // dd($coachs);
        $favorites = Favoris::all();
        // dd($favorites);
        return view('home', compact('coachs', 'favorites'));
    }


    public function store(Request $request)
    {
        // Check authentication
        $user = auth()->user();
        if (!$user || !$user->client) {
            return response()->json(["success" => false, "message" => "Unauthorized"], 401);
        }
    
        // Validate request data
        $request->validate([
            'coachId' => 'required|exists:coaches,id',
        ]);
    
        // Fetch client and coach
        $client = $user->client;
        $coachId = $request->coachId;
        $coach = Coach::find($coachId);
    
        if (!$coach) {
            return response()->json(["success" => false, "message" => "Coach not found"], 404);
        }
    
        // Check if coach is already favorited
        if ($client->favoris()->where('coach_id', $coachId)->exists()        ) {
            $client->favoris()->where("coach_id", $coachId)->delete();
            return response()->json(["success" => true, "message" => "The coach removed from favorites"], 200);
        } else {
            // Create new favorite
            $client->favoris()->create([
                "coach_id" => $coachId,
            ]);
            return response()->json(["success" => true, "message" => "The coach synced to client favorites"], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
