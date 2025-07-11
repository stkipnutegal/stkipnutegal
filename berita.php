<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Berita & Pengumuman - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .overlay {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 20px;
    }
    .section-title {
      color: #004d40;
      font-weight: bold;
    }
    .card-news {
      background: linear-gradient(to bottom right, #b2ebf2, #f0f4c3);
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .news-img {
      border-radius: 10px;
      height: 180px;
      object-fit: cover;
    }
    .info-box {
      background: linear-gradient(to right, #fff3e0, #f1f8e9);
      border-radius: 12px;
      padding: 20px;
      margin-top: 30px;
    }
    .info-box h5 {
      color: #bf360c;
    }
    .btn-3d {
      display: inline-block;
      background: linear-gradient(to right, #4CAF50, #81C784);
      color: white;
      font-weight: bold;
      padding: 12px 30px;
      border: none;
      border-radius: 30px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
      text-decoration: none;
      transition: all 0.3s ease-in-out;
    }
    .btn-3d:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.35);
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="overlay">
    <h2 class="text-center section-title mb-5">Berita & Pengumuman STKIP NU Tegal</h2>

    <!-- Berita Pendidikan Terbaru -->
    <h4 class="mb-4">Berita Pendidikan Terbaru</h4>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card card-news">
          <img src="https://via.placeholder.com/400x200?text=Berita+1" class="card-img-top news-img" alt="Berita 1">
          <div class="card-body">
            <h5 class="card-title">Digitalisasi Pembelajaran di Era Merdeka Belajar</h5>
            <p class="card-text">Transformasi digital di dunia pendidikan menjadi strategi utama dalam pembelajaran masa kini.</p>
            <a href="https://kemdikbud.go.id" target="_blank" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card card-news">
          <img src="https://via.placeholder.com/400x200?text=Berita+2" class="card-img-top news-img" alt="Berita 2">
          <div class="card-body">
            <h5 class="card-title">LLDIKTI VI Dukung Peningkatan Mutu Perguruan Tinggi</h5>
            <p class="card-text">STKIP NU Tegal aktif mengikuti program LLDIKTI VI untuk meningkatkan kualitas akademik.</p>
            <a href="https://lldikti6.id" target="_blank" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card card-news">
          <img src="https://via.placeholder.com/400x200?text=Berita+3" class="card-img-top news-img" alt="Berita 3">
          <div class="card-body">
            <h5 class="card-title">Mahasiswa STKIP NU Tegal Raih Prestasi Nasional</h5>
            <p class="card-text">Prestasi membanggakan diraih oleh mahasiswa dalam ajang kompetisi tingkat nasional.</p>
            <a href="https://stkipnutegal.ac.id" target="_blank" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Berita LLDIKTI Wilayah VI -->
    <div class="mt-5">
      <h4>Berita Resmi LLDIKTI Wilayah VI</h4>
      <p>Lihat informasi langsung dari <a href="https://lldikti6.id/category/berita/" target="_blank">https://lldikti6.id/category/berita/</a></p>
    </div>

    <!-- Box Pengumuman & Pamflet -->
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="info-box">
          <h5>Pengumuman Akademik</h5>
          <img src="https://via.placeholder.com/300x200?text=Pengumuman+Akademik" class="img-fluid rounded">
          <p class="mt-2">Kalender akademik semester ganjil 2025/2026 telah tersedia.</p>
          <a href="https://disdikbud.batangkab.go.id/lamp/info/20240619142933-14-0-KALDIK_20242025_Prov_Jateng.pdf" target="_blank" class="btn btn-sm btn-outline-secondary">Lihat Kalender</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box">
          <h5>Surat Pemberitahuan</h5>
          <img src="https://via.placeholder.com/300x200?text=Surat+Pemberitahuan" class="img-fluid rounded">
          <p class="mt-2">Perubahan jadwal perkuliahan dan ujian akhir semester.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary">Lihat Surat</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box">
          <h5>Pamflet & Infografis</h5>
          <img src="https://via.placeholder.com/300x200?text=Pamflet+Akademik" class="img-fluid rounded">
          <p class="mt-2">Informasi beasiswa, lomba, dan program Merdeka Belajar Kampus Merdeka.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="index.php" class="btn-3d">⬅️ Kembali ke Beranda</a>
    </div>
  </div>
</div>
</body>
</html>