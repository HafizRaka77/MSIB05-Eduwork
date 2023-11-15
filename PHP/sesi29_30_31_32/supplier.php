<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style>
        body{
            font-family: Arial;
        }
        nav{
            margin-bottom: 30px;
        }
    </style>    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="index.php">Pelanggan</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="supplier.php">Supplier</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="produk.php">Produk</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <?php
        require "connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supplier");
    ?>
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <p class ="fw-semibold" style="font-size:18px;">Data Supplier
                            <a href="add_data/add_supplier.php" class="btn btn-primary float-end">Add Supplier</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <table id = "example" class="table table-bordered table-striped">
                            <thead>    
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Telpon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php
                                    $no = 1;                            
                                    while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td><?php echo $data['telpon'];?></td>
                                        <td><?php echo $data['alamat'];?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="edit_data/edit_supplier.php?id=<?php echo $data['id']?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="delete_data/delete_supplier.php?id=<?php echo $data['id']?>"role="button" onclick="return confirm('Are you sure to delete this data?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="text/javascript">	 
	$(document).ready(function () {	
        $('#example').DataTable();
	});
</script>