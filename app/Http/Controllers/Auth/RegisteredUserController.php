<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use App\Models\Participateur;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }
    public function create_org(): View
    {
        return view('auth.register-org');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        Participateur::create([ 'banned'=>0,'user_id'=> $user->id]);

        event(new Registered($user));

        Auth::login($user);

        return view('auth.login');
    }

    public function store_org(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        Organisateur::create([ 'user_id'=> $user->id,'banned'=>0,]);

        event(new Registered($user));

        Auth::login($user);

        return view('auth.login');

    }

    public function filter(Request $request)
    {
        $category = $request->input('category');
        // Query events with the specified category and eager load related models
        $events = Event::with('category', 'organisateur.user')
                                ->where('category_id', $category)
                                ->paginate(9);

        $categories = Category::get();

        // Pass the filtered data to the view
        return view('participateur', compact('events', 'categories'));
    }
    public function search(Request $request)
    {
        $event = $request->input('event');
        // Query events with the specified category and eager load related models
        $events = Event::with('category', 'organisateur.user')
        ->where('title', 'like', '%' . $event . '%')
        ->paginate(9);


        $categories = Category::get();

        // Pass the filtered data to the view
        return view('participateur', compact('events', 'categories'));
    }

}
