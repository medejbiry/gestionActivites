<?php

use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base');
});

Route::resource('professeur', ProfesseurController::class);
Route::resource('etudiants', EtudiantController::class);
