<?php

namespace App\Http\Controllers;

use App\Http\Requests\commentRequest;
use App\Models\Client;
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
    public function store(commentRequest $request)
    {
       
        $client = client::where("user_id", Auth::user()->id)->first()->id;
       
        Commentaire::create([
            'publication_id' => $request->publication_id,
            'client_id' => $client,
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
    public function update(commentRequest $request,Commentaire $comment)
    {

       
        
        dd($request);
        
        $comment->update([
            'content' => $request->content,
        ]);
    
        return back()->with('success', 'Comment updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $comment)
    {
       
  
    
        $comment->delete();
    
        return back()->with('success', 'Comment deleted successfully.');
    }
}
