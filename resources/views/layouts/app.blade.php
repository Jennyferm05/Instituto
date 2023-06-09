<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ isset($pageTitle) ? $pageTitle : config('app.name', 'Laravel') }}</title>

    @yield('css')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/31a11c3e1f.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fa-graduation-cap  fa-sm"
                    style="color: #000000;">
                     Escuela Cultural
                </i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa-sharp fa-solid fa-right-to-bracket fa-xs" style="color: #000000;">{{ __(' Login') }}</i></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house fa-xs" style="color: #000000;">{{ __(' Inicio') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('grupos') }}"><i class="fa-solid fa-users-between-lines fa-xs" style="color: #000000;">{{ __(' Grupos') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alumnos') }}"><i class="fa-sharp fa-solid fa-school fa-xs" style="color: #000000;">{{ __(' Alumnos') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('docentes') }}"><i class="fa-solid fa-chalkboard-user fa-xs" style="color: #000000;">{{ __(' Docentes') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('calificaciones') }}"><i class="fa-sharp fa-solid fa-arrow-down-1-9 fa-xs" style="color: #000000;">{{ __(' Calificaciones') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('horarios') }}"><i class="fa-sharp fa-solid fa-clock  fa-xs" style="color: #000000;">{{ __(' Horarios') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios') }}"><i class="fa-solid fa-user-tie fa-xs" style="color: #000000;">{{ __(' Usuarios') }}</i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-solid fa-user-tie fa-xs" style="color: #000000;">{{ Auth::user()->subnombre }}</i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        @yield('content')
    </div>


    @yield('js')
</body>

</html>
