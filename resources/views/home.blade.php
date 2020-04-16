@extends('layouts.app')

@section('content')
    <section class="ftco-section ftco-slant" id="section-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">Services</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead">Silahkan pilih kategori pengaduan</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-lg-4 mb-5 ftco-animate">
            <figure><img src="images/bg_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
            <div class="p-3">
              <h3 class="h4">Pelayanan</h3>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="{{ url('/pelayanan') }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="col-lg-4 mb-5 ftco-animate">
            <figure><img src="images/img_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
            <div class="p-3">
              <h3 class="h4">Transportasi</h3>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="{{ url('/transportasi') }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="col-lg-4 mb-5 ftco-animate">
            <figure><img src="images/img_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
            <div class="p-3">
              <h3 class="h4">Bencana</h3>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="{{ url('/bencana') }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection
