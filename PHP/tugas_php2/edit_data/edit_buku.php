<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial;
        }
    </style>
    <?php
    // Display selected user data based on id
    // Getting id from url
    $isbn = $_GET["isbn"];

    // Fetech user data based on id
    require "../connection.php";
    $result = mysqli_query($connection,"SELECT * FROM buku WHERE isbn = '$isbn'");

    while($data = mysqli_fetch_array($result)){    
        $isbn = $data["isbn"];
        $judul = $data["judul"];
        $tahun = $data["tahun"];
        $id_penerbit = $data["id_penerbit"];
        $id_pengarang = $data["id_pengarang"];
        $id_katalog = $data["id_katalog"];
        $stok = $data["qty_stok"];
        $harga_pinjam = $data["harga_pinjam"];
    }
    $penerbit = mysqli_query($connection,"SELECT * FROM penerbit");
    $pengarang = mysqli_query($connection,"SELECT * FROM pengarang");
    $katalog = mysqli_query($connection,"SELECT * FROM katalog");
    ?>    
</head>
<body>
    <div class="container mb-3 mt-3">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <p class ="fw-semibold" style="font-size:18px;">Edit Buku
                            <a href="../buku.php" class="btn btn-danger float-end">Back</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <form action="../backend/proses_edit_buku.php?isbn=<?php echo $isbn; ?>" method="post">
                            <div class="mb-3">
                                <label>ISBN</label>
                                <input type="text" class="form-control" name="isbn" value="<?php echo $isbn;?>" required="">
                            </div>
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>" required="">
                            </div>
                            <div class="mb-3">
                                <label>Tahun</label>
                                <input type="number" class="form-control" name="tahun" value="<?php echo $tahun; ?>" required="">
                            </div>
                            <div class="mb-3">
                                <label>Id Penerbit</label>
                                <select class="form-select" name="id_penerbit">
                                    <?php
                                        foreach ($penerbit as $data) {
                                    ?>
                                    <option value="<?php if ($data['id_penerbit'] == $id_penerbit) { 
                                        echo $id_penerbit;
                                    } else {
                                        echo $data['id_penerbit'];
                                    } ?>" <?php if ($data['id_penerbit'] == $id_penerbit) { 
                                        echo "selected";
                                    } ?>
                                    ><?php if ($data['id_penerbit'] == $id_penerbit) { 
                                        echo $id_penerbit;
                                    } else {
                                        echo $data['id_penerbit'];
                                    } ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Id Pengarang</label>
                                <select class="form-select" name="id_pengarang">
                                    <?php
                                        foreach ($pengarang as $data) {
                                    ?>
                                    <option value="<?php if ($data['id_pengarang'] == $id_pengarang) { 
                                        echo $id_pengarang;
                                    } else {
                                        echo $data['id_pengarang'];
                                    } ?>" <?php if ($data['id_pengarang'] == $id_pengarang) { 
                                        echo "selected";
                                    } ?>
                                    ><?php if ($data['id_pengarang'] == $id_pengarang) { 
                                        echo $id_pengarang;
                                    } else {
                                        echo $data['id_pengarang'];
                                    } ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Id Katalog</label>
                                <select class="form-select" name="id_katalog">
                                    <?php
                                        foreach ($katalog as $data) {
                                    ?>
                                    <option value="<?php if ($data['id_katalog'] == $id_katalog) { 
                                        echo $id_katalog;
                                    } else {
                                        echo $data['id_katalog'];
                                    } ?>" <?php if ($data['id_katalog'] == $id_katalog) { 
                                        echo "selected";
                                    } ?>
                                    ><?php if ($data['id_katalog'] == $id_katalog) { 
                                        echo $id_katalog;
                                    } else {
                                        echo $data['id_katalog'];
                                    } ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Stok</label>
                                <input type="number" class="form-control" name="stok" id="stok" value="<?php echo $stok; ?>" required="">
                            </div>
                            <div class="mb-3">
                                <label>Harga Pinjam</label>
                                <input type="number" class="form-control" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>" required="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Are you sure want to save your changes?');">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>