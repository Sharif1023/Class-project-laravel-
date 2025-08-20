@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    {{-- ✅ Jumbotron Section --}}
    <div class="jumbotron mt-4">
        <h1 class="display-4">Welcome to Your Dashboard!</h1>
        <p class="lead">Here you can view recent activity, manage users, and monitor your site performance.</p>
        <hr class="my-4">
        <p>Use the sidebar to navigate through various sections of your admin panel.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

    
</div>
@endsection
