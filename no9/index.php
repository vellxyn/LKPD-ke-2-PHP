 <?php


  $uang = 87000;

  $rp100000 = floor($uang / 100000);
  $uang %= 100000;

  $rp50000 = floor($uang / 50000);
  $uang %= 50000;

  $rp20000 = floor($uang / 20000);
  $uang %= 20000;

  $rp10000 = floor($uang / 10000);
  $uang %= 10000;

  $rp5000 = floor($uang / 5000);
  $uang %= 5000;

  $rp2000 = floor($uang / 2000);
  $uang %= 2000;

  $rp500 = floor($uang / 500);
  $uang %= 500;

  echo "seratus rp: $rp100000<br>";
  echo "duapuluh rp: $rp20000<br>";
  echo "limapuluh rp: $rp50000<br>";
  echo "sepuluh rp: $rp10000<br>";
  echo "lima rp: $rp5000<br>";
  echo "dua rp: $rp2000<br>";
  echo "500 rp: $rp500<br>";
  echo "sisa rp" . $uang . " (sisa)";

  // rp 100,000: 1
  // rp 20,000 : 2
  // rp 500 : 1
  
  
  // $seratus = 0;
  // $limapuluh = 0;
  // $sepuluh = 0;
  // $duapuluh = 0;

  // if ($uang > 100) {
  //   $uang -= 100000;
  //   $seratus += 1;
  // }


  // if ($uang > 50000) {
  //   $uang -= 50000;
  //   $limapuluh += 1;

  //   if ($uang - 50000 > 0) {
  //    $limapuluh += 1;
  //   }
  // }

  // if ($uang > 20000) {
  //   $uang -= 20000;
  //   $duapuluh += 1;

  //   if ($uang - 20000 > 0) {
  //     $limapuluh += 1;
  //   }
  // }

  // if ($uang > 10000) {
  //   $uang -= 10000;
  //   $sepuluh += 1;
  // }

  // echo "Seratus : $seratus <br>";
  // echo "limapuluh : $limapuluh <br>";
  // echo "duapuluh : $duapuluh <br>";
  // echo "sepuluh : $sepuluh <br>";
  // echo "seribu : $sepuluh <br>";
