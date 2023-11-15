<?php
    include_once("../connection.php");

    $id = $_GET['id'];

    $result = mysqli_query($connection,"DELETE FROM pengarang WHERE id_pengarang = '$id'");

    if ($result) {
        header("Location: ../pengarang.php?msg=Data Deleted Successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?>  