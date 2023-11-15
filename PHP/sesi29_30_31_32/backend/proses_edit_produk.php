<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if(isset($_POST['update'])){	
        $id = $_GET['id'];
        $kode_produk = $_POST['kode_produk'];
        $nama_produk = $_POST['nama_produk'];
        $harga       = $_POST['harga'];
        $stok        = $_POST['stok'];
        $satuan      = $_POST['satuan'];
        $supplier_id = $_POST['supplier_id'];
            
        // query SQL update data
        $result = mysqli_query($connection, "UPDATE produk SET kode_produk='$kode_produk',nama_produk='$nama_produk',harga='$harga',stok= '$stok',satuan='$satuan', supplier_id='$supplier_id' WHERE id_produk='$id'");
        
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../produk.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>