<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>Wekcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Exclusivity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item active"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-services" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#section-services" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link boldi">Login</a></li>
            @if (Route::has('register'))
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link boldi">Register</a></li>
            @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
        @endguest
        </ul>
        </div>
    </div>
    </nav>
    <main class="py-4">
            @yield('content')
    </main>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>
  </body>
</html>