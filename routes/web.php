<?php

use App\Models\Event;
use App\Models\Category;
use App\Models\organisateur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/organisateur', function () {
    return view('organisateur');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('Admin')->group(function () {
   });
   Route::middleware('organisateur')->group(function () {
});
Route::middleware('role:participateur')->group(function () {
    Route::get('/participateur/reservations', function () {
        $events = Event::with('category', 'organisateur.user')->paginate(9);
        $categories = Category::get();
        return view('resservations', compact('events', 'categories'));
    })->name('reservation');
    Route::get('/participateur', function () {
        $events = Event::with('category', 'organisateur.user')->paginate(9);
        $categories = Category::get();
        return view('participateur', compact('events', 'categories'));
    })->name('participateur');
    Route::post('/participateur/A_reservation/{event}', [ReservationController::class, 'auto'])->name('automatique.reservation');
    Route::post('/participateur/M_reservation/{event}', [ReservationController::class, 'manuelle'])->name('manuelle.reservation');

    Route::post('/participateur/filter', [RegisteredUserController::class, 'filter'])->name('event-filtre');
    Route::post('/participateur/search', [RegisteredUserController::class, 'search'])->name('event-search');
});
require __DIR__.'/auth.php';
