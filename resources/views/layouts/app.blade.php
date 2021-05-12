<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TECPAM</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7620f278ae.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgb(240,240,240);">
    <div id="app">

        <nav class="navbar px-5" style="background: linear-gradient(50deg, rgba(7, 185, 7, 0.747), rgba(7, 179, 179, 0.76));">
            <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}" style="color: black;"><h1 class="display-6">TECPAM</h1></a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            @guest
                <a href="{{ route('login') }}" class="btn btn-light fs-3">Iniciar sesión</a>
                
                <a href="{{ route('register') }}" class="btn btn-light fs-3">Registro</a>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="dropdown-toggle fs-5 fw-bold text-decoration-none text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </div>
                </li>
            @endguest
            </div>
            </div>
        </nav>

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
