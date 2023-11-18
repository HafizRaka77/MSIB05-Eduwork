<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Merk</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <?php include 'navbar/header.php'; ?>

    <div class="page-heading merk-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Data</h4>
              <h2>Merk</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    ?>

    <div class="container mb-4">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card">
            <div class="card-header">
            <a href="add_data/add_merk.php" class="btn btn-primary btn-sm float-end"><i class="fa fa-plus right"></i> Tambah Data</a>
            </div>
            <div class="card-body">
              <table id="Mytable" class="table table-bordered table-striped">
                <thead>    
                  <tr>
                    <th>No</th>
                    <th>Nama Merk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
	              <tbody>
                <?php 
                  require "connection.php";
                  $result = mysqli_query($connection,"SELECT * FROM merk");
                  $no = 1;
                  while($data = mysqli_fetch_array($result)){
                ?> 
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_merk']; ?></td>
                    <td>
                      <a href="edit_data/edit_merk.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit right"></i> Edit</a>
                      <a href="delete_data/delete_merk.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash right"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>    
    
    <?php include 'navbar/footer.php'; ?>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  </body>
</html>