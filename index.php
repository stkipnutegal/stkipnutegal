<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }
    .overlay {
      background: rgba(0, 0, 0, 0.5);
      padding: 60px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }
    h1, h3 {
      color: #fff;
    }
    .icon-box {
      background: linear-gradient(to bottom right, #b2dfdb, #a5d6a7);
      padding: 20px;
      border-radius: 15px;
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .icon-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.35);
    }
    .icon-box img {
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.3);
      transition: transform 0.3s;
    }
    .icon-box img:hover {
      transform: scale(1.1);
    }
    .icon-title {
      color: #004d40;
      font-weight: bold;
      font-size: 18px;
    }
    @media (max-width: 767px) {
      .icon-box img {
        width: 80px;
        height: 80px;
      }
      .icon-title {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="overlay text-center">
    <img src="assets/img/stkip.png" alt="Logo STKIP NU Tegal" style="width: 200px;" class="mb-4 img-fluid">
    <h1 class="fw-bold">Selamat Datang di STKIP Nahdlatul Ulama Tegal</h1>
    <h3 class="mt-3">Kampus Merdeka – Unggul, Religius, dan Inovatif</h3>
    <p class="mt-4">Temukan informasi lengkap tentang kampus kami, program studi, pendaftaran mahasiswa baru, dan kegiatan akademik maupun non-akademik lainnya.</p>

    <div class="row mt-5 justify-content-center">
      <div class="col-lg-3 col-md-4 col-6 mb-4">
        <a href="profil.php" class="icon-box d-block">
          <img src="assets/img/stkip.png" alt="Profil">
          <div class="icon-title">Profil Kampus</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mb-4">
        <a href="prodi.php" class="icon-box d-block">
          <img src="assets/img/prodi.png" alt="Program Studi">
          <div class="icon-title">Program Studi</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mb-4">
        <a href="pmb.php" class="icon-box d-block">
          <img src="assets/img/pmb.png" alt="PMB">
          <div class="icon-title">Pendaftaran</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mb-4">
        <a href="galeri.php" class="icon-box d-block">
          <img src="assets/img/galeri.png" alt="Galeri">
          <div class="icon-title">Galeri</div>
        </a>
      </div>
    </div>

  </div>
</div>
</body>
</html>
