<?php

use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// * Overview related routes
Route::get('/overview', function () {
    return view('overview');
});

// * Class related routes
Route::get('/classes', [ClassController::class, "showClassesPage"]);
