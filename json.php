  <?php

  $data = file_get_contents('https://api.kawalcorona.com/');
  $dunia = json_decode($data, true);

  $data1 = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
  $provinsi = json_decode($data1, true);

  $data2 = file_get_contents('https://api.kawalcorona.com/indonesia/');
  $indo = json_decode($data2, true);

  ?>