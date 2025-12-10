<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <link rel="stylesheet" href="./css/user/pesanan.css">
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
</head>

<body>
    <main>

        <section class="box-arrow">
            <a href="user.php" class="container-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" />
                </svg>
                <p>Kembali</p>
            </a>
        </section>

        <section class="box-container">
            <div class="container-pesanan">
                <div class="container-form">
                    <p class="judul-pesanan">Pesanan</p>
                    <form action="pesanan.php" method="post">
                        <input type="text" name="nama" placeholder="Masukkan Nama" required>
                        <input type="text" name="kelas" placeholder="Masukkan Kelas" required>
                        <select name="menu" required>
                            <option>Pilih Menu</option>
                            <option value="Mie Goreng">Mie Goreng</option>
                            <option value="Ayam Geprek">Ayam Geprek</option>
                            <option value="Es Teh">Es Teh</option>
                            <option value="Nasi Kuning">Nasi Kuning</option>
                        </select>
                        <input type="text" name="jumlah" placeholder="Jumlah Pesanan" required>
                        <textarea name="catatan" placeholder="Masukan Catatan" required></textarea>
                        <input class="jam_ambil" type="time" name="jam_ambil" placeholder="Jam Ambil" required>
                        <input class="btn-konfirmasi" type="submit" name="konfirmasi" value="Konfirmasi">

                        <?php
                        if (isset($_POST['konfirmasi'])) {
                            $sql = "INSERT INTO pesanan
                                (nama,kelas,menu,jumlah,catatan,jam_ambil) 
                                VALUES 
                                ('$_POST[nama]','$_POST[kelas]','$_POST[menu]','$_POST[jumlah]','$_POST[catatan]','$_POST[jam_ambil]')";
                            mysqli_query($koneksi, $sql);
                            echo "<p>Berhasil! <a href='user.php'>Kembali</a></p>";
                        }
                        ?>

                    </form>
                </div>
            </div>
        </section>

    </main>
</body>

</html>