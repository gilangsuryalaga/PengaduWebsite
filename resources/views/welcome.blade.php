<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>Pengaduan Masyarakat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
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
        <a class="navbar-brand" href="index.html">PENGADU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
@if (Route::has('login'))
        <div class="collapse navbar-collapse" id="ftco-nav">
        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-services" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
        </ul>
        @else
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#section-services" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link boldi">Login</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link boldi">Register</a></li>

        </ul>
        @endauth
        </div>
@endif
    </div>
    </nav>
    <section class="ftco-cover ftco-slant" style="background-image: url(images/bg_1.jpg);" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
        <div class="col-md-10">
            <h1 class="ftco-heading ftco-animate">Pengadu yang lebih baik</h1>
            <p><a href="{{ route('login') }} "  class="btn btn-primary ftco-animate">Get Started</a></p>
        </div>
        </div>
    </div>
    </section>

    <section class="ftco-section ftco-slant" id="section-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">Services</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead">Pengaduan dikategorikan menjadi tiga yatu</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-lg-4 mb-5 ftco-animate">
            <figure><img src="images/bg_3.jpg"  class="img-fluid"></figure>
            <div class="p-3">
              <h3 class="h4">Pelayanan</h3>
              <p class="mb-4">Pengaduan mengenai pelayanan masyarakat seperti kesehatan dan juga meliputi dalam pembuatan KTP,SIM dll</p>
              <ul class="list-unstyled ftco-list-check text-left">
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Instansi kesehatan</span></li>
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Pembuatan SIM</span></li>
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Pembuatan KTP dan lain sebagainya</span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mb-5 ftco-animate">
            <figure><img src="images/img_1.jpg" class="img-fluid"></figure>
            <div class="p-3">
              <h3 class="h4">Bencana</h3>
              <p class="mb-4">Pengaduan mengenai bencana alam seperti daerah yang tertimpa,kerugian harta benda, dan lain lain</p>
              <ul class="list-unstyled ftco-list-check text-left">
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Pengaduan mengenai kerugian akibat bencana alam</span></li>
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Pelaporan lokasi bencana alam</span></li>
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Pengaduan warga yang hilang akibat bencana</span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mb-5 ftco-animate">
            <figure><img src="images/img_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
            <div class="p-3">
              <h3 class="h4">Transportasi</h3>
              <p class="mb-4">Pengaduan yang meliputi kelayakan transportasi umum, tindak kejahatan di dalam transportasi umum dan lain sebagainya.</p>
              <ul class="list-unstyled ftco-list-check text-left">
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Kelayakan transportasi umum yang beroperasi</span></li>
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Tindak kejahatan dalam transportasi umum</span></li>
                <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Tarif transportasi umum</span></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="ftco-section ftco-slant ftco-slant-light" id="section-about">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">About Us</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead">Website ini ditujukan agar memudahkan masyarakat untuk menyampaikan keluhan terhadap pemerintah dan instansi instansi lainnya</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->

      </div>
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

    
  </body>
</html>