<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik_individu 2.2</title>
    <style>
        td {
            padding: 5px;

        }

        table,
        td {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td style="background-color: DodgerBlue;">No</td>
            <td style="background-color: DodgerBlue;">Nama</td>
            <td style="background-color: DodgerBlue;">Kelas</td>
        </tr>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                    if ($i % 2 == 0) {
                        echo "<td>$i</td>";
                        echo "<td>Nama ke $i</td>";
                        $j = 11;
                        echo "<td>Kelas ".($j - $i)."</td>";
                    }else {
                        echo "<td style='background-color: lightgray'>$i</td>";
                        echo "<td style='background-color: lightgray'>Nama ke $i</td>";
                        $j = 11;
                        echo "<td style='background-color: lightgray'>Kelas ".($j - $i)."</td>";        
                    }
                }
            echo "</tr>";
        ?>
    </table>
</body>

</html>