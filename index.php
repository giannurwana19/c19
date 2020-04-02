<?php 

require "header.php";

?>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">

      <a class="navbar-brand font-weight-bold" href="#">
        <h2 class="font-weight-bold m-0">Sidak Corona</h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse font-weight-bold" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active mx-2" href="#home">Beranda <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link mx-2" href="#indonesia">Indonesia</a>
          <a class="nav-item nav-link mx-2" href="#">Provinsi</a>
          <a class="nav-item nav-link mx-2" href="#dunia">Dunia</a>
          <a class="nav-item nav-link mx-2" href="#">Tentang Saya</a>
        </div>
      </div>

    </div>
  </nav>
  <!-- end navbar -->

  <!-- jumbotron -->
  <section class="py-5 mb-5" id="home">
    <div class="container pt-5">
      <div class="row align-items-center">

        <div class="col-md-7 col-lg-6 order-2 order-md-1">
          <h1 class="font-weight-bold">Ayo Kita Sidak Corona! </h1>
          <p class="text-justify">Live data persebaran Virus Corona atau COVID-19 di Dunia. Data di website ini akan selalu ter <b><i>update</i></b> secara <b><i>real-time</i></b> melalui sumber website resmi dari <a href="https://kawalcorona.com">kawalcorona.com</a></p>
            <p class="text-justify">Tetap dirumah dan ikuti kebijakan yang telah ditetapkan pemerintah menjadi kunci agar Indonesia terbebas dari Corona!</p>
            <h4 class="font-weight-bold">#dirumahAja</h4>
            <a href="#indonesia" class="btn btn-info font-weight-bold px-4 mt-3 mr-3 rounded-0">Data Indonesia</a>
          <a href="#" class="btn btn-outline-info font-weight-bold px-4 mt-3 rounded-0">Data Dunia</a>
        </div>
        <div class="col-md-5 col-lg-6 order-1 order-md-2">
          <img src="img/doctor.png" alt="" class="img-fluid">
        </div>

      </div>
    </div>
  </section>
  <!-- end jumbotron -->


  <!-- section indonesia -->
  <section id="indonesia" class="bg-light py-5">
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h1 class="font-weight-bold">INDONESIA</h1>
          <p class="lead mb-4">Info Corona atau COVID-19 di Negara Indonesia secara keseluran</p>
          <div class="row">
            <div class="col-lg mb-3">
              <div class="card text-white" style="background-color: #fd9644">
                <div class="card-body">
                  <img src="img/positif.png" width="100" class="mb-4" alt="">
                  <h4 class="card-title">Positif</h5>
                    <h5 class="card-subtitle mb-2 ">185 Orang</h6>
                </div>
              </div>
            </div>
            <div class="col-lg mb-3">
              <div class="card text-white" style="background-color: #26de81">
                <div class="card-body">
                  <img src="img/senang.png" width="100" class="mb-4" alt="">
                  <h4 class="card-title">Sembuh</h5>
                    <h5 class="card-subtitle mb-2 ">185 Orang</h6>
                </div>
              </div>
            </div>
            <div class="col-lg mb-3">
              <div class="card text-white" style="background-color: #fc5c65">
                <div class="card-body">
                  <img src="img/meninggal.png" width="100" class="mb-4" alt="">
                  <h4 class="card-title">Meninggal</h4>
                  <h5 class="card-subtitle mb-2 ">185 Orang</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- end section indonesia -->

  <!-- section provinsi -->
  <!-- end section provinsi -->

  <!-- section dunia -->
  <!-- end section dunia -->


<?php 

require "footer.php";

?>