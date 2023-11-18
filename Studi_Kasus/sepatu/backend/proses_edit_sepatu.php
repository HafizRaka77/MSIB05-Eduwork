<?php 
	include "../connection.php";
		$x = $_POST['x'];
		$id = $_POST['id'];
		$id_merk = $_POST['id_merk'];
		$id_jenis= $_POST['id_jenis'];
		$id_kategori = $_POST['id_kategori'];
		$id_supplier = $_POST['id_supplier'];
		$id_ukuran = $_POST['id_ukuran'];
		$nama_sepatu = $_POST['nama_sepatu'];
		$harga = $_POST['harga'];
		$jumlah  = $_POST['jumlah'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_FILES['gambar']['name'];

		$ekstension = array('png','PNG','jpg','JPG','jpeg','JPEG');
		$pecah = explode('.', $gambar);
		$ekstensi = strtolower(end($pecah));

		if (in_array($ekstensi, $ekstension)) {

		mysqli_query($connection,"UPDATE sepatu SET id_merk = '$id_merk',id_jenis ='$id_jenis',id_kategori = '$id_kategori',id_supplier = '$id_supplier',
					id_ukuran = '$id_ukuran',nama_sepatu = '$nama_sepatu',harga = '$harga', stok = '$jumlah',deskripsi = '$deskripsi',gambar = '$gambar' WHERE id = '$id'");

		header("location:../sepatu.php?msg=Data Updated Successfully");

		// ambil data file
		$namaFile = $_FILES['gambar']['name'];
		$namaSementara = $_FILES['gambar']['tmp_name'];

		// pindahkan file
		$d = '../img/'.$x;
		unlink ("$d");
		copy ($namaSementara, '../img/'.$gambar);

	}else {
		echo "Failed: " . mysqli_error($connection);
	}
?>