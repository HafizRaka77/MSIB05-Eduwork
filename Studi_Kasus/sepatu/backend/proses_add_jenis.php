<?php
    include "../connection.php";
    // menyimpan data kedalam variabel
    if (isset($_POST["submit"])) {
        $jenis_sepatu  = $_POST['jenis_sepatu'];
        // query SQL untuk insert data
        $result = mysqli_query($connection, "INSERT INTO jenis SET jenis_sepatu='$jenis_sepatu'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../jenis.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>
