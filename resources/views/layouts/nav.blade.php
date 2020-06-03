<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sispres</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    @yield('style')
</head>

<body>
    <header>
        <div class="menu-bar">

            <p class="menu-logo">
                <a href="{{ url('/') }}">Sispres</a>
                <span id="btn-show" class="icon-list-bullet"></span>
            </p>


        </div>
        <div class="logo">
            <p><a href="{{ url('/') }}">Sispres</a></p>
        </div>
        <nav id="nav-menu">
            <ul>

                @guest
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
                @else
                <li><a href="#">hola</a></li>
                <li class="sesion-c"><a href="#"> {{ Auth::user()->name }}</a>
                    <ul>
                        <li>
                            <a href="{{ route('logout') }}" id="c-s" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest

            </ul>
        </nav>

    </header>
    <section>
        @if(session('info'))
        <div class="info">
            <p>{{ session('info') }}</p>
        </div>
        @endif

        @if(count($errors))
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        @yield('content')
    </section>

    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>