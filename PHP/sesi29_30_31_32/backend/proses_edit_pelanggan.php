<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if(isset($_POST['update'])){	
        $id = $_GET["id"];
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $telpon         = $_POST['telpon'];
        $alamat         = $_POST['alamat'];
            
        // query SQL update data
        $result = mysqli_query($connection, "UPDATE pelanggan SET nama='$nama',jenis_kelamin='$jenis_kelamin',telpon= '$telpon',alamat='$alamat' WHERE id=$id");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../index.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>