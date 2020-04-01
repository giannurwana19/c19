<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


  <title>Lost Corona - Live Data </title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">

      <a class="navbar-brand font-weight-bold" href="#">
        <h1 class="font-weight-bold m-0">Nurwana</h1>
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
          <h1 class="font-weight-bold">Lost-Corona! </h1>
          <h4 class="font-weight-bold">#dirumahAja</h4>
          <p class="text-justify">Live data persebaran Virus Corona atau COVID-19 di Dunia. Data di website ini akan selalu ter <b><i>update</i></b> secara <b><i>real-time</i></b> melalui sumber website resmi dari <a href="https://kawalcorona.com">kawalcorona.com</a></p>
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


  <!-- section dunia -->
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
  <!-- end section dunia -->

  <section>
    <table id="table_id" class="display">
      <thead>
        <tr>
          <th>Column 1</th>
          <th>Column 2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Row 1 Data 1</td>
          <td>Row 1 Data 2</td>
        </tr>
        <tr>
          <td>Row 2 Data 1</td>
          <td>Row 2 Data 2</td>
        </tr>
      </tbody>
    </table>
  </section>








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  </script>
</body>

</html>