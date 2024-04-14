<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'publication_id' => 'required',
            'content' => 'required|string|max:255',
        ]);

        Commentaire::create([
            'publication_id' => $request->publication_id,
            'client_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commentaire $comment)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);
    
        if ($comment->user_id != auth()->user()->id) {
            return back()->with('error', 'You are not authorized to update this comment.');
        }
    
        $comment->update([
            'content' => $request->content,
        ]);
    
        return back()->with('success', 'Comment updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
