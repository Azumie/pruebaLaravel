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

  <body class="text-center">

    <div class="container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SaClient</h3>
          <nav class="nav nav-masthead justify-content-center">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/clientes') }}" class="nav-link">Home</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Iniciar Sesion</a>
                @endauth
            @endif
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">SaClient</h1>
        <p class="lead">La mejor aplicacion para gestionar tus sucursales y clientes</p>
        <p class="lead">
            <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">Iniciar Sesion</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Derechos reservados para SaClient 2022</p>
        </div>
      </footer>
    </div>
  </body>
</html>
