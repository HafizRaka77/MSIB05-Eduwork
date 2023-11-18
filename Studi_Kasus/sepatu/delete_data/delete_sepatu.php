<?php
    include_once("../connection.php");

    $id = $_GET['id'];

    $gambar = $_POST['gambar'];
    unlink("../img/".$gambar);

    $result = mysqli_query($connection,"DELETE FROM sepatu WHERE id = '$id'");

    if ($result) {
        header("Location: ../sepatu.php?msg=Data Deleted Successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?> 