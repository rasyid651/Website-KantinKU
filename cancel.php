<?php
include 'koneksi.php';

if (isset($_GET['refresh'])) {
    // Tambahkan ini hanya untuk debugging (opsional)
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Hanya hapus data — jangan ubah ID!
    mysqli_query($koneksi, "DELETE FROM pesanan WHERE id = $id");

    // Tidak perlu reset ID atau AUTO_INCREMENT
}

header('Location: admin.php');
exit;
?>