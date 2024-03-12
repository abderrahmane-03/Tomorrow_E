<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\Reservation;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use App\Models\Participateur;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    public function store(Request $request){
        Category::create([
            'name'=>$request->input('name'),
        ]);
        return redirect()->back();
    }
    public function delete(Category $category){
        $category->delete();
        return redirect()->back();
    }
    public function update(Category $category, Request $request) {
        $CategoryId = $request->input('Category_id');
        $category = Category::findOrFail($CategoryId);

        $category->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->back()->with('success', 'Category updated successfully');
    }


    public function ban(User $user)
    {
                $user->banned = 1;
                $user->save();
        return redirect()->back()->with('success', 'User has been banned successfully.');
    }

    public function unban(User $user)
    {
         $user->banned = 0;
            $user->save();

            return redirect()->back()->with('success', 'User has been unbanned successfully.');
    }

    public function category()
    {
        $categories = Category::get();

        return view('admin-Categories', compact('categories'));
    }
    public function events()
    {
        $events = Event::with('category', 'organisateur.user')->get();
        return view('admin-Events', compact('events'));
    }
    public function accept(Event $event)
    {

      $event->update(["accepted"=>"accepted"]);

        return Redirect()->route('admin_events');
    }public function reject(Event $event)
    {

        $event->update(["accepted"=>"rejected"]);

          return Redirect()->route('admin_events');
      }
    public function index()
    {

        $users = User::whereHas('participateur')->orWhereHas('organisateur')->get();

        foreach ($users as $user) {
            // Check if the user exists in the Participateur table
            $participateur = Participateur::where('user_id', $user->id)->exists();

            // Check if the user exists in the Organisateur table
            $organisateur = Organisateur::where('user_id', $user->id)->exists();

            // Determine the user's role based on the existence in the Participateur or Organisateur table
            $user->role = $participateur ? 'participateur' : ($organisateur ? 'organisateur' : 'unknown');
        }

        $organizers = Organisateur::get();
        $categories = Category::get();
        $events = Event::get();
        $reservations = Reservation::get();
        $participateurs=Participateur::get();

        return view('admin-statestiques', compact('users','events', 'participateurs', 'reservations', 'organizers', 'categories'));
    }
}
