<?php 
    include '../connection.php';
    if (isset($_POST["update"])) {
        $id = $_POST['id'];
        $nama_merk = $_POST['nama_merk'];

        $result = mysqli_query($connection, "UPDATE merk SET nama_merk='$nama_merk'  WHERE id = '$id'");
        
        if ($result) {
            header("Location: ../merk.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>