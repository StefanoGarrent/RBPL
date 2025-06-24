<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: ../Admin/WEB-RBPL-main/login.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "../Admin/WEB-RBPL-main/inc/koneksi.php";
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan UPN "Veteran" Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css_user/user_stylekatalog.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="../image/logo.png" alt="Logo" width="296" height="54">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="navbar-nav">
            <a class="nav-link active" href="home.php">Home</a>
            <a class="nav-link" href="user_katalog.php">Buku</a>
            <a class="nav-link" href="user_about.php">Tentang Kami</a>
            <a class="nav-link" href="../Admin\WEB-RBPL-main\logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main content layout -->
    <div class="main-wrapper">
      <!-- Main Content -->
        <div class="main-content">
            <h2>KATALOG BUKU</h2>
                <div class="book-grid">
                    <!-- Ulangi block ini untuk setiap buku -->
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="../image/cover1.png" alt="Cover Buku">
                        </div>
                            <div class="book-info">
                                <p><strong>KATEGORI :</strong><br>SEJARAH</p>
                                <p><strong>JUMLAH BUKU :</strong><br>54 Buku</p>
                                <p><strong>LOKASI :</strong><br>rak 001</p>
                            </div>
                    </div>
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="../image\hukum 1.png" alt="Cover Buku">
                        </div>
                            <div class="book-info">
                                <p><strong>KATEGORI :</strong><br>HUKUM</p>
                                <p><strong>JUMLAH BUKU :</strong><br>69 Buku</p>
                                <p><strong>LOKASI :</strong><br>rak 007</p>
                            </div>
                    </div>
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="../image\toefl 1.png" alt="Cover Buku">
                        </div>
                            <div class="book-info">
                                <p><strong>KATEGORI :</strong><br>BAHASA</p>
                                <p><strong>JUMLAH BUKU :</strong><br>45 Buku</p>
                                <p><strong>LOKASI :</strong><br>rak 003</p>
                            </div>
                    </div>
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="../image\website 1.png" alt="Cover Buku">
                        </div>
                            <div class="book-info">
                                <p><strong>KATEGORI :</strong><br>PEMROGRAMAN</p>
                                <p><strong>JUMLAH BUKU :</strong><br>26 Buku</p>
                                <p><strong>LOKASI :</strong><br>rak 002</p>
                            </div>
                    </div>
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="../image\pulang 1.png" alt="Cover Buku">
                        </div>
                            <div class="book-info">
                                <p><strong>KATEGORI :</strong><br>PULANG</p>
                                <p><strong>JUMLAH BUKU :</strong><br>26 Buku</p>
                                <p><strong>LOKASI :</strong><br>rak 002</p>
                            </div>
                    </div>
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="../image\rekomendasi.png" alt="Cover Buku">
                        </div>
                            <div class="book-info">
                                <p><strong>KATEGORI :</strong><br>FOOD AND BEVERAGES</p>
                                <p><strong>JUMLAH BUKU :</strong><br>76 Buku</p>
                                <p><strong>LOKASI :</strong><br>rak 005</p>
                            </div>
                    </div>
                    <!-- Tambahkan lebih banyak .book-card sesuai kebutuhan -->
                </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
      <div>© 2023 Copyright: <a href="#" class="text-white fw-bold">Perpustakaan Online</a></div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
