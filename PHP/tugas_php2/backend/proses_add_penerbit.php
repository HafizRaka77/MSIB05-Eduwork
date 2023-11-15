<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if (isset($_POST["submit"])) {
        $id       = $_POST['id'];
        $nama     = $_POST['nama'];
        $email    = $_POST['email'];
        $telp     = $_POST['telp'];
        $alamat   = $_POST['alamat'];
        // query SQL untuk insert data
        $result = mysqli_query($connection, "INSERT INTO penerbit SET id_penerbit='$id', nama_penerbit='$nama', email='$email',telp= '$telp', alamat='$alamat'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../penerbit.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>