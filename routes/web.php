<?php

use App\Http\Controllers\HopitalController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\PraticienController;
use App\Http\Middleware\IsAdmin;
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

Route::middleware(['auth:sanctum', IsAdmin::class])->prefix('/admin')->group(function () {
    Route::resource('praticiens', PraticienController::class);
    Route::resource('hopital', HopitalController::class);
    Route::resource('medicament', MedicamentController::class);
    Route::get('/praticien/create/search', [PraticienController::class, 'search'])->name('praticiens.search');
});