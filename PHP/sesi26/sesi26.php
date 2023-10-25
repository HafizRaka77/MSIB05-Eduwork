<?php
    echo " Nomor 1 : <br>";

    for($no=1;$no<=10;$no++){
        if($no % 2 == 1 ){
            echo " Angka $no adalah bilangan ganjil <br>";
        }
        else{
            echo " Angka $no adalah bilangan genap <br>";
        }
    }
    echo"<br>";

    echo " Nomor 2 : <br>";

    for($tahun=2000; $tahun<=2023; $tahun++){
        if ($tahun % 4 == 0){ 
            echo "$tahun Adalah tahun kabisat <br>"; 
        }
        else {
            echo "$tahun Bukan tahun kabisat <br>"; 
        }
    }
    echo"<br>";

    echo " Nomor 3 : <br>";

    for($i = 0; $i < 9; $i++) {
        for($j = 1; $j <= 9 - $i; $j++) {
            echo "$j";
        }
        echo "<br>";
    }
?>