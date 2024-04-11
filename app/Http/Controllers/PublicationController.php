<?php

namespace App\Http\Controllers;

use App\Models\Publication;
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
            'statut' => 'required',
            'coach_id' => 'required',
            'tags' => 'array', // Assurez-vous que le champ 'tags' est un tableau
        ]);

     
        $publication = Publication::create([
            'Contenu' => $request->Contenu,
            'statut' => $request->statut,
            'coach_id' => $request->coach_id,
        ]);

       
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
    
   
    return view('dashboardcoach', compact('publications'));
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
