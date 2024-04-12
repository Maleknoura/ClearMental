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
    public function index(Request $request)
    {
        {
            $tags = Tag::all();
            $publications = Publication::with(['tags', 'coach'])->orderBy('created_at', 'desc')->paginate(2);
            if ($request->has('tag')) {
                $tag = Tag::findOrFail($request->tag);
                $publications = $tag->publications()->with('coach', 'tags')->orderByDesc('created_at')->paginate(2);
            }
           
            return view('actuality', compact('publications','tags'));
        }
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
      
        $request->validate([
            'Contenu' => 'required',
            'tags' => 'array', 
            'image' => 'image',
        ]);
    
       
        $coach_id = auth()->user()->coach->id;
    
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('/public/images', $imageName);
     
        $publication = Publication::create([
            'Contenu' => $request->Contenu,
            'coach_id' => $coach_id,
            'image'=> $imageName,
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
      
        $tags = Tag::all();
        $coachId = auth()->user()->coach->id;

  
        $publications = Publication::where('coach_id', $coachId)
            ->with('tags')
            ->get();

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
    public function update(Request $request, Publication $id)
    {
        // dd($request);
        $request->validate([
            'Contenu' => 'required',
            'tags' => 'array', 
            'image' => 'image',
        ]);
    
       

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('/public/images', $imageName);

        $id->update([
            'Contenu' => $request->Contenu,
           
            'image' => $imageName,
            
        ]);
        $id->tags()->sync($request->tags);

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
       

        // Récupérer la publication à supprimer
        $publication = Publication::find($id);
    
    
        
            // Supprimer les relations dans la table pivot avec les tags
            $publication->tags()->detach();
            $publication->delete();
    
            // Supprimer la publication
    
            return redirect()->back()->with('success', 'La publication a été supprimée avec succès.');
        
    }
}
