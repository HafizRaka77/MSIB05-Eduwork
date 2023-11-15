<?php
    include_once("../connection.php");

    $id = $_GET['id'];

    $result = mysqli_query($connection,"DELETE FROM penerbit WHERE id_penerbit = '$id'");

    if ($result) {
        header("Location: ../penerbit.php?msg=Data Deleted Successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?>  