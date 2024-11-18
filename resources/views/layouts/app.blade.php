<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
    
</head>
<body>
    <Header>
        <h1>My Laravel App</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
            </ul>
        </nav>
    </Header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{{ date('Y') }} My Laravel App</p>
    </footer>

    <script src="{{ asset(js/app.js) }}"></script>
    @yield('scripts')
</body>
</html>