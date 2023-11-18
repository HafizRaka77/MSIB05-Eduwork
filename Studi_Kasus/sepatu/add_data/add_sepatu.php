<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Add Sepatu</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
  </head>

  <body>
    

    <div class="page-heading produk-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Tambah Data</h4>
              <h2>Produk</h2>
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
              <form action="../backend/proses_add_sepatu.php" method="POST" enctype="multipart/form-data">
                 <div class="card-body">
                  <div class="row">
                  <div class="form-group col-6">
                      <label for="nama_sepatu">Nama Sepatu</label>
                      <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu" placeholder="Masukkan Nama Sepatu" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="harga">Harga Sepatu</label>
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Sepatu" required>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label>Merk Sepatu</label>
                    <select class="form-control select2" style="width: 100%;" name="id_merk" id="id_merk" required>
                      <option selected="selected"> </option>
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM merk");
                        while($data = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['nama_merk']; ?></option>
                      <?php  } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Sepatu</label>
                    <select class="form-control select" style="width: 100%;" name="id_jenis" id="id_jenis" required>
                      <option selected="selected"> </option>
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM jenis");
                        while($data = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['jenis_sepatu']; ?></option>
                      <?php  } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kategori Sepatu</label>
                    <select class="form-control select" style="width: 100%;" name="id_kategori" id="id_kategori" required>
                      <option selected="selected"> </option>
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
                      <option selected="selected"> </option>
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
                      <option selected="selected"> </option>
                      <?php 
                        include "../connection.php";
                        $result = mysqli_query($connection,"SELECT * FROM ukuran");
                        while($data = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['ukuran']; ?></option>
                      <?php  } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jumlahStok">Jumlah Stok</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Stok Sepatu" required>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." id="deskripsi" name="deskripsi" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control"  id="gambar" name="gambar">
                      </div>
                    </div>
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