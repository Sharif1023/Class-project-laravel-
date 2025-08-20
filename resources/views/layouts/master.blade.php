<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Site')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 56px;
            left: 0;
            width: 220px;
            background-color: #f8f9fa;
            padding-top: 20px;
            border-right: 1px solid #dee2e6;
        }
        .content {
            margin-left: 240px;
            padding: 20px;
        }
        footer {
            background-color: #f8f9fa;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-top: 1px solid #dee2e6;
            font-size: 14px;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <a class="navbar-brand font-weight-bold text-primary" href="#">LaravelSite</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        {{-- Left nav links --}}
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>

        {{-- Search form --}}
        <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" method="GET">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search..." aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


    {{-- Sidebar --}}
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profile</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('/student-form') }}">Student Form</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>

        </ul>
    </div>

    {{-- Main Content --}}
    <main class="content">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        &copy; {{ date('Y') }} My Laravel Site. All rights reserved.
    </footer>

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
