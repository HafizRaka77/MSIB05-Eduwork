<?php

include("../connection.php");

$isbn = $_GET["isbn"];

$result = mysqli_query($connection,"DELETE FROM buku WHERE isbn = '$isbn'");

if ($result) {
    header("Location: ../buku.php?msg=Data Deleted Successfully");
} else {
    echo "Failed: " . mysqli_error($connection);
}
?>  
