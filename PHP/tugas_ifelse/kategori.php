<html>
    <head>
    <title></title>
    </head>
    <body>
        <h1 style="text-align: center">Menghitung Nilai BMI</h1>
        <form method="post" action="">
            <div>
                Nama : <input type="text" name="nama" /><br /> <br />
                Height : <input type="text" name="height" /><br /><br />
                Weight : <input type="text" name="weight" /><br /><br /> 
                
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
        <div>
        <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $height = $_POST['height'];
                    $weight = $_POST['weight'];

                    $Height = $height/100;

                    $bmi = $weight / ($Height * $Height);
                    floatval($bmi);
                    
                    if ($bmi < 18.5) {
                        echo" Tinggi badan = $height<br>";
                        echo" Berat badan = $weight<br>";
                        echo" Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus.";
                    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                        echo" Tinggi badan = $height<br>";
                        echo" Berat badan = $weight<br>";
                        echo" Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk normal.";
                    } elseif ($bmi >= 25 && $bmi <= 29.9) {
                        echo" Tinggi badan = $height<br>";
                        echo" Berat badan = $weight<br>";
                        echo" Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk gemuk.";
                    } else {
                        echo" Tinggi badan = $height<br>";
                        echo" Berat badan = $weight<br>";
                        echo" Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk obesitas.";
                    }
                }
            ?>
        </div>
    </body>
</html>