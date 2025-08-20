@extends('layouts.master')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">User Registration</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
