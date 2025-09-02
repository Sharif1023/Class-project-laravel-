<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Show registration form
    public function showForm()
    {
        return view('register'); // Blade view
    }

    // Handle form submission
    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Save user to database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect with success message
        return redirect()->route('register.form')->with('success', 'Registration successful!');
    }
}
