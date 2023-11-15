<?php

include("../connection.php");

$penerbit = mysqli_query($connection,"SELECT * FROM penerbit");
$pengarang = mysqli_query($connection,"SELECT * FROM pengarang");
$katalog = mysqli_query($connection,"SELECT * FROM katalog");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial;
        }
    </style>    
</head>
<body>
    <div class="container mb-3 mt-3">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <p class ="fw-semibold" style="font-size:18px;">Add Buku
                            <a href="../buku.php" class="btn btn-danger float-end">Back</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <form action="../backend/proses_add_buku.php" method="POST">
                            <div class="mb-3">
                                <label>ISBN</label>
                                <input type="text" name="isbn" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Tahun</label>
                                <input type="number" name="tahun" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Id Penerbit</label>
                                <select class="form-select" name="id_penerbit">
                                    <?php
                                        foreach ($penerbit as $data) {
                                    ?>
                                        <option value="<?php echo $data['id_penerbit']; ?>"><?php echo $data['id_penerbit']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Id Pengarang</label>
                                <select class="form-select" name="id_pengarang">
                                    <?php
                                        foreach ($pengarang as $data) {
                                    ?>
                                        <option value="<?php echo $data['id_pengarang']; ?>"><?php echo $data['id_pengarang']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Id Katalog</label>
                                <select class="form-select" name="id_katalog">
                                    <?php
                                        foreach ($katalog as $data) {
                                    ?>
                                        <option value="<?php echo $data['id_katalog']; ?>"><?php echo $data['id_katalog']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Stok</label>
                                <input type="number" name="stok" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Harga Pinjam</label>
                                <input type="number" name="harga_pinjam" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to save your changes?');">Submit</button>
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