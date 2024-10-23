<?php

use App\Http\Controllers\ProfesseurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base');
});

Route::resource('professeur', ProfesseurController::class);
