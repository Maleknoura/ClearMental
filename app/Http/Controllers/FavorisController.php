<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Favoris;
use Illuminate\Http\Request;

class FavorisController extends Controller
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
    // public function store(Request $request,$coachId)
    // {
    //     // dd($request);
    //     $client = auth()->user()->client;
    //     $coach = Coach::findOrFail($coachId);

      
    //     $client->coachs()->attach($coach);

    //     return redirect()->back()->with('success', 'Coach added to favorites successfully');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Favoris $favoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favoris $favoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favoris $favoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favoris $favoris)
    {
        //
    }
}
