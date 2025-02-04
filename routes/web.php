<?php

use App\Http\Controllers\HopitalController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\PraticienController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SecretaireController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsPraticien;
use App\Http\Middleware\IsSuperAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum'])->prefix('/admin')->group(function () {
    Route::resource('praticiens', PraticienController::class);
    Route::resource('hopital', HopitalController::class)->middleware([IsSuperAdmin::class]);
    Route::resource('medicament', MedicamentController::class)->middleware([IsSuperAdmin::class]);
    Route::resource('service', ServiceController::class)->middleware([IsAdmin::class]);
    Route::resource('secretaire', SecretaireController::class)->middleware([IsAdmin::class]);

    Route::get('/praticien/create/search', [PraticienController::class, 'search'])->name('praticiens.search');
    Route::post('/secretaire/assigner', [SecretaireController::class, 'assigner'])->middleware([IsAdmin::class])->name('assigner.secretaire');

    Route::get('/praticien/disponiblite', [PraticienController::class, 'creneaus'])->middleware([IsPraticien::class])->name('praticien.disponibilite');
    Route::post('/praticien/disponiblite/save', [PraticienController::class, 'disponibilite_save'])->middleware([IsPraticien::class])->name('praticien.disponibilite.save');
    // Route::post('/praticien/disponiblite/change-interval', [DisponibiliteController::class, 'change_interval'])->middleware([IsPraticien::class])->name('praticien.disponibilite.change.interval');
});