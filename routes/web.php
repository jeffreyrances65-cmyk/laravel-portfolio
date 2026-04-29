<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});

// ADMIN ROUTES
Route::resource('admin/projects', ProjectController::class);
