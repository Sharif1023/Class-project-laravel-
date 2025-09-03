@extends('layouts.master')

@section('title', 'Register')

@section('content')
<div class="container mt-4">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Register Form</h4>
        </div>
        <div class="card-body">
            <!-- Success message -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Validation errors -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name" required minlength="5">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required minlength="8">
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required minlength="8">
                </div>

                <button type="submit" class="btn btn-primary btn-block w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection