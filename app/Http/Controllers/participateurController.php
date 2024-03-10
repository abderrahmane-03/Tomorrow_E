<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;

class participateurController extends Controller
{
     public function index()
    {
        $tickets = Ticket::get();
        $events = Event::with('category', 'organisateur.user')->where("accepted", "online")->paginate(9);
        $reservations = [];
        foreach ($events as $event) {
            $reservations[$event->id] = Reservation::where('event_id', $event->id)->get();
        }
        $categories = Category::get();
        return view('participateur', compact('events', 'categories', 'tickets'));
    }

    public function tickets()
    {
        $tickets = Ticket::get();
        return view('ticket', compact('tickets'));
    }
}
