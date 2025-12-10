<?php
session_start();
include 'koneksi.php';
include 'koneksi.php';
if($_SESSION['role'] != "admin"){
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kantin</title>
    <link rel="stylesheet" href="./css/admin/admin.css">
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
</head>

<body>

      <header>
        <div class="container-header">
            <p class="judul-header">Kantinku</p>
            <nav>
                <div class="container-a">
                    <a href="index.php" class="a-nav">Beranda</a>
                    <a href="#produk" class="a-nav">Produk</a>
                    <a href="#layanan" class="a-nav">Layanan</a>
                    <a href="#tentang" class="a-nav">Tentang</a>
                    
                    <div class="dropdown-profile">
                        <div class="btn-profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            <p><?=  $_SESSION['nama']?></p>
                        </div>
                        <ul>
                            <li class="role">Status: Admin</li>
                            <li class="logout"><a href="index.php">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </header>


    <main>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Catatan</th>
                <th>Jam Pengambilan</th>
                <th>Aksi</th>
            </tr>

            <?php 
            $result = mysqli_query($koneksi,"SELECT * FROM pesanan ORDER BY id");
            $no = 1;
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>{$no}</td>
                <td>{$data['nama']}</td>
                <td>{$data['kelas']}</td>
                <td>{$data['menu']}</td>
                <td>{$data['jumlah']}</td>
                <td>{$data['catatan']}</td>
                <td>{$data['jam_ambil']} WIB</td>
                <td>
                <a href='cancel.php?id={$data['id']}' onclick=\"return confirm('Yakin ingin hapus?')\">Cancel</a>
                </td>
                </tr>";
                $no++;
            }
            ?>

        </table>

    </main>



</body>
</html>