<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://blastcoding.com/wp-content/uploads/2017/04/1491799510_laravel-1.png">

    <title>SaClient</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='{{ asset('css/welcome.css') }}' rel='stylesheet'>

  </head>
<body>
    <div id="app" class='container'>
        <header class="py-3">
            <div class="inner">
              <a href='{{ url('/') }}' class="masthead-brand h3 text-decoration-none">SaClient</h3>
              <nav class="nav nav-masthead justify-content-center">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class='dropdown-item' href='{{ route('clients.index') }}'>Clientes</a>
                                @if (Auth::user()->name === 'admin')
                                    <a class='dropdown-item' href='{{ route('sucursales.index') }}'>Sucursales</a>
                                    <a class='dropdown-item' href='{{ route('usuarios.index') }}'>Usuarios</a>
                                @endif
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
                {{--@if (Route::has('login'))--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/clientes') }}" class="nav-link">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}" class="nav-link">Iniciar Sesion</a>--}}
                    {{--@endauth--}}
                {{--@else--}}
                     {{--<li class="nav-item dropdown">--}}
                        {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                            {{--{{ Auth::user()->name }}--}}
                        {{--</a>--}}

                        {{--<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
                            {{--<a class='dropdown-item' href='{{ route('clients.index') }}'>Clientes</a>--}}
                            {{--@if (Auth::user()->name === 'admin')--}}
                                {{--<a class='dropdown-item' href='{{ route('sucursales.index') }}'>Sucursales</a>--}}
                                {{--<a class='dropdown-item' href='{{ route('usuarios.index') }}'>Usuarios</a>--}}
                            {{--@endif--}}
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                             {{--document.getElementById('logout-form').submit();">--}}
                                {{--{{ __('Logout') }}--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@endif--}}
              </nav>
            </div>
        </header>
        <div class='d-flex flex-column justify-content-arround' style='height: 90vh;'>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner text-center">
              <p>Derechos reservados para SaClient 2022</p>
            </div>
        </footer>
        </div>
    </div>
</body>
</html>
