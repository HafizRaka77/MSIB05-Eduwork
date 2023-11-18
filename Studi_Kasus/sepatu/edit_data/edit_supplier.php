<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Edit Supplier</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
  </head>

  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <?php

    $id = $_GET['id_supplier'];

    require "../connection.php";
    $result = mysqli_query($connection, "SELECT * FROM supplier WHERE id_supplier= $id LIMIT 1");
 
    while($data = mysqli_fetch_array($result))
    {
	    $nama = $data['nama_supplier'];
	    $telpon = $data['telpon'];
        $alamat = $data['alamat'];
    }
    ?>    

    <div class="page-heading supplier-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Edit Data</h4>
              <h2>Supplier</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 mx-auto">
            <div class="card card-primary">
            <form id="form_edit" action="../backend/proses_edit_supplier.php?id_supplier=<?php echo $id; ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Supplier</label>
                    <input type="text" class="form-control" name="nama_supplier" id="nama" required="" value="<?php echo $nama;?>">
                  </div>
                  <div class="form-group">
                    <label>Telpon</label>
                    <input type="number" class="form-control" name="telpon" id="telpon" required="" value="<?php echo $telpon;?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required="" value="<?php echo $alamat;?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="update" id="update" class="btn btn-success"><i class="fa fa-save nav-icon"></i> Simpan</button>
                  <a href="../supplier.php" class="btn btn-danger float-end"><i class="fa fa-arrow-left nav-icon"></i> Kembali</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include '../navbar/footer.php'; ?>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/accordions.js"></script>
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