<?php
  $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu"];
    
  // echo $ar_buah[0]; // Pepaya

  // echo "<br />";

  // sort($ar_buah); // untuk mengurutkan nilai array berdasarkan abjad / nomor
  // echo $ar_buah[0];

  /** @array_pop */
  // foreach($ar_buah as $buah) {
  //   echo $buah;
  //   echo "<br />";
  // }

  // echo "<br />";

  // array_pop($ar_buah); // untuk menghapus nilai terakhir di array

  // foreach($ar_buah as $buah) {
  //   echo $buah;
  //   echo "<br />";
  // }

  // array_push($ar_buah, 'kelengkeng'); // untuk menambahkan nilai di akhir array

  // foreach ($ar_buah as $buah) {
  //   echo $buah;
  //   echo "<br />";
  // }

  // array_shift($ar_buah); // untuk menghapus nilai awal di array

  // foreach ($ar_buah as $buah) {
  //   echo $buah;
  //   echo "<br />";
  // }

  array_unshift($ar_buah, 'rambutan'); // untuk menambakan nilai di awal array

  foreach ($ar_buah as $buah) {
    echo $buah;
    echo "<br />";
  }

  /**  untuk cek ar_buah udah ada ga? */
  // echo $ar_buah[0];
  // echo "<br />";
  // echo $ar_buah[1];
  // echo "<br />";
  // echo $ar_buah[2];
  // echo "<br />";
  // echo $ar_buah[3];
  // echo "<br />";

  // foreach ($ar_buah as $buah) {
  //   echo $buah;
  //   echo "<br />";
  // }
?>