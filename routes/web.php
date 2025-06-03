<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicationController;

Route::get('/', function () {
    return redirect()->route('medications.index');
});

Route::resource('medications', MedicationController::class);
