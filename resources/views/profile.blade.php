@extends('layouts.master')

@section('title', 'Profile')

@section('content')

<style>
    body {
        background: url('https://c4.wallpaperflare.com/wallpaper/295/264/47/ktm-bikes-racing-hd-wallpaper-preview.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    .overlay-content {
        background-color: rgba(255, 255, 255, 0.85);
        padding: 40px;
        border-radius: 10px;
    }
</style>

<div class="container my-5">
    <div class="overlay-content">
        <h1 class="text-center mb-4">User Profile Overview</h1>

        {{-- Profile Heading --}}
        <h4 class="text-center text-primary mb-3">Meet Our Member</h4>

        {{-- Profile Card --}}
        <div class="card mb-4 mx-auto" style="max-width: 600px;">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center p-3">
                    <img src="https://c4.wallpaperflare.com/wallpaper/295/264/47/ktm-bikes-racing-hd-wallpaper-preview.jpg" class="card-img-top img-thumbnail mb-2" alt="Profile Picture">
                    <span class="font-weight-bold">John Doe</span>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text"><strong>Email:</strong> john@example.com</p>
                        <p class="card-text"><strong>Phone:</strong> +8801234567890</p>
                        <p class="card-text"><strong>Location:</strong> Dhaka, Bangladesh</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Gallery --}}
        <h5 class="mt-4">Gallery</h5>
        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="https://c4.wallpaperflare.com/wallpaper/295/264/47/ktm-bikes-racing-hd-wallpaper-preview.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://c4.wallpaperflare.com/wallpaper/295/264/47/ktm-bikes-racing-hd-wallpaper-preview.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://c4.wallpaperflare.com/wallpaper/295/264/47/ktm-bikes-racing-hd-wallpaper-preview.jpg" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>
@endsection
