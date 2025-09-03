<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;

// Home page (optional)
Route::get('/home', function () {
    return view('home');
});

// Show registration form
Route::get('/register', [RegisterController::class, 'showForm'])->name('register.form');

// Handle form submission
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Show registered user info after registration
Route::get('/register/{id}', [RegisterController::class, 'show'])->name('register.show');

// All users page (optional)
Route::get('/users', [RegisterController::class, 'showUsers'])->name('users.list');;

// All users page
Route::get('/users', [RegisterController::class, 'showUsers'])->name('users.list');


// Show all users
Route::get('/users', [RegisterController::class, 'showUsers'])->name('users.list');

// Edit user
Route::get('/users/{id}/edit', [RegisterController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [RegisterController::class, 'update'])->name('users.update');

// Delete user
Route::delete('/users/{id}', [RegisterController::class, 'destroy'])->name('users.destroy');

// Student form routes
Route::get('/student-form', [StudentController::class, 'create'])->name('student.create');
Route::post('/student-form', [StudentController::class, 'store'])->name('student.store');

// Profile & Logout pages
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/logout', function () {
    return view('logout');
});
