<?php
    include "../connection.php";
    // menyimpan data kedalam variabel
    if (isset($_POST["update"])) {
        $id = $_POST['id'];
        $jenis_sepatu  = $_POST['jenis_sepatu'];
        // query SQL untuk insert data
        $result = mysqli_query($connection, "UPDATE jenis SET jenis_sepatu='$jenis_sepatu'  WHERE id = '$id'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../jenis.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>
