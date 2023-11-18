<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Edit Sepatu</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/css/select2.min.css">
  </head>

  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <?php include '../navbar/header.php'; ?>

    <div class="page-heading produk-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Edit Data</h4>
              <h2>Sepatu</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <form action="../backend/proses_edit_sepatu.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php 
                  include "../connection.php";
                  $id = $_GET['id'];
                  $result = mysqli_query($connection, 
                  "SELECT * FROM sepatu WHERE id='$id'"); while($data = mysqli_fetch_array($result)) { 
                  ?>
                  <div class="row">
                    <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>">
                    <div class="form-group col-6">
                      <label for="nama_sepatu">Nama Sepatu</label>
                      <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu" value="<?php echo $data['nama_sepatu'] ?>" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="harga">Harga Sepatu</label>
                      <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $data['harga'] ?>" required>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="jumlahStok">Jumlah Stok</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $data['stok'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea type="text" class="form-control" rows="3" id="deskripsi" name="deskripsi" required><?php echo $data['deskripsi'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value="../img/<?php echo $data['gambar'] ?>" class="form-control" id="gambar" name="gambar">
                        <input type="hidden" class="form-control" name="x" id="x" value="../img/<?php echo $data['gambar']; ?>">
                        <input type="hidden" class="form-control" name="gambar" id="gambar" value="img/<?php echo $data['gambar']; ?>">
                      </div>
                    </div>
                    <br><br>
                    <div class="col-md-6">
                      <div class="right-image">
                        <img src="../img/<?php echo $data['gambar'] ?>" alt="" height=300>
                      </div>
                    </div>
                  </div>
                  <?php } ?>

                  <div class="form-group">
                    <label>Merk Sepatu</label>
                    <select class="form-control select2" style="width: 100%;" name="id_merk" id="id_merk" required>
                      <?php 
                      include "../connection.php";
                      $id = $_GET['id'];
                      $result = mysqli_query($connection, 
                      "SELECT sepatu.*, merk.nama_merk FROM sepatu INNER JOIN merk ON sepatu.id_merk = merk.id WHERE sepatu.id='$id'");
                      while($data = mysqli_fetch_array($result)) { 
                      ?>  
                      <option selected="selected" value="<?php echo $data['id_merk'] ?>"><?php echo $data['nama_merk'] ?></option>
                      <?php } ?>  
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM merk");
                        while($data = mysqli_fetch_array($result)) {
                      ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['nama_merk']; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Jenis Sepatu</label>
                    <select class="form-control select" style="width: 100%;" name="id_jenis" id="id_jenis" required>
                      <?php 
                      include "../connection.php";
                      $id = $_GET['id'];
                      $result = mysqli_query($connection, 
                      "SELECT sepatu.*, jenis.jenis_sepatu FROM sepatu INNER JOIN jenis ON jenis.id = sepatu.id_jenis WHERE sepatu.id='$id'");
                      while($data = mysqli_fetch_array($result)) { 
                      ?>
                      <option selected="selected" value="<?php echo $data['id_jenis'] ?>"><?php echo $data['jenis_sepatu'] ?></option>
                      <?php } ?>
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM jenis");
                        while($data = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $data['id']; ?>" ><?php echo $data['jenis_sepatu']; ?></option>
                      <?php  } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kategori Sepatu</label>
                    <select class="form-control select" style="width: 100%;" name="id_kategori" id="id_kategori" required>
                      <?php 
                      include "../connection.php";
                      $id = $_GET['id'];
                      $result = mysqli_query($connection, 
                      "SELECT sepatu.*,
                      kategori.nama_kategori FROM sepatu INNER JOIN kategori ON sepatu.id_kategori = kategori.id WHERE sepatu.id='$id'");
                      while($data = mysqli_fetch_array($result)) { 
                      ?>
                      <option selected="selected" value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
                      <?php }?>
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM kategori");
                        while($data = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['nama_kategori']; ?></option>
                      <?php  } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Supplier Sepatu</label>
                    <select class="form-control select" style="width: 100%;" name="id_supplier" id="id_supplier" required>
                      <?php 
                      include "../connection.php";
                      $id = $_GET['id'];
                      $result = mysqli_query($connection, 
                      "SELECT sepatu.*,
                      supplier.nama_supplier FROM sepatu INNER JOIN supplier ON sepatu.id_supplier = supplier.id_supplier WHERE sepatu.id='$id'");
                      while($data = mysqli_fetch_array($result)) { 
                      ?>
                      <option selected="selected" value="<?php echo $data['id_supplier'] ?>"><?php echo $data['nama_supplier'] ?></option>
                      <?php }?>
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM supplier");
                        while($data = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $data['id_supplier']; ?>"><?php echo $data['nama_supplier']; ?></option>
                      <?php  } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Ukuran Sepatu</label>
                    <select class="form-control" style="width: 100%;" name="id_ukuran" id="id_ukuran" required>
                    <?php 
                      include "../connection.php";
                      $id = $_GET['id'];
                      $result = mysqli_query($connection, 
                      "SELECT sepatu.*,
                      ukuran.ukuran FROM sepatu INNER JOIN ukuran ON sepatu.id_ukuran = ukuran.id WHERE sepatu.id='$id'");
                      while($data = mysqli_fetch_array($result)) { 
                    ?>
                      <option selected="selected" value="<?php echo $data['id_ukuran'] ?>"><?php echo $data['ukuran'] ?></option>
                    <?php }?>
                    <?php 
                      include "../connection.php";
                      $result = mysqli_query($connection,"SELECT * FROM ukuran");
                      while($data = mysqli_fetch_array($result)){
                    ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['ukuran']; ?></option>
                    <?php  } ?>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success"><i class="fa fa-save nav-icon"></i> Simpan</button>
                  <a href="../sepatu.php" class="btn btn-danger float-end"><i class="fa fa-arrow-left nav-icon"></i> Kembali</a>
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
    <script src="../assets/js/select2.full.min.js"></script>
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
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
      })
    </script>
  </body>
</html>