<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Tag;
use Illuminate\Http\Request;

class PublicationController extends Controller
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

    public function publication(Request $request, $id)
    {
        // dd($request);
        $publication = Publication::findOrFail($id);
        $publication->update([
            'statut' => $request->statut,
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'Contenu' => 'required',
            'tags' => 'array', // Assurez-vous que le champ 'tags' est un tableau
        ]);
    
        // Récupérer l'ID du coach à partir de l'utilisateur actuellement authentifié
        $coach_id = auth()->user()->coach->id;
    
        // Créer la publication avec les données du formulaire et le coach_id récupéré
        $publication = Publication::create([
            'Contenu' => $request->Contenu,
            'coach_id' => $coach_id,
        ]);
    
        // Attacher les tags sélectionnés à la publication
        $publication->tags()->sync($request->tags);
    
        return redirect()->back()
            ->with('success', 'Publication créée avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $publications = Publication::all();
        $tags = Tag::all();


        return view('publication', compact('publications', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
