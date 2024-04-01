<?php
    include "koneksi.php";

    $sql = "SELECT * FROM zakat order by id desc limit 5";
    $query = mysqli_query($db, $sql);
?>

<html>
    <head>
        <title>
            Live View
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            table {
            border-collapse: collapse;
            width: 1200px;
            }

            th, td {
            text-align: left;
            padding: 8px;
            width: 30%;
            font-size: larger
            }

            tr:nth-child(even) {background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <center>
            <br><br>
        <table border="1" >
            <tr class="w3-green">
                <th>Nomor</th>
                <th>Nama</th>
                <th>Tipe Zakat</th>
                <th>Alamat</th>
                <th>Banyak Orang</th>
            </tr>
            <?php
                while($muzaki = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$muzaki['id']."</td>";
                    echo '<td>'.$muzaki['nama'].'</td>';
                    echo "<td>".$muzaki['alamat']."</td>";
                    echo "<td>".$muzaki['jenis_zakat']."</td>";
                    echo "<td>".$muzaki['banyak_orang']."</td>";              
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
        <script>
            setInterval(function(){
                location.reload();
            }, 10000); 
    </script>
    </body>
</html>