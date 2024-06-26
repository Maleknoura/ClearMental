<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Publication;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function like($id)
    {

        $publication = Publication::findOrFail($id);
        $user = auth()->user();

        if ($publication->likedByUser($user)) {

            $publication->likes()->where('user_id', $user->id)->delete();
            return redirect()->back()->with('success', 'Like removed successfully');
        } else if($publication->dislikedByUser($user)){
            $publication->likes()->where('user_id', $user->id)->delete();
            $publication->likes()->create([
                'user_id' => $user->id,
                'type' => 'like',
            ]);
            return redirect()->back()->with('success', 'Publication liked successfully');
        } else{
            $publication->likes()->create([
                'user_id' => $user->id,
                'type' => 'like',
            ]);
            return redirect()->back()->with('success', 'Publication liked successfully');
        }
    }

    public function dislike($id)
    {
        $publication = Publication::findOrFail($id);
        $user = auth()->user();



        if ($publication->dislikedByUser($user)) {

            $publication->likes()->where('user_id', $user->id)->delete();
            return redirect()->back()->with('success', 'Publication disliked successfully');
        } else if($publication->likedByUser($user)) {
            // if ($publication->likedByUser($user)) {
                $publication->likes()->where('user_id', $user->id)->delete();
            // }
            
            $publication->likes()->create([
                'user_id' => $user->id,
                'type' => 'dislike',
            ]);
            
        return redirect()->back()->with('success', 'Publication disliked successfully');
        }else{
            $publication->likes()->create([
                'user_id' => $user->id,
                'type' => 'dislike',
            ]);
            return redirect()->back()->with('success', 'Publication liked successfully');
        }

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
    }
}
