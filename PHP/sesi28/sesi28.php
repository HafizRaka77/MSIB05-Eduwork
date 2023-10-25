<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        nav{
            margin-bottom: 50px;
        }
        tr:nth-child(even) {
            background-color: #CCCCCC;
        }

        tr:nth-child(odd) {
            background-color: #FFFFFF;
        }
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>    
</head>
<body>
    <nav class="navbar bg-warning ">
        <div class="container-fluid">
            <span class="navbar-brand mb-2 px-5 mt-2 h3">Daftar Nilai</span>
        </div>
    </nav>
    <table align= "center">
        <tr>
            <td><b>No</b></td>
            <td><b>Nama</b></td>
            <td><b>Tanggal Lahir</b></td>
            <td><b>Umur</b></td>
            <td><b>Alamat</b></td>
            <td><b>Kelas</b></td>
            <td><b>Nilai</b></td>
            <td><b>Hasil</b></td>
        </tr>
        <?php
        //ambil data json dari file
        $content=file_get_contents("data.json");

        //mengubah data json menjadi data array asosiatif
        $data=json_decode($content,true);

        $no = 1;

        foreach ($data as $d) {
            
            // Menghitung umur
            $tanggal_lahir = new DateTime($d['tanggal_lahir']);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tanggal_lahir)->y;
            $tanggal_lahir_formatted = $tanggal_lahir->format('d F Y');
            
            // Menghitung hasil// 
            if ($d['nilai'] >= 90) {
                $hasil = 'A';
            } elseif ($d['nilai'] >= 80) {
                $hasil = 'B';
            } elseif ($d['nilai'] >= 70) {
                $hasil = 'C';
            } elseif ($d['nilai'] >= 65) {
                $hasil = 'D';
            } elseif ($d['nilai'] >= 55) {
                $hasil = 'D';
            } else {
                $hasil = 'E';
            }

            // Menampilkan data
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $d['nama'] . "</td>";
            echo "<td>" . $tanggal_lahir_formatted . "</td>";
            echo "<td>" . $umur . "</td>";
            echo "<td>" . $d['alamat'] . "</td>";
            echo "<td>" . $d['kelas'] . "</td>";
            echo "<td>" . $d['nilai'] . "</td>";
            echo "<td>" . $hasil . "</td>";
            echo "</tr>";
            }
        ?>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>