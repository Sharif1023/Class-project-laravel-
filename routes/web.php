<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});


// Show register form
Route::get('/register', function () {
    return view('register');
});

// Handle form submission
Route::post('/register', function (\Illuminate\Http\Request $request) {
    // You can validate and save user here
    return "User Registered: " . $request->input('name');
});



// Logout view page
Route::get('/logout', function () {
    // Here you can also call Auth::logout() if using auth
    return view('logout');
});


Route::get('/profile', function () {
    return view('profile');
});




Route::get('/student-form', function () {
    return view('student-form');
});


use App\Http\Controllers\StudentController;

// ফর্ম দেখানোর জন্য GET
Route::get('/student-form', [StudentController::class, 'create'])->name('student.create');

// ফর্ম সাবমিট করার জন্য POST
Route::post('/student-form', [StudentController::class, 'store'])->name('student.store');


