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


        $coachId = $request->input('coach_id');

        $clientId = Auth::user()->client->first()->id;
        $timeSlot = $request->input('selected_hour');
        $appointmentDate = $request->input('appointment_date');

        // dd($appointmentDate);

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
        $coach = Coach::with('user')->findOrFail($id);


        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }

        // Date actuelle
        $currentDate = now()->format('Y-m-d');

        $reservedHours = Reservation::whereDate('appointment_date', $currentDate)
            ->where('coach_id', $id)
            ->pluck('time_slot');

        // Heures disponibles
        $availableHours = range(9, 17);

        $availableHours = array_diff($availableHours, $reservedHours->toArray());

        $appointment_date = $currentDate;

        return view('profile', compact('coach', 'availableHours', 'appointment_date'));
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
    public function update(Request $request, $id)
    {

        $reservation = Reservation::findOrFail($id);
        $reservation->update([
            'statut' => $request->statut,
        ]);

        return redirect()->back()->with('success', 'La réservation a été acceptée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
