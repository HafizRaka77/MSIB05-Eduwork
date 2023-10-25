<?php
    //no 1 Membuat output bilangan ganjil dan genap
    echo " no 1 : <br>";
    $bil=10;
        if ($bil % 2 == 0){ 
            echo "$bil Merupakan Bilangan Genap <br><br>"; 
        }else {
            echo "$bil Merupakan Bilangan Ganjil <br><br>"; 
    }
    //no 2 Membuat tahun kabisat
    echo " no 2 : <br>";
    $tahun = 2023;
        if ($tahun % 4 == 0){ 
            echo "$tahun Merupakan tahun kabisat <br><br>"; 
        }else {
            echo "$tahun Bukan merupakan tahun kabisat <br><br>"; 
    }
    //no 3 Membuat grade nilai
    echo " no 3 : <br>";
    $nilai = 95;
        if ($nilai >= 90 && $nilai <= 100){ 
            echo "$nilai Nilai A <br><br>"; 
        }else if ($nilai >= 80 && $nilai <= 89) {
            echo "$nilai Nilai B  <br><br> ";
        }else if ($nilai >= 70 && $nilai <= 79) {
            echo "$nilai Nilai C <br><br>";
        }else if ($nilai >= 60 && $nilai <= 69) {
            echo "$nilai Nilai D <br><br>";
        }else if($nilai < 60) {
            echo "$nilai Nilai E <br><br>";
    }
?>