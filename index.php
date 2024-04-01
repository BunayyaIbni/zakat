<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Zakat</title>

    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

/* Float four columns side by side */
.column {
  float: center;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #16110F;
  color: whitesmoke;
}

</style>
</head>
<body>
<br><br>
    <center>
    <div class="row">
    <div class="column">
    <div class="card">
    <form action="proses_tambah.php" method="POST">
        <label for="nama">Nama:</label><br>
        <textarea id="nama" name="nama" rows="4" cols="30"></textarea><br><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="30"></textarea><br><br><br>

        <label for="zakat">Zakat:</label><br>
        <input class="w3-radio" type="radio" id="zakat_beras" name="zakat" value="beras" onclick="hitungTotal()"> Zakat Beras
        <input  class="w3-radio" type="radio" id="zakat_uang" name="zakat" value="uang" onclick="hitungTotal()"> Zakat Uang<br><br><br>

        <label for="jumlah_orang">Jumlah Orang:</label><br>
        <input type="number" id="jumlah_orang" name="jumlah_orang" min="0" oninput="hitungTotal()"><br><br><br>

        <label for="total">Total:</label><br>
        <input type="number" id="total" name="total" readonly><br><br><br>

        <input type="submit" value="Kirim" name="masuk">
    </form>
    </div>
    </div>
    </div>
    <script>
        function hitungTotal() {
            var jumlahOrang = document.getElementById('jumlah_orang').value;
            var zakat = document.querySelector('input[name="zakat"]:checked').value;
            var total;

            if (zakat === 'beras') {
                total = jumlahOrang * 2.8;
            } else if (zakat === 'uang') {
                total = jumlahOrang * 40000;
            }

            document.getElementById('total').value = total;
        }
    </script>
    </center>
</body>
</html>


<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<script>alert('Data berhasil di tambahkan!');</script>";
            } else {
                echo "<script>alert('Gagal di tambahkan!');</script>";
            }
        ?>
    </p>
<?php endif; ?>