<?php
    include_once("../connection.php");

    $id = $_GET['id_supplier'];

    $result = mysqli_query($connection,"DELETE FROM supplier WHERE id_supplier = '$id'");

    if ($result) {
        header("Location: ../supplier.php?msg=Data Deleted Successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?>  