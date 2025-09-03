@extends('layouts.master')

@section('title', 'Registration Successful')

@section('content')
<div class="container mt-4">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Registration Successful</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>

            <a href="{{ route('register.form') }}" class="btn btn-primary mt-3">Register Another User</a>
            <a href="{{ route('users.list') }}" class="btn btn-info mt-3">View All Users</a>
        </div>
    </div>
</div>
@endsection
