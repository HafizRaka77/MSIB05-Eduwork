<?php
  // 1. Balok
  echo " 1. Volume Balok <br>";
 
  $panjang = 5;
  $lebar = 5;
  $tinggi = 10;
  $volume_balok = $panjang * $lebar * $tinggi;
   
  echo "Panjang = $panjang <br>";
  echo "Lebar = $lebar <br>";
  echo "Tinggi = $tinggi <br>";
  echo "Volume Balok = ($panjang x $lebar x $tinggi) = $volume_balok <br><br>";

  // 2. Kubus
  echo " 2. Volume Kubus <br>";
 
  $sisi = 10;
  $volume_kubus = $sisi * $sisi * $sisi;
   
  echo "Panjang sisi = $sisi <br>";
  echo "Volume kubus = ($sisi x $sisi x $sisi) = $volume_kubus <br><br>";

  //3. Limas
  echo " 3. Volume Limas <br>";
 
  $luas_alas = 48;
  $tinggi = 16;
  $volume_limas = 1/3 * $luas_alas * $tinggi;
   
  echo "Luas Alas : $luas_alas <br>";
  echo "Tinggi : $tinggi <br>";
  echo "Volume Limas = 1/3 x $luas_alas x $tinggi = $volume_limas<br><br>";
?>