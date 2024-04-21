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
    
    public function favoris(Request $request)
    {
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
        ]);
        
        $user = auth()->user();
    
        if ($user->clients()->exists()) {
            $client = $user->clients()->first();
    
            $coachId = $request->coach_id;
    
            if ($client->favoris()->where('coaches.id', $coachId)->exists()) {
                $client->favoris()->detach($coachId);
                return response()->json(["success" => true, "message" => "The coach removed from favorites"], 200);
            } else {
                $client->favoris()->attach($coachId);
                return response()->json(["success" => true, "message" => "The coach synced to client favorites"], 200);
            }
        } else {
            return response()->json(["success" => false, "message" => "User has no associated clients"], 404);
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
