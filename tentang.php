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
        <a class="nav-item nav-link mx-2" href="#provinsi">Provinsi</a>
        <a class="nav-item nav-link mx-2" href="#dunia">Dunia</a>
        <a class="nav-item nav-link mx-2" href="#tentang">Tentang</a>
      </div>
    </div>

  </div>
</nav>
<!-- end navbar -->

<section class="py-5 mb-5">
  <div class="container pt-5">
    <div class="row">

      <div class="col-lg-5">
        <img src="img/profil1.jpg" width="200" class="rounded-circle img-fluid shadow mt-3" alt="">
        <h2 class="mt-4">About Me :</h2>
        <p>Halo nama saya <b>Gian Nurwana</b></p>
        <ul>
          <li>Menyukai PHP, JavaScript, juga <b>Wanita</b></li>
          <li>Mencoba terus <b>mengaktualisasi diri</b> dengan memperdalam bidang yang Tekuni</li>
          <li>lebih suka pergi ke <b>museum</b> atau tempat bersejarah lainnya</li>
          <li>Paling Rindu dengan <b>Nabi Muhammad SAW</b> dan <b>Rumah</b></li>
        </ul>
      </div>

      <div class="col-lg-7 my-4">
        <ul class="list-group">
          <li class="list-group-item list-group-item-info">
            <h4><b><i>~ My Quotes</i></b></h4>
          </li>
          <li class="list-group-item">
            <h5 class="mb-3"><i>"Belajar, Berbagi, Mengabdi"</i></h5>
          </li>
          <li class="list-group-item">
            <h5 class="mb-3"><i>"Tetap jalani apa yang ada di hati, dan teruslah mencari arti"</i></h5>
          </li>
          <li class="list-group-item">
            <h5><i>"Kita akan jadikan tempat apa saja sebagai ruang untuk belajar, dan kita juga akan jadikan siapa saja sebagai guru untuk kita belajar"</i></h5>
          </li>
          <li class="list-group-item list-group-item-secondary text-right"><b><i>~ Gian Nurwana</i></b></li>
        </ul>
      </div>

    </div>


  </div>
</section>

<!-- footer -->
<footer class="pt-4 pb-2 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <a href="https://facebook.com/gian.nurwana/" target="blank"><i class="fab fa-facebook fa-2x mx-2 text-white"></i></a>
        <a href="https://instagram.com/gian_san19" target="blank"><i class="fab fa-instagram fa-2x mx-2 text-white"></i></a>
        <a href="https://github.com/giannurwana19" target="blank"><i class="fab fa-github fa-2x mx-2 text-white"></i></a>
        <p class="lead mt-3 text-muted">&copy; Copyright 2020 | Gian Nurwana</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->


<?php

require "footer.php";

?>