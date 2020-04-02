<?php

require "header.php";

require "json.php";

?>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
  <div class="container">

    <a class="navbar-brand font-weight-bold" href="#">
      <h2 class="font-weight-bold m-0">Tuntas Corona</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse font-weight-bold" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active mx-2" href="#home">Beranda <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link mx-2" href="#indonesia">Indonesia</a>
        <a class="nav-item nav-link mx-2" href="#provinsi">Provinsi</a>
        <a class="nav-item nav-link mx-2" href="#dunia">Dunia</a>
        <a class="nav-item nav-link mx-2" href="#info">Info Rumah Sakit</a>
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
        <h1 class="font-weight-bold">Ayo Kita Tuntaskan Corona! </h1>
        <p class="text-justify">Live data persebaran Virus Corona atau COVID-19 di Dunia. Data di website ini akan selalu ter <b><i>update</i></b> secara <b><i>real-time</i></b>.</p>
        <p class="text-justify"><b><i>Tetap dirumah</i></b> dan <b><i>ikuti kebijakan</i></b> yang telah ditetapkan pemerintah menjadi kunci agar Indonesia terbebas dari Corona!</p>
        <h4 class="font-weight-bold">#dirumahAja</h4>
        <a href="#indonesia" class="btn btn-info font-weight-bold px-4 mt-3 mr-3 rounded-0">Data Indonesia</a>
        <a href="#dunia" class="btn btn-outline-info font-weight-bold px-4 mt-3 rounded-0">Data Dunia</a>
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
        <p class="lead mb-2">Info virus COVID-19 di Negara Indonesia secara keseluran</p>
      </div>
    </div>

    <?php foreach ($indo as $ina) : ?>
      <div class="row text-center">
        <div class="col-lg mb-3">
          <div class="card text-white aksi" style="background-color: #fd9644">
            <div class="card-body">
              <img src="img/positif.png" width="100" class="mb-4" alt="">
              <h4 class="card-title">Positif</h5>
                <h5 class="card-subtitle mb-2 "><?= $ina['positif']; ?> Orang</h6>
            </div>
          </div>
        </div>
        <div class="col-lg mb-3">
          <div class="card text-white aksi" style="background-color: #26de81">
            <div class="card-body">
              <img src="img/senang.png" width="100" class="mb-4" alt="">
              <h4 class="card-title">Sembuh</h5>
                <h5 class="card-subtitle mb-2 "><?= $ina['sembuh']; ?> Orang</h6>
            </div>
          </div>
        </div>
        <div class="col-lg mb-3">
          <div class="card text-white aksi" style="background-color: #fc5c65">
            <div class="card-body">
              <img src="img/meninggal.png" width="100" class="mb-4" alt="">
              <h4 class="card-title">Meninggal</h4>
              <h5 class="card-subtitle mb-2 "><?= $ina['meninggal']; ?> Orang</h5>
            </div>
          </div>
        </div>
      </div>
  </div>
<?php endforeach; ?>
</section>
<!-- end section indonesia -->

<!-- section provinsi -->
<section class="py-5" id="provinsi">
  <div class="container py-5">

    <div class="row mb-3">
      <div class="col text-center">
        <h1 class="font-weight-bold">PROVINSI</h1>
        <p class="lead mb-2">Info virus COVID-19 di seluruh provinsi di Indonesia</p>
      </div>
    </div>

    <div class="table-style">
      <table id="example2" class="table table-bordered table-hover" style="width: 100%;">
        <thead>
          <tr>
            <th style="width: 5%; text-align: center">NO</th>
            <th style="width: 30%; text-align: center">PROVINSI</th>
            <th style="width: 10%; text-align: center">POSITIF</th>
            <th style="width: 10%; text-align: center">SEMBUH</th>
            <th style="width: 10%; text-align: center">MENINGGAL</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($provinsi as $p) : ?>
            <tr>
              <td><?= $no; ?>.</td>
              <td><?= $p['attributes']['Provinsi']; ?></td>
              <td><?= number_format($p['attributes']['Kasus_Posi']); ?></td>
              <td><?= number_format($p['attributes']['Kasus_Semb']); ?></td>
              <td><?= number_format($p['attributes']['Kasus_Meni']); ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</section>
<!-- end section provinsi -->

<!-- section dunia -->
<section class="bg-light py-5" id="dunia">
  <div class="container py-5">

    <div class="row mb-3">
      <div class="col text-center">
        <h1 class="font-weight-bold">DUNIA</h1>
        <p class="lead mb-2">Info virus COVID-19 di seluruh Dunia</p>
      </div>
    </div>

    <div class="table-style">
      <table id="example" class="table table-bordered table-hover" style="width: 100%;">
        <thead>
          <tr>
            <th style="width: 5%; text-align: center">NO</th>
            <th style="width: 30%; text-align: center">DUNIA</th>
            <th style="width: 10%; text-align: center">POSITIF</th>
            <th style="width: 10%; text-align: center">SEMBUH</th>
            <th style="width: 10%; text-align: center">MENINGGAL</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($provinsi as $p) : ?>
            <tr>
              <td><?= $no; ?>.</td>
              <td><?= $p['attributes']['Provinsi']; ?></td>
              <td><?= number_format($p['attributes']['Kasus_Posi']); ?></td>
              <td><?= number_format($p['attributes']['Kasus_Semb']); ?></td>
              <td><?= number_format($p['attributes']['Kasus_Meni']); ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</section>
<!-- end section dunia -->


<!-- info rumah sakit -->
<section class="py-5" id="info">
  <div class="container py-5">

    <div class="row mb-5">
      <div class="col text-center">
        <h1 class="font-weight-bold">INFO RUMAH SAKIT</h1>
        <p class="lead mb-2">Daftar 100 Rumah Sakit Rujukan Penanganan virus COVID-19 di Indonesia</p>
      </div>
    </div>

    <div class="img">
      <img src="img/rumahsakit.jpg" style="display: block; margin:auto;" class="info img-fluid" alt="">
    </div>

  </div>
</section>
<!-- end info rumah sakit -->

<!-- footer -->
<footer class="pt-4 pb-2 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <a href="https://facebook.com/gian.nurwana/" target="blank"><i class="fab fa-facebook fa-2x mx-2 text-white"></i></a>
        <a href="https://instagram.com/gian_san19" target="blank"><i class="fab fa-instagram fa-2x mx-2 text-white"></i></a>
        <a href="https://github.com/giannurwana19" target="blank"><i class="fab fa-github fa-2x mx-2 text-white"></i></a>
        <p class="lead mt-3 text-white">&copy; Copyright 2020 | Gian Nurwana & data API <a href="https://kawalcorona.com" class="text-white">kawalcorona.com</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->


<?php

require "footer.php";

?>