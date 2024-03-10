<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\participateurController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware('role:admin')->group(function(){
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/adminstats', function () {
            return view('adminstats');
        })->name('adminstats');
    });
    Route::middleware('role:organisateur')->group(function () {
        Route::post('/organisateur/update/{event}', [OrganisateurController::class, 'update'])->name('organisateur.update');
        Route::delete('/organisateur/{event}', [OrganisateurController::class, 'destroy'])->name('delete.event');
        Route::post('/store', [OrganisateurController::class, 'store'])->name('organisateur.store');
        Route::put('/organisateur/accept/{reservation}', [ReservationController::class, 'accept'])->name('reservation.accept');
        Route::put('/organisateur/reject/{reservation}', [ReservationController::class, 'reject'])->name('reservation.reject');
        Route::get('/organisateur/reservations', [OrganisateurController::class, 'reservations'])->name('reservations');
        Route::get('/organisateur', [OrganisateurController::class, 'index'])->name('organisateur');
    });

    Route::middleware('role:participateur')->group(function () {
        Route::get('/participateur/tickets', [participateurController::class, 'tickets'])->name('tickets');
        Route::get('/participateur', [participateurController::class, 'index'])->name('participateur');
        Route::post('/participateur/A_reservation/{event}', [ReservationController::class, 'auto'])->name('automatique.reservation');
        Route::post('/participateur/M_reservation/{event}', [ReservationController::class, 'manuelle'])->name('manuelle.reservation');
        Route::post('/participateur/filter', [participateurController::class, 'filter'])->name('event-filtre');
        Route::post('/participateur/search', [participateurController::class, 'search'])->name('event-search');
    });
});

require __DIR__ . '/auth.php';
