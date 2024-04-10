<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Coach;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
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
      
        
        // Récupérez les données du formulaire
        $coachId = $request->input('coach_id');
        
        $clientId = Auth::user()->client->id;
        $timeSlot = $request->input('selected_hour');
        $appointmentDate = $request->input('appointment_date');
        
        // dd($appointmentDate);
        // Créez la réservation
        Reservation::create([
            'coach_id' => $coachId,
            'client_id' => $clientId,
            'time_slot' => $timeSlot,
            'appointment_date' => $appointmentDate,
        ]);
    
        return redirect()->back()->with('success', 'Réservation effectuée avec succès !');
    }
    
    
    
    


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérez le coach à partir de l'ID
        $coach = User::where('id', $id)->where('role', 'coach')->firstOrFail();
        
        // Assurez-vous que l'utilisateur est authentifié avant de poursuivre
        $user = auth()->user();
        if (!$user) {
            // Redirigez l'utilisateur vers la page de connexion s'il n'est pas authentifié
            return redirect()->route('login');
        }
        $appointment_date = now()->toDateString();
        $availableHours = [];
        for ($hour = 9; $hour <= 17; $hour++) {
            $availableHours[] = $hour;
        }
    
        // Générez la liste des heures disponibles pour la réservation
        $currentDate = now();
        $reservedHours = Reservation::whereDate('appointment_date', $currentDate->format('Y-m-d'))
            ->where('coach_id', $id)
            ->pluck('time_slot');
        
        $availableHours = [];
        for ($hour = 9; $hour <= 17; $hour++) {
            // Vérifiez si l'heure est déjà réservée pour ce jour
            if (!$reservedHours->contains($hour)) {
                $availableHours[] = $hour;
            }
        }
    
        return view('profile', compact('coach', 'availableHours','appointment_date'));
    }


    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
