@extends('layouts.master')

@section('title', 'Logout')

@section('content')
<div class="container">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body text-center">
            <h4 class="card-title">You have been logged out</h4>
            <p class="card-text text-muted">Thank you for visiting. We hope to see you again soon!</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>
@endsection
