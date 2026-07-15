<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- Banner Section --}}
    <div class="banner">
        @yield('banner')
    </div>

    {{-- Navigation Menu --}}
    <nav class="navbar">
        <ul class="nav-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/bio">Bio</a></li>
            <li><a href="/assignment">Assignment</a></li>
        </ul>
    </nav>

    {{-- Main Content --}}
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
