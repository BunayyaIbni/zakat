<?php
include("koneksi.php");
// session_start();
// $_SESSION['flash_message'] = "I'm a flash message";

if (isset($_POST['masuk'])) {
    $nama=  $_POST['nama'];
    $zakat = $_POST['zakat'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $alamat = $_POST['alamat'];
    $total = $_POST['total'];

    $sql = "insert into zakat (nama, alamat, jenis_zakat, banyak_orang, total_zakat) value ('$nama', '$alamat', '$zakat', '$jumlah_orang', $total)";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} 
?>
