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
        return view('register'); // Just the form, no users here
    }

    // Handle registration
    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Save user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to "show user" page
        return redirect()->route('register.show', $user->id)
                         ->with('success', 'Registration successful!');
    }

    // Show registered user info
    public function show($id)
    {
        $user = User::findOrFail($id); // Get user by ID
        return view('register.show', compact('user'));
    }

    // Show all registered users
public function showUsers()
{
    // Order by ascending id so oldest first, newest at the bottom
    $users = User::orderBy('id', 'asc')->paginate(5); // 5 per page
    return view('register.users', compact('users'));
}



// Edit user
public function edit($id)
{
    $user = User::findOrFail($id);
    return view('register.edit', compact('user'));
}

// Update user
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|min:5|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->route('users.list')->with('success', 'User updated successfully!');
}

// Delete user
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.list')->with('success', 'User deleted successfully!');
}


}
