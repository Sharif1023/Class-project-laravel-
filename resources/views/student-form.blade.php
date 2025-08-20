@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@extends('layouts.master')
@section('title', 'Student Registration')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg rounded-3">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">🎓 Student Registration Form</h4>
                </div>

                <div class="card-body p-4">
                        <form action="{{ route('student.store') }}" method="POST">

                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="e.g. John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="roll" class="form-label fw-bold">Roll No</label>
                                <input type="text" class="form-control" id="roll" name="roll" placeholder="e.g. 101" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="class" class="form-label fw-bold">Class</label>
                                <input type="text" class="form-control" id="class" name="class" placeholder="e.g. 10" required>
                            </div>
                            <div class="col-md-6">
                                <label for="section" class="form-label fw-bold">Section</label>
                                <input type="text" class="form-control" id="section" name="section" placeholder="e.g. A" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="dob" class="form-label fw-bold">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Email (optional)</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="student@email.com">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">Reset</button>
                            <button type="submit" class="btn btn-success">✅ Submit</button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center text-muted small">
                    © {{ date('Y') }} Student Management System
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
