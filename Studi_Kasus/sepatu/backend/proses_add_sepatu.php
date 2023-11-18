<?php 
    include "../connection.php";
        $id_merk = $_POST['id_merk'];
        $id_jenis= $_POST['id_jenis'];
        $id_kategori = $_POST['id_kategori'];
        $id_supplier = $_POST['id_supplier'];
        $id_ukuran = $_POST['id_ukuran'];
        $nama_sepatu = $_POST['nama_sepatu'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_FILES['gambar']['name'];

        $ekstension = array('png','PNG','jpg','JPG','jpeg','JPEG');
        $pecah = explode('.', $gambar);
        $ekstensi = strtolower(end($pecah));

        if (in_array($ekstensi, $ekstension)) {

        header("location:../sepatu.php?msg=Data Added Successfully");

        // ambil data file
        // $namaFile = $_FILES['file_surat']['name'];
        $namaSementara = $_FILES['gambar']['tmp_name'];

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, '../img/'.$gambar);

        mysqli_query($connection, "INSERT INTO sepatu VALUES('','$id_merk','$id_jenis','$id_kategori','$id_supplier','$id_ukuran','$nama_sepatu','$harga','$jumlah','$deskripsi','$gambar')");

    }else {
	    echo "Failed: " . mysqli_error($connection);
    }
?>