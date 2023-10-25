<?php
  // 1. Persegi
  echo " 1. Luas Persegi <br>";
 
  $sisi = 12.5;
  $luas_persegi = $sisi * $sisi;
   
  echo "Panjang = $sisi <br>";
  echo "Luas persegi = ($sisi x $sisi) = $luas_persegi <br><br>";

  // 2. Persegi Panjang
  echo " 2. Luas Persegi Panjang <br>";
 
  $panjang = 10;
  $lebar = 5;
  $luas_persegi_panjang = $panjang * $lebar;
   
  echo "Panjang = $panjang <br>";
  echo "Lebar = $lebar <br>";
  echo "Luas persegi panjang = ($panjang x $lebar) = $luas_persegi_panjang <br><br>";

  //3. Segitiga
  echo " 3. Luas Segitiga <br>";
 
  $alas = 8;
  $tinggi = 6;
  $luas_segitiga = ($alas * $tinggi)/2;
   
  echo "alas = $alas <br>";
  echo "tinggi = $tinggi <br>";
  echo "Luas segitiga = ($alas x $tinggi)/2 = $luas_segitiga<br><br>";

  //4. Trapesium
  echo " 4. Luas Trapesium <br>";
 
  $a = 4; // panjang sisi sejajar atas
  $b = 10; // panjang sisi sejajar bawah
  $t = 14;  // tinggi
  $luas_trapesium = ($a + $b)/2 * $t;
   
  echo "panjang sisi sejajar atas = $a <br>";
  echo "panjang sisi sejajar bawah = $b <br>";
  echo "tinggi = $t <br>";
  echo "Luas trapesium = ($a + $b)/2 x $t = $luas_trapesium<br><br>";

  //5. Layang-layang
  echo " 5. Luas Layang - layang <br>";
  $d1 = 40; // diagonal 1
  $d2 = 24; // diagonal 2    
  $luas_layanglayang = ($d1 * $d2)/2;
   
  echo "diagonal 1 = $d1 <br>";
  echo "diagonal 2 = $d2 <br>";
  echo "Luas Layang - layang  = ($d1 x $d2)/2 = $luas_layanglayang <br><br>";

?>