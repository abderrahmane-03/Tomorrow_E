<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\View\View;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use App\Models\Participateur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Auth\RegisteredUserController;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = $request->user();

        if ($user->is_organisateur()) {
            Session::put('role', 'organisateur');
            return redirect()->route('organisateur');
        } else if ($user->is_participateur()) {
            Session::put('role', 'participateur');
            return redirect()->route('participateur');
        } else if ($user->is_admin()) {
            Session::put('role', 'admin');
            return redirect()->intended('admin');
        }


        return redirect()->route('/');
 }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}


