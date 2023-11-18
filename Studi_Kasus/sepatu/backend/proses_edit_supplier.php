<?php
    include "../connection.php";
    // menyimpan data kedalam variabel
    if(isset($_POST['update'])){	
        $id = $_GET["id_supplier"];
        $nama           = $_POST['nama_supplier'];
        $telpon         = $_POST['telpon'];
        $alamat         = $_POST['alamat'];
            
        // query SQL update data
        $result = mysqli_query($connection, "UPDATE supplier SET nama_supplier='$nama',telpon= '$telpon',alamat='$alamat' WHERE id_supplier=$id");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../supplier.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>