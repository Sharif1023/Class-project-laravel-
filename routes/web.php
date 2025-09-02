<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;

// Home page
Route::get('/', function () {
    return view('home');
});

// Register routes
Route::get('/register', [RegisterController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Logout page
Route::get('/logout', function () {
    // You can also call Auth::logout() if using auth
    return view('logout');
});

// Profile page
Route::get('/profile', function () {
    return view('profile');
});

// Student form routes
// Show form (GET)
Route::get('/student-form', [StudentController::class, 'create'])->name('student.create');
// Submit form (POST)
Route::post('/student-form', [StudentController::class, 'store'])->name('student.store');
