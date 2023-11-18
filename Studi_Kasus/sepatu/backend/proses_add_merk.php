<?php 
    include '../connection.php';
    if (isset($_POST["submit"])) {
        $nama_merk = $_POST['nama_merk'];
    
        $result = mysqli_query($connection, "INSERT INTO merk SET nama_merk='$nama_merk'");

        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../merk.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>