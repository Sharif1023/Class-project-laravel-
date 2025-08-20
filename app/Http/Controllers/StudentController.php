<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
{
    return view('student-form'); // student-form.blade.php view
}


    

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'roll'    => 'required|string|unique:students',
            'class'   => 'required|string',
            'section' => 'required|string',
            'dob'     => 'required|date',
            'email'   => 'nullable|email',
        ]);

        Student::create($request->all());

        return redirect()->back()->with('success', 'Student registered successfully!');
    }
}
