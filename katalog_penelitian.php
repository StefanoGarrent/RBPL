<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan UPN "Veteran" Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylepenelitian.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="image/logo.png" alt="Logo" width="296" height="54">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="navbar-nav">
            <a class="nav-link active" href="index.php">Home</a>
            <a class="nav-link" href="katalog.php">Buku</a>
            <a class="nav-link" href="about.php">Tentang Kami</a>
            <a class="nav-link" href="bantuan.php">Bantuan</a>
            <a class="nav-link" href="RBPL/WEB-RBPL-main/login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main content layout -->
    <div class="main-wrapper">
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="sidebar-item">
          <img src="image/Katalog.jpg" alt="Katalog Buku" width="90">
          <div>
            <a class="fw-bold mb-0" href="katalog.php">KATALOG JENIS BUKU</a>
            <p class="mb-0">Jenis-jenis Buku</p>
          </div>
        </div>
        <div class="sidebar-item">
          <img src="image/Cari.jpg" alt="Katalog Penelitian" width="90">
          <div>
            <a class="fw-bold mb-0" href="katalog_penelitian.php">KATALOG PENELITIAN</a>
            <p class="mb-0">Penelitian skripsi</p>
          </div>
        </div>
        <div class="sidebar-item">
          <img src="image/Cari.jpg" alt="Buku Favorit" width="90">
          <div>
            <a class="fw-bold mb-0" href="katalog_buku_favorit.php">DAFTAR BUKU TERFAVORIT</a>
            <p class="mb-0">Buku paling banyak diminati</p>
          </div>
        </div>
      </div>

      <!-- Main Content -->
        <div class="main-content">
            <h2>PENELITIAN</h2>
            <div class="research-list">

                <!-- Ulangi blok ini untuk setiap penelitian -->
                <div class="research-item">
                    <img src="image/cover_penelitian.png" alt="Cover Buku" class="research-img">
                    <div class="research-info">
                        <h4>Analisis metode kualitatif dan kuantitatif</h4>
                        <p><strong>Penulis :</strong></p>
                        <p><strong>Edisi :</strong></p>
                        <p><strong>Lokasi :</strong></p>
                    </div>
                </div>

                <div class="research-item">
                    <img src="image/cover_penelitian.png" alt="Cover Buku" class="research-img">
                    <div class="research-info">
                        <h4>Analisis metode kualitatif dan kuantitatif</h4>
                        <p><strong>Penulis :</strong></p>
                        <p><strong>Edisi :</strong></p>
                        <p><strong>Lokasi :</strong></p>
                    </div>
                </div>

                <div class="research-item">
                    <img src="image/cover_penelitian.png" alt="Cover Buku" class="research-img">
                    <div class="research-info">
                        <h4>Analisis metode kualitatif dan kuantitatif</h4>
                        <p><strong>Penulis :</strong></p>
                        <p><strong>Edisi :</strong></p>
                        <p><strong>Lokasi :</strong></p>
                    </div>
                </div>

                <div class="research-item">
                    <img src="image/cover_penelitian.png" alt="Cover Buku" class="research-img">
                    <div class="research-info">
                        <h4>Analisis metode kualitatif dan kuantitatif</h4>
                        <p><strong>Penulis :</strong></p>
                        <p><strong>Edisi :</strong></p>
                        <p><strong>Lokasi :</strong></p>
                    </div>
                </div>

                <!-- Tambahkan research-item lainnya sesuai kebutuhan -->
                
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
