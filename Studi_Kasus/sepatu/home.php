<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Home</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>
  

    <?php include 'navbar/header.php'; ?>

    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                <li class="active" data-filter="*">All Products</li>
                  <?php 
                      require "connection.php";
                      $result = mysqli_query($connection,"SELECT * FROM kategori");
                      while($data = mysqli_fetch_array($result)){
                  ?>
                <li data-filter=".<?php echo $data['nama_kategori']; ?>"><?php echo $data['nama_kategori']; ?></li>
                  <?php } ?>
              </ul>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <?php 
                      require "connection.php";
                      $result = mysqli_query($connection,
                      "SELECT sepatu.id, sepatu.harga, sepatu.stok, sepatu.nama_sepatu, sepatu.gambar, merk.nama_merk, kategori.nama_kategori, ukuran.ukuran
                      FROM sepatu INNER JOIN merk ON sepatu.id_merk = merk.id INNER JOIN kategori ON sepatu.id_kategori = kategori.id INNER JOIN ukuran ON sepatu.id_ukuran = ukuran.id");
                      while($data = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-lg-4 col-md-4 all <?php echo $data['nama_kategori']; ?>">
                      <div class="product-item">
                        <a><img src="img/<?php echo $data['gambar']; ?>" alt=""></a>
                        <div class="down-content">
                          <a><h4><?php echo $data['nama_sepatu']; ?></h4></a>
                          <p>Merek : <?php echo $data['nama_merk']; ?><br>
                            Kategori : <?php echo $data['nama_kategori']; ?><br>
                            Ukuran : <?php echo $data['ukuran']; ?><br>
                            Stok : <?php echo $data['stok']; ?> pcs <br>        
                          <p>  
                            <h5>Rp <?php echo number_format($data['harga'],0,',','.'); ?></h5>
                          </p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>                        
                          <span>
                            <a href="detail_sepatu.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger card_button" type="submit" id="form-submit">Detail</button></a>
                          </span>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                </div>                
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
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