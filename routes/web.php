
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CEspace;
use App\Http\Controllers\CContact;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

// Accueil accessible sans connexion
Route::get('/', function () {
    return view('welcome');
});

// Pages publiques
Route::get('/espace', [CEspace::class, 'index'])
    ->middleware('auth')
    ->name('espace');
Route::get('/contact', [CContact::class, 'index'])->name('contact');

// Achat accessible sans connexion
Route::get('/achat/{id}', [CommandeController::class, 'formulaire'])
    ->name('achat.formulaire');

Route::post('/achat/valider', [CommandeController::class, 'valider'])
    ->name('achat.valider');

// Routes de profil protégées par connexion
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Conserve les routes d'authentification
require __DIR__.'/auth.php';
