<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Detail Sepatu</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>
    

    <?php include 'navbar/header.php'; ?>

    <div class="page-heading detail-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Detail</h4>
              <h2>Produk</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="best-features about-features">
      <div class="container">
        <div class="row">
        <?php 
          require "connection.php";
          $id = $_GET['id'];
          $result = mysqli_query($connection, 
          "SELECT sepatu.id, sepatu.harga, sepatu.stok, sepatu.nama_sepatu, sepatu.gambar, sepatu.deskripsi,
          merk.nama_merk, kategori.nama_kategori, jenis.jenis_sepatu, ukuran.ukuran, supplier.nama_supplier FROM sepatu
          INNER JOIN merk ON sepatu.id_merk = merk.id INNER JOIN kategori ON sepatu.id_kategori = kategori.id INNER JOIN jenis ON jenis.id = sepatu.id_jenis 
          INNER JOIN ukuran ON sepatu.id_ukuran = ukuran.id INNER JOIN supplier ON supplier.id_supplier = sepatu.id_supplier WHERE sepatu.id='$id'");
          while($data = mysqli_fetch_array($result)) { 
          ?>
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo $data['nama_sepatu'] ?></h2>
            </div>
          </div>
          <div class="col-md-6 mt-1">
            <div class="right-image">
              <img src="img/<?php echo $data['gambar'] ?>" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4><?php echo $data['nama_sepatu'] ?></h4>
              <p>
                Merk : <?php echo $data['nama_merk'] ?> <br>
                Kategori : <?php echo $data['nama_kategori'] ?> <br>
                Jenis : <?php echo $data['jenis_sepatu'] ?> <br>
                Ukuran : <?php echo $data['ukuran'] ?> <br>
                Stok : <?php echo $data['stok'] ?> pcs <br>
                Supplier : <?php echo $data['nama_supplier'] ?><br>
                <h4>Harga : Rp <?php echo number_format($data['harga'],0,',','.'); ?></h4>
              </p>
            </div>
          </div>
          <div class="row mt-4 mx-3">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab" style="text-align:justify"><?php echo $data['deskripsi'] ?></div>
            </div>
          </div>
          <?php } ?>
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