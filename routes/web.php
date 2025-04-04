<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;
// Dashboard
Route::get('/', function () {
    return view('index');
})->name('dashboard');

// Cars routes
Route::resource('cars', CarController::class);

// Rentals routes
Route::resource('rentals', RentalController::class);

// Clients routes
Route::resource('clients', ClientController::class);