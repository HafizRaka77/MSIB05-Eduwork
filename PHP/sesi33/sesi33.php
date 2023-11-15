<?php
    //no 1 
    echo " no 1 : <br>";
    $no = array('satu', 'dua', 'tiga', 'empat', 'lima');
    for ($i = count($no)-1; $i >=0 ; $i--) { 
        echo $no[$i]."<br>";
    }
    echo "<br>";
    
    // no 2
    echo " no 2 : <br>";
    $buah = array('apel', 'nanas', 'mangga', 'jeruk');
    echo "terdapat ", count($buah) , " buah";
    echo "<br><br>";

    //no 3 
    echo " no 3 : <br>";
    $array = array(7, 3, 4, 9);
    echo "totalnya adalah " . array_sum($array);
    echo "<br><br>";

    //no4
    echo " no 4 : <br>";
    for ($i=1; $i <= 10; $i++) { 
        echo "1 x $i =  $i <br>";
    }
?>