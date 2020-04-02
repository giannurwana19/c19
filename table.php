<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- data table -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.bootstrap4.min.css" />
  <!-- end data table -->

  <style>
    .table-style {
      margin: 10px;
      margin-right: 100px;
      margin-left: 100px;
      box-shadow: 0 15px 30px rgba(102, 113, 228, 0.13);
      padding: 50px;
    }
  </style>


  <title>Hello, world!</title>
</head>

<body>

  <?php


  $data = file_get_contents('https://api.kawalcorona.com/');
  $dunia = json_decode($data, true);

  $data1 = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
  $provinsi = json_decode($data1, true);

  $data2 = file_get_contents('https://api.kawalcorona.com/indonesia');
  $indo = json_decode($data2, true);

  ?>

  <h1 class="text-center">DUNIA</h1>
  <div class="table-style">
    <table id="example" class="table table-bordered table-hover" style="width: 100%;">
      <thead>
        <tr>
          <th style="width: 5%; text-align:center">NO.</th>
          <th style="width: 30%; text-align: center">NEGARA</th>
          <th style="width: 10%; text-align: center">POSITIF</th>
          <th style="width: 10%; text-align: center">SEMBUH</th>
          <th style="width: 10%; text-align: center">MENINGGAL</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($dunia as $d) : ?>
          <tr>
            <td><?= $no; ?>.</td>
            <td><?= $d['attributes']['Country_Region']; ?></td>
            <td><?= number_format($d['attributes']['Confirmed']); ?></td>
            <td><?= number_format($d['attributes']['Deaths']); ?></td>
            <td><?= number_format($d['attributes']['Recovered']); ?></td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
  <h1 class="text-center">PROVINSI</h1>
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


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <!-- data table -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js">
  </script>
  <!-- end data table -->


  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        rowReorder: {
          selector: 'td:nth-child(2)'
        },
        responsive: true
      });

      var table = $('#example2').DataTable({
        rowReorder: {
          selector: 'td:nth-child(2)'
        },
        responsive: true
      });
    });
  </script>
</body>

</html>