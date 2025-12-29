<?php
session_start();
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

       <footer>
        <div class="container-footer">
            <div class="content-footer">
                <p>KantinKU</p>
                <div class="sosmed-footer">
                    <div class="icon-wa">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-icon lucide-message-circle"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"/></svg>
                        <p>+62 878928329</p>
                    </div>
                    <a href="https://www.instagram.com/rasyid_ux/#" class="icon-ig" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                        <p>rasyid_ux</p>
                    </a>
                </div>
            </div>
            <div class="garis-footer"></div>
            <p class="teks-footer">© 2025 KantinKU. All rights reserved.</p>
        </div>
    </footer>



</body>
</html>
