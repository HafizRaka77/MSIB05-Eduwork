<?php
    include_once("../connection.php");

    $id = $_GET['id'];

    $result = mysqli_query($connection,"DELETE FROM pelanggan WHERE id = '$id'");

    if ($result) {
        header("Location: ../index.php?msg=Data Deleted Successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?>  