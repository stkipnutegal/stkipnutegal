<!DOCTYPE html>
<html lang="id">
$1
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .hero {
      background: linear-gradient(rgba(144, 238, 144, 0.85), rgba(255, 239, 184, 0.8));
      color: #004225;
      padding: 80px 20px;
      text-align: center;
    }
    .hero h1 {
      font-weight: bold;
      font-size: 2.5rem;
    }
    .section-icons {
      background: linear-gradient(to right, #b2f5ea, #bee3f8);
      padding: 60px 20px;
      text-align: center;
    }
    .section-icons .icon-box {
      background-color: #e0f2fe;
      padding: 30px;
      border-radius: 15px;
      margin: 15px;
      transition: transform 0.2s;
    }
    .section-icons .icon-box:hover {
      transform: scale(1.05);
    }
    footer {
      background-color: #228B22;
      color: white;
      padding: 40px 20px;
    }
    footer a {
      color: #fef08a;
      display: block;
      margin-bottom: 5px;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
      .icon-box {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .icon-box:hover {
      transform: translateY(-5px) scale(1.03);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .hero h1, .hero p {
      animation: fadeInUp 1s ease;
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 1.8rem;
      }
      .section-icons .icon-box {
        margin-bottom: 20px;
      }
    }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #228B22;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.html">
        <img src="assets/img/stkip.png" alt="Logo" height="40" class="me-2"> STKIPNU TEGAL
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="prodi.php">Program Studi</a></li>
          <li class="nav-item"><a class="nav-link" href="pmb.php">PMB</a></li>
          <li class="nav-item"><a class="nav-link" href="berita.php">Berita/Pengumuman</a></li>
          <li class="nav-item"><a class="nav-link" href="tracer.php">Tracer Study</a></li>
          <li class="nav-item"><a class="nav-link" href="repository.php">Repository</a></li>
          <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
          <li class="nav-item"><a class="nav-link" href="download-area.php">Download Area</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero">
    <h1>STKIP NU TEGAL</h1>
    <p class="lead">Unggul, Religius, Berkarakter</p>
    <a href="pmb.php" class="btn btn-success m-2">Daftar Sekarang</a>
    <a href="prodi.php" class="btn btn-outline-success m-2">Lihat Program Studi</a>
  </div>

  <div class="section-icons container">
    <h3 class="mb-4">Tentang STKIP NU Tegal</h3>
    <p>Visi Misi berorientasi pada akreditasi, Lokasi kami strategis, Akreditasi Baik BAN-PT</p>
    <div class="row justify-content-center">
      <div class="col-md-3 icon-box"><a href="pmb.php" class="text-dark text-decoration-none">PMB</a></div>
      <div class="col-md-3 icon-box"><a href="prodi.php" class="text-dark text-decoration-none">Prodi</a></div>
      <div class="col-md-3 icon-box"><a href="galeri.php" class="text-dark text-decoration-none">Galeri</a></div>
      <div class="col-md-3 icon-box"><a href="https://stkipnutegal.sevimaplatform.com/" target="_blank" class="text-dark text-decoration-none">SIAKAD</a></div>
      <div class="col-md-3 icon-box"><a href="tracer.php" class="text-dark text-decoration-none">Tracer Study</a></div>
      <div class="col-md-3 icon-box"><a href="repository.php" class="text-dark text-decoration-none">Repository</a></div>
      <div class="col-md-3 icon-box"><a href="https://api.whatsapp.com/send?phone=6285642571180" target="_blank" class="text-dark text-decoration-none"><i class="bi bi-whatsapp"></i> Kontak</a></div>
    </div>
</div>

<!-- Sambutan Ketua -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-4 text-center">
      <img src="assets/img/ketua.png" alt="Ketua STKIP NU Tegal" class="img-fluid rounded" style="max-height: 300px;">
    </div>
    <div class="col-md-8">
      <div style="background-color: rgba(0, 0, 0, 0.6); padding: 20px; border-radius: 10px;">
        <h3 class="mb-3 text-white">Sambutan Ketua STKIP NU Tegal</h3>
        <p class="text-white fw-bold">
          Assalamu'alaikum warahmatullahi wabarakatuh,<br><br>
          Selamat datang di website resmi STKIP Nahdlatul Ulama Tegal. Kami berkomitmen mencetak generasi yang unggul, religius, dan berkarakter melalui pendidikan yang bermutu dan inovatif. Mari bergabung bersama kami untuk masa depan yang lebih baik.<br><br>
          Wassalamu'alaikum warahmatullahi wabarakatuh.
        </p>
        <p class="fw-bold text-white">Ketua STKIP NU Tegal</p>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Kontak</h5>
          <p>Jl. Raya Slawi Procot No. 02, Slawi, Tegal</p>
          <p>📞 <a href="https://api.whatsapp.com/send?phone=6285642571180" target="_blank" class="text-warning text-decoration-none"><i class="bi bi-whatsapp"></i> 085642571180 (Chat WhatsApp)</a></p>
          <p>📱 @stkipnutegal</p>
        </div>
        <div class="col-md-3">
          <h5>Akademik</h5>
          <a href="kalender.php">Kalender Akademik</a>
          <a href="jadwal-kuliah.php">Jadwal Kuliah</a>
          <a href="pmb.php">PMB</a>
          <a href="https://stkipnutegal.sevimaplatform.com/
        <div class="col-md-3">
          <h5>Fasilitas</h5>
          <a href="fasilitas.php#lab">Laboratorium</a>
          <a href="fasilitas.php#perpus">Perpustakaan</a>
          <a href="fasilitas.php#aula">Aula & Gedung</a>
          <a href="fasilitas.php#serbaguna">Serbaguna</a>
        </div>
        <div class="col-md-3">
          <h5>Organisasi Kampus</h5>
          <a href="organisasi.php#bem">BEM</a>
          <a href="organisasi.php#hmj">HMJ / Prodi</a>
          <a href="organisasi.php#ukm">UKM</a>
          <a href="organisasi.php#lpm">LPM & LDK</a>
        </div>
      </div>
</div>
<div class="text-center mt-4">
  <img src="assets/img/akreditasi.png" alt="Logo Akreditasi" style="height: 60px; margin: 10px;">
  <img src="assets/img/kampus-merdeka.png" alt="Logo Kampus Merdeka" style="height: 60px; margin: 10px;">
</div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
