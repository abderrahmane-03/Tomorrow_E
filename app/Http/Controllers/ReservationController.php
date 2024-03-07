<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Participateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    public function auto(Event $event): RedirectResponse
    {

        $participant = Participateur::where('user_id', Auth::id())->first(); // Get the authenticated participant

        $reservation = Reservation::create([
            'participateur_id' => $participant->id,
            'event_id' => $event->id,
            'status' => 'accepted',
        ]);

        $event->update(['places_available' => $event->places_available - 1]);

        return redirect()->route('participateur')->with('success', 'Reservation created successfully!');
    }
    public function manuelle(Event $event): RedirectResponse
    {
        $participant = Participateur::where('user_id', Auth::id())->first(); // Get the authenticated participant

        $reservation = Reservation::create([
            'participateur_id' => $participant->id,
            'event_id' => $event->id,
            'status' => 'pending',
        ]);


        return redirect()->route('participateur')->with('success', 'Reservation is waiting for review!');
    }

}
