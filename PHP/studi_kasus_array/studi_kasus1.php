<?php
    $nama = array('Pelita', 'Najmina', 'Fahmi', 'Anita', 'Nasa');
    $umur = array('23 tahun', '20 tahun', '26 tahun', '21 tahun', '23 tahun');
    $kelas = array('Laravel', 'Node JS', 'Digital Marketing', 'UI/UX Designer', 'Graphic Designer');
    
    for ($i=0; $i < count($nama); $i++) { 
        echo "Nama : ", $nama[$i], ", Umur : ", $umur[$i], ", Kelas: ", $kelas[$i], "<br>";
    }
?>