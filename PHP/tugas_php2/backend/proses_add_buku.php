<?php
    include_once("../connection.php");
    // menyimpan data kedalam variabel
    if (isset($_POST['submit'])) {
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST["id_katalog"];
        $stok = $_POST['stok'];
        $harga_pinjam = $_POST['harga_pinjam'];
        // query SQL untuk insert data
        $result = mysqli_query($connection, "INSERT INTO buku SET isbn='$isbn', judul='$judul', tahun='$tahun', id_penerbit='$id_penerbit', id_pengarang='$id_pengarang', id_katalog='$id_katalog', qty_stok= '$stok', harga_pinjam='$harga_pinjam'");
        // mengalihkan ke halaman index.php
        if ($result) {
            header("Location: ../buku.php?msg=Data Added Successfully");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }
    }
?>