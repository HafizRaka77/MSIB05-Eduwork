<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if (isset($_POST["submit"])) {
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $telpon         = $_POST['telpon'];
        $alamat         = $_POST['alamat'];
        // query SQL untuk insert data
        $result = mysqli_query($connection, "INSERT INTO pelanggan SET nama='$nama',jenis_kelamin='$jenis_kelamin',telpon= '$telpon',alamat='$alamat'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../index.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>
