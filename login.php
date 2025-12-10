<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/user/login.css">
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
</head>

<body>

    <main>

        <div class="container-login">
            <div class="container-form">
                <p class="judul-login">Login</p>
                <form method="post">
                    <input type="text" name="nama" placeholder="Masukkan Nama" required>
                    <input type="password" name="password" placeholder="Masukkan Password" required>
                    <input class="btn-masuk" type="submit" name="masuk" value="Masuk">
                </form>
            </div>
            <p class="btn-daftar">Belum punya akun?<a href="registrasi.php">Daftar</a></p>

            <?php
            if (isset($_POST['masuk'])) {
                $nama = $_POST['nama'];
                $password = $_POST['password'];

                $query = "SELECT * FROM users WHERE nama = '$nama' AND password = '$password' ";
                $result = mysqli_query($koneksi,$query);       
                $cek = mysqli_num_rows($result);

                if($cek > 0) {
                    $data = mysqli_fetch_assoc($result);
                    // cek jika user login sebagai admin
                    if($data['role']=="admin"){
                        $_SESSION['nama'] = $nama;
                        $_SESSION['role'] = "admin";
                        header('location: admin.php');
                    }
                    // cek jika user login sebagai user
                    if($data['role']=="user"){
                        $_SESSION['nama'] = $nama;
                        $_SESSION['role'] = "user";
                        header('location: user.php');
                    }
                }

                // if ($row->num_rows > 0) {
                //     $data = mysqli_fetch_assoc($row);

                //     $_SESSION['nama'] = $data['nama'];
                //     $_SESSION['password'] = $data['password'];

                else {
                    echo "<p>akun tidak ditemukan <a href='login.php'>Coba Lagi!</a></p>";
                }
            }
            ?>
        </div>


    </main>


</body>

</html>