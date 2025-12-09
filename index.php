<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kantin</title>
    <link rel="stylesheet" href="./css/user/index.css">
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
                </div>
                <div class="btn-nav">
                    <a href="login.php" class="btn-login">Login</a>
                    <a href="registrasi.php" class="btn-registrasi">Registrasi</a>
                </div>
            </nav>
        </div>
    </header>

    <main>

        <section class="container-img">
            <div class="container-content1">
                <div class="content-1">
                    <!-- bagian gambar produk -->
                    <div class="container-product">
                        <img src="./img/mie_goreng.jpg" alt="img-product" class="img-product1">
                        <img src="./img/mie_goreng.jpg" alt="img-product" class="img-product2">
                        <img src="./img/mie_goreng.jpg" alt="img-product" class="img-product3">
                    </div>
                    <!-- bagian gambar produk selesai-->

                    <!-- bagian surface/card content-1 -->
                    <div class="container-surface1">
                        <div class="text">
                            <div class="container-judul">
                                <p class="judul-surface1">Pesan Makanan Kantin Lebih Cepat</p>
                                <div class="garis"></div>
                            </div>
                            <p class="deskripsi-surface1">Pilih menu favorit dan ambil tanpa antre</p>
                        </div>
                        <div class="btn-content1">
                            <a href="" class="btn-primary">Lihat Menu Hari Ini</a>
                            <div class="container-secodry" >
                                <a href="login.php" class="btn-secondry" id="produk">Login Dulu
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#5a3e2b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                                        <path d="M18 8L22 12L18 16" />
                                        <path d="M2 12H22" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- bagian surface/card content-1 selesai-->

                </div>
            </div>
        </section>

        <section class="container-menu-product">
            <div class="text-menu-product">
                <p class="judul-menu-product">Pilihan Menu KantinKU</p>
                <p class="deskripsi-menu-product">Kantinku menyediakan berbagai menu yang enak dan bikin nagih!
            </div>
            <div class="container-card-product">
                
                <!-- card 1 -->
                <div class="card-product1">
                    <img src="./img/mie_goreng.jpg" class="img-card" alt="img-card">
                    <div class="product-img">
                     <div class="label-product">
                        <p>Makanan</p>
                    </div> 
                    </div>
                    <div class="container-deksripsi">
                        <div class="text-deksripsi">
                            <p class="name-product">Mie Goreng</p>
                            <p class="price-product">Rp5.000</p>
                            <div class="container-status">
                                <div class="status-tersedia"></div>    
                                <p>Tersedia</p>
                            </div>
                        </div>
                        <a href="login.php" class="btn-pesan">
                            <p>Pesan</p>
                        </a>
                    </div>
                </div>
                <!-- card 1 selesai -->
             
                <!-- card 2 -->
                <div class="card-product1">
                    <img src="./img/ayam_geprek.jpg" class="img-card" alt="img-card">
                    <div class="product-img">
                     <div class="label-product">
                        <p>Makanan</p>
                    </div> 
                    </div>
                    <div class="container-deksripsi">
                        <div class="text-deksripsi">
                            <p class="name-product">Ayam Geprek</p>
                            <p class="price-product">Rp10.000</p>
                            <div class="container-status">
                                <div class="status-tersedia"></div>
                                <!-- <div class="status-habis"></div>    -->
                                <p>Tersedia</p>
                            </div>
                        </div>
                          <a href="login.php" class="btn-pesan">
                            <p>Pesan</p>
                        </a>
                    </div>
                </div>
                <!-- card 2 selesai -->

                <!-- card 3 -->
                <div class="card-product1">
                    <img src="./img/es_teh.png" class="img-card" alt="img-card">
                    <div class="product-img">
                     <div class="label-product">
                        <p>Minuman</p>
                    </div> 
                    </div>
                    <div class="container-deksripsi">
                        <div class="text-deksripsi">
                            <p class="name-product">Es Teh</p>
                            <p class="price-product">Rp3.000</p>
                            <div class="container-status">
                                <div class="status-tersedia"></div>    
                                <p>Tersedia</p>
                            </div>
                        </div>
                       <a href="login.php" class="btn-pesan">
                            <p>Pesan</p>
                        </a>
                    </div>
                </div>
                <!-- card 3 selesai -->

                <!-- card 4 -->
                <div class="card-product1">
                    <img src="./img/nasi_kuning.png" class="img-card" alt="img-card">
                    <div class="product-img">
                     <div class="label-product">
                        <p>Makanan</p>
                    </div> 
                    </div>
                    <div class="container-deksripsi">
                        <div class="text-deksripsi">
                            <p class="name-product">Nasi Kuning</p>
                            <p class="price-product">Rp6.000</p>
                            <div class="container-status">
                                <!-- <div class="status-habis"></div> -->
                                 <div class="status-tersedia"></div>
                                <p>Tersedia</p>
                            </div>
                        </div>
                        <a href="login.php" class="btn-pesan" id="layanan">
                            <p>Pesan</p>
                        </a>
                    </div>
                </div>
                <!-- card 4 selesai -->

            </div>
        </section>

        <section class="container-layanan">
            <div class="text-layanan">
                <p class="judul-layanan">Layanan</p>
                <p class="deskripsi-layanan">Berikut Jam Operasional KantinKU, biar kamu engga kehabisan jajan!</p>
            </div>
            <div class="box-layanan">
                
            <!-- card 1 -->
                <!-- hari pelayanan -->
                    <div class="card-layanan">
                        <p class="hari-layanan">Senin - Jumat</p>
                        <ul class="container-waktu">
                            <li>Istirahat Pertama: 09.30 - 10.00</li>
                            <li>Istirahat Kedua: 11.30 - 13.00</li>
                        </ul>
                    </div>
                    <!-- hari pelayanan selesai -->
            <!-- card 1 selesai -->
                    
                <!-- card 2 -->
                    <!-- pre order  -->
                    <div class="card-layanan" id="tentang">
                        <p>Pre - Order</p>
                        <ul class="container-waktu">
                            <li>Buka - Tutup: 06.30 - 12.30</li>
                            <li>Pengambilan: 09.30 - 12.20</li>
                        </ul>
                    </div>
                    <!-- pre order selesai -->
                <!-- card 2 selesai-->
            </div>
        </section>

        <section class="container-tentang">
                <p class="judul-tentang">Tentang</p>
                <div class="deskripsi-tentang">
                    <p>
                        KantinKu dibuat untuk membantu siswa memesan makanan dengan cara yang lebih cepat dan nyaman. Sistem ini memungkinkan kamu memilih menu, menentukan jam pengambilan, lalu mengambil pesanan tanpa harus ikut antre panjang di kantin.
                    </p>
                </div>
        </section>

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
                    <div class="icon-ig">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                        <p>rasyid_ux</p>
                    </div>
                </div>
            </div>
            <div class="garis-footer"></div>
            <p class="teks-footer">© 2025 KantinKU. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>