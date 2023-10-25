<html>
    <head>
    <title></title>
    </head>
    <body>
        <h1 style="text-align: center">Menghitung Kategori Nilai</h1>
        <form method="post" action="">
            <div>
                Nama : <input type="text" name="nama" /><br /> <br />
                Nilai : <input type="text" name="nilai" /><br /><br />
                 
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
        <div>
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $nilai = $_POST['nilai'];
                    
                    switch ($nilai) {
                        case $nilai >= 90 && $nilai <= 100:
                            echo "
                                Hallo, $nama. Nilai anda adalah $nilai dan anda mendapat grade nilai A ";
                            break;
        
                        case $nilai >= 80 && $nilai < 90:
                            echo "
                                Hallo, $nama. Nilai anda adalah $nilai dan anda mendapat grade nilai B ";
                            break;
                        
                        case $nilai >= 70 && $nilai < 80:
                            echo "
                                Hallo, $nama. Nilai anda adalah $nilai dan anda mendapat grade nilai C ";
                            break;
        
                        default:
                            echo "
                                Hallo, $nama. Nilai anda adalah $nilai dan anda mendapat grade nilai D ";
                            break;
                    }
                }
            ?>
        </div>
    </body>
</html>