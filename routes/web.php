<?php

use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// * Class Related Routes
Route::get('/overview', function () {
    return view('overview');
});

// * Class Related Routes
Route::get('/classes', [ClassController::class, "showClassesPage"]);
