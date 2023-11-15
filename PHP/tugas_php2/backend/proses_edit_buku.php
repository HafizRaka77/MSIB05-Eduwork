<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if(isset($_POST['update'])){	
        $isbn = $_GET["isbn"];
        $isbn = $_POST["isbn"];
        $judul = $_POST["judul"];
        $tahun = $_POST["tahun"];
        $id_penerbit = $_POST["id_penerbit"];
        $id_pengarang = $_POST["id_pengarang"];
        $id_katalog = $_POST["id_katalog"];
        $stok = $_POST["stok"];
        $harga_pinjam = $_POST["harga_pinjam"];
        
        
        $result = mysqli_query($connection,"UPDATE buku SET isbn='$isbn', judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../buku.php?msg=Data Updated Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>