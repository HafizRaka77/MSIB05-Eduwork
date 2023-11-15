<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if(isset($_POST['update'])){	
        $id = $_GET["id"];
        $nama           = $_POST['nama'];
        $telpon         = $_POST['telpon'];
        $alamat         = $_POST['alamat'];
            
        // query SQL update data
        $result = mysqli_query($connection, "UPDATE supplier SET nama='$nama',telpon= '$telpon',alamat='$alamat' WHERE id=$id");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../supplier.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>