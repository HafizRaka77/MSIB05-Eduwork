<?php
    include "../connection.php";
    // menyimpan data kedalam variabel
    if (isset($_POST["submit"])) {
        $nama           = $_POST['nama_supplier'];
        $telpon         = $_POST['telpon'];
        $alamat         = $_POST['alamat'];
        // query SQL untuk insert data
        $result = mysqli_query($connection, "INSERT INTO supplier SET nama_supplier='$nama',telpon= '$telpon',alamat='$alamat'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../supplier.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>
