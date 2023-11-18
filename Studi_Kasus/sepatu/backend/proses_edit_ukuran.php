<?php 
    include '../connection.php';
    if (isset($_POST["update"])) {
        $id = $_POST['id'];
        $ukuran = $_POST['ukuran'];

        $result = mysqli_query($connection, "UPDATE ukuran SET ukuran='$ukuran'  WHERE id = '$id'");
        
        if ($result) {
            header("Location: ../ukuran.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>