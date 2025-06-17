<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8e+K4c2z5x5l5e5f5e5f5e5f5e5f5e5f5f5" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Salsa', cursive;
            background-color: whitesmoke;

        }

        .container{
            display: flex;
            justify-content: space-between;
            align-items: stretch;
        }
        .card {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10 10 10 10;
            border: none !important;
        }
        .card-body {
            background-color: whitesmoke !important;            
        }
        .footer {
      background-color: #3ea88e;
      color: white;
      display: flex;
      justify-content: space-between;
      padding: 30px 40px;
    }

    .footer-column {
      flex: 1;
      margin: 0 10px;
    }

    .footer-column h4 {
      margin-bottom: 15px;
    }

    .footer-column p, .footer-column a {
      margin: 5px 0;
      color: white;
      text-decoration: none;
      font-size: 14px;
    }

    .map-image {
      width: 100%;
      max-width: 200px;
      height: auto;
      border: 2px solid white;
      border-radius: 5px;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #4BB59B !important; padding-right: 20px; padding-left: 20px; padding-top: 10px; padding-bottom: 10px;">
        <div class="container-fluid">
            <img src="logo.png" alt="" width="296px" height="54px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="gap: 40px !important;">
                <a class="nav-link active" aria-current="page" href="#" style="color: white;">Home</a>
                <a class="nav-link" href="#" style="color: white;">Buku</a>
                <a class="nav-link" href="#" style="color: white;">Tentang Kami</a>
                <a class="nav-link" href="#" style="color: white;">Bantuan</a>
                <!--<a class="nav-link disabled" aria-disabled="true">Bantuan</a>-->
            </div>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">REGISTRASI ANGGOTA ONLINE</h4>
                <div style="border: 5px solid #207B5B; padding: 10px; background-color:rgb(112, 214, 189); border-radius: 5px; color: white;">
                <h5 class="card-text">Panduan</h5>
                <ol class="list-group list-group-numbered" style="border: none !important; background-color: transparent;">
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border: none; background-color:rgb(112, 214, 189) !important; color: white;">
                    <div class="ms-2 me-auto">
                        <div class="fw">Silakan registrasi terlebih dahulu menggunakan akun JSS (Jogja Smart Service)</div>
                    </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border: none; background-color:rgb(112, 214, 189) !important; color: white;">
                    <div class="ms-2 me-auto">
                        <div class="fw">Jika sudah mempunyai akun JSS silakan login menggunakan username dan password yang telah terdaftar pada akun JSS (Jogja Smart Service)</div>
                    </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border: none; background-color:rgb(112, 214, 189) !important; color: white;">
                    <div class="ms-2 me-auto">
                        <div class="fw">Setelah terdaftar Anda dapat mengakses website perpustakaan online ini.</div>
                    </div>
                    </li>
                </ol>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6" >
            <div class="card" style="background-color: whitesmoke !important;">
            <div class="card-body" style="background-color: #4BB59B !important; border-radius: 20px;">
                <h3 class="card-title" style="text-align: center;">LOGIN</h3>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3" style="text-align: center; margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="register" style="text-align: center;">
                        <p>Belum punya akun? <br> <a href="register.php" style="color: white;">Daftar Sekarang</a></p>
                    </div>
                </form>
            </div>
            </div>
        </div>    
    </div>
</div>
<div class="footer">
    <div class="footer-column">
      <h4>TENTANG KAMI</h4>
      <p>Perpustakaan online UPN "Veteran" Yogyakarta....</p>
    </div>

    <div class="footer-column">
      <h4>KONTAK KAMI</h4>
      <p>Perpustakaan Online UPN "Veteran" Yogyakarta</p>
      <p>Jl. Padjajaran Jl. Ring Road Utara No.104, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283</p>
      <p>Telepon: (0274) 514448</p>
      <p>Email: <a href="mailto:perpustakaan@gmail.com">perpustakaan@gmail.com</a></p>
    </div>

    <div class="footer-column">
      <h4>MAPS</h4>
      <img src="https://via.placeholder.com/200x120.png?text=Maps" alt="Maps" class="map-image"/>
    </div>
  </div>    
    <footer class="text-center text-lg-start bg-light text-muted" style="margin-top: 20px; background-color: #4BB59B !important; padding-top: 10px; padding-bottom: 10px;">
        <div class="text-center p-3" style="background-color: #4BB59B !important; color: white;">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#">Perpustakaan Online</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>