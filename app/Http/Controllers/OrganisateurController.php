<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class OrganisateurController extends Controller
{
    public function destroy(Event $event){

        $event->delete();
         return redirect()->route('organisateur');

    }
    public function store(Request $request){

        $request->validate([
            'title'=>'nullable',
            'description'=>'nullable',
            'places_available'=>'nullable',
            'date'=>'nullable',
            'location'=>'nullable',
            'picture'=>'nullable',
            'type_of_reservation'=>'nullable',
        ]);
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $pictureName = time() . '.' . $file->extension();
            $file->move(public_path('images'), $pictureName);
            $eventdata['picture'] = 'images/' . $pictureName;
        }



        Event::create([
            'category_id'=>$request->input('category_id'),
            'organisateur_id'=>$request->input('organisateur_id'),
            'title'=>$request->input('title'),
            'description'=>$request->input('description') ,
            'places_available'=>$request->input('places_available'),
            'date'=>$request->input('date'),
            'location'=>$request->input('location'),
            'picture'=>$eventdata['picture'],
            'type_of_reservation'=>$request->input('type_of_reservation')
        ]);

        return redirect()->route('organisateur');
    }

    public function update(Request $request, Event $event)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'nullable',
            'category_id' => 'nullable',
            'description' => 'nullable',
            'places_available' => 'nullable',
            'location' => 'nullable',
            'date' => 'nullable',
            'picture' => 'nullable',
            'type_of_reservation' => 'nullable',
        ]);

        // Update the event details
        if (!empty($validatedData['title'])) {
            $event->title = $validatedData['title'];
        }
        if (!empty($validatedData['category_id'])) {
            $event->category_id = $validatedData['category_id'];
        }
        if (!empty($validatedData['description'])) {
            $event->description = $validatedData['description'];
        }
        if (!empty($validatedData['places_available'])) {
            $event->places_available = $validatedData['places_available'];
        }
        if (!empty($validatedData['location'])) {
            $event->location = $validatedData['location'];
        }
        if (!empty($validatedData['date'])) {
            $event->date = $validatedData['date'];
        }

        // Update the picture if provided
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $pictureName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $pictureName);
            $event->picture = 'images/' . $pictureName;
        }

        // Update the type of reservation if provided
        if (!empty($validatedData['type_of_reservation'])) {
            $event->type_of_reservation = $validatedData['type_of_reservation'];
        }

        // Save the changes
        $event->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Event updated successfully!');
    }

}
