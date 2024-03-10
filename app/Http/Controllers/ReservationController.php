<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Mail\TicketInformation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Participateur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    public function auto(Event $event): RedirectResponse
    {
        $participant = Participateur::where('user_id', Auth::id())->first(); // Get the authenticated participant

        Reservation::create([
            'participateur_id' => $participant->id,
            'event_id' => $event->id,
            'status' => 'accepted',
        ]);

        $event->update(['places_available' => $event->places_available - 1]);
        $latestReservation = Reservation::latest()->first();

        $randomCode = '';
                $length = 10;
                $characters = '0123456789';
                $charactersLength = strlen($characters);
                for ($i = 0; $i < $length; $i++) {
                    $randomCode .= $characters[rand(0, $charactersLength - 1)];
                }

        $ticket = Ticket::create([
            'reservation_id' => $latestReservation->id,
            'name' => $event->title,
            'description' => $event->description,
            'place' => $event->places_available + 1,
            'Date' => $event->date,
            'picture' => $event->picture,
            'barCode' => $randomCode,
            'location' => $event->location
        ]);

        // Send email with ticket information
        Mail::to(Auth::user()->email)->send(new TicketInformation($ticket));

        return redirect()->route('participateur');
    }
    public function manuelle(Event $event): RedirectResponse
    {
        $participant = Participateur::where('user_id', Auth::id())->first(); // Get the authenticated participant

        Reservation::create([
            'participateur_id' => $participant->id,
            'event_id' => $event->id,
            'status' => 'pending',
        ]);


        return redirect()->route('participateur')->with('success', 'Reservation is waiting for review!');
    }
    public function accept(Reservation $reservation): RedirectResponse
    {
     $reservation->update(['status' => 'accepted']);

        $reservation->event->update(['places_available' => $reservation->event->places_available - 1]);
        $latestReservation = Reservation::latest()->first();

                $randomCode = '';
                $length = 10;
                $characters = '0123456789';
                $charactersLength = strlen($characters);
                for ($i = 0; $i < $length; $i++) {
                    $randomCode .= $characters[rand(0, $charactersLength - 1)];
                }

         $ticket=Ticket::create([
            'reservation_id' => $latestReservation->id,
            'name' => $reservation->event->title,
            'description' => $reservation->event->description,
            'place'=>$reservation->event->places_available + 1,
            'Date'=>$reservation->event->date,
            'picture'=>$reservation->event->picture,
            'barCode'=>$randomCode,
            'location'=>$reservation->event->location
        ]);

        Mail::to(Auth::user()->email)->send(new TicketInformation($ticket));

        return redirect()->route('reservations');
    }
    public function reject(Reservation $reservation): RedirectResponse
    {
     $reservation->update([
            'status' => 'rejected',
        ]);


        return redirect()->route('reservations');
    }


}
