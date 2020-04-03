  <?php

  $data = file_get_contents('https://api.kawalcorona.com/');
  $dunia = json_decode($data, true);

  $data1 = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
  $provinsi = json_decode($data1, true);

  $data2 = file_get_contents('https://api.kawalcorona.com/indonesia/');
  $indo = json_decode($data2, true);

  $data3 = file_get_contents('https://api.kawalcorona.com/positif');
  $positif = json_decode($data3, true);

  $data4 = file_get_contents('https://api.kawalcorona.com/sembuh');
  $sembuh = json_decode($data4, true);

  $data5 = file_get_contents('https://api.kawalcorona.com/meninggal');
  $meninggal = json_decode($data5, true);

  ?>

