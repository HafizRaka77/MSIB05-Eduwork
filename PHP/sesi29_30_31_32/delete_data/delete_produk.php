<?php
    include_once("../connection.php");

    $id_produk = $_GET['id_produk'];

    $result = mysqli_query($connection,"DELETE FROM produk WHERE id_produk='$id_produk'");

    if ($result) {
        header("Location: ../produk.php?msg=Data Deleted Successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?>  