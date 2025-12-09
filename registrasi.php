<?php
session_start();
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="./css/user/registrasi.css">
</head>

<body>
    <main>

        <div class="container-registrasi">
            <div class="container-form">
                <p class="judul-registrasi">Registrasi</p>
                <form action="registrasi.php" method="post">
                    <input type="text" name="nama" placeholder="Masukkan Nama" required>
                    <input type="password" name="password" placeholder="Masukkan Password" required>
                    <input class="btn-daftar" type="submit" name="daftar" value="Daftar">

                    <?php
                    // Memeriksa apakah tombol "daftar" pada form telah dikirim (ditekan)
                    if (isset($_POST['daftar'])) {

                        $nama = $_POST['nama'];
                        $password = $_POST['password'];

                        // Menjalankan query SQL untuk menyisipkan data baru ke tabel 'users'
                        // Hanya kolom 'nama' dan 'password' yang diisi; kolom 'id_users' (biasanya auto-increment) dilewati
                        mysqli_query($koneksi, "INSERT INTO users (nama, password,role) VALUES ('$nama', '$password','user')");

                        $query = "SELECT * FROM users WHERE nama = '$nama' AND password = '$password' ";
                        $result = mysqli_query($koneksi, $query);
                        $cek = mysqli_num_rows($result);

                        $_SESSION['nama'] = $nama;
                        $_SESSION['role'] = "user";

                        // Mengarahkan pengguna ke halaman 'index.php' setelah pendaftaran berhasil
                        header('location: user.php');
                        exit();
                    }
                    ?>

                </form>
            </div>
            <p class="btn-masuk">Sudah punya akun?<a href="login.php">Masuk</a></p>
        </div>

    </main>
</body>

</html>