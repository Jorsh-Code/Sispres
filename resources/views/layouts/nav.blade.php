<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sispres</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    @yield('style')
</head>

<body>
    <header>
        <div class="menu-bar">

            <p class="menu-logo">
                Sispres
                <span id="btn-show" class="icon-list-bullet"></span>
            </p>


        </div>
        <div class="logo">
            <p><a href="{{ url('/') }}">Sispres</a></p>
        </div>
        <nav id="nav-menu">
            <ul>

                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                
                @endguest

            </ul>
        </nav>
        
    </header>
    
    @yield('content')
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>