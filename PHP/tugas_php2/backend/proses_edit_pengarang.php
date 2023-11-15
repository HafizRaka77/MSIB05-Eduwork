<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if (isset($_POST["update"])) {
        $id                   = $_GET['id'];
        $id                   = $_POST['id'];
        $nama                 = $_POST['nama'];
        $email                = $_POST['email'];
        $telp                 = $_POST['telp'];
        $alamat               = $_POST['alamat'];
        // query SQL untuk insert data
        $result = mysqli_query($connection,"UPDATE pengarang SET id_pengarang = '$id', nama_pengarang= '$nama', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang= '$id'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../pengarang.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>