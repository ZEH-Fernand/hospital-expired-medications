<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medications', MedicationController::class);
