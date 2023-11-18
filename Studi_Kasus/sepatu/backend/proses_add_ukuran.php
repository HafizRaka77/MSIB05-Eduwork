<?php
    include "../connection.php";
    // menyimpan data kedalam variabel
    if (isset($_POST["submit"])) {
        $ukuran = $_POST['ukuran'];
    
        $result = mysqli_query($connection, "INSERT INTO ukuran SET ukuran='$ukuran'");

        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../ukuran.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>