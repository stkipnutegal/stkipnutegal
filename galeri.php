<!-- Galeri -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Kegiatan - STKIP NU Tegal</title>
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
      color: #00695c;
      font-weight: bold;
    }
    .gallery-img {
      width: 100%;
      height: auto;
      border-radius: 15px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .gallery-img:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }
    .card-gallery {
      background: linear-gradient(to bottom right, #dcedc8, #ffe0b2, #e0e0e0);
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .card-title {
      font-weight: bold;
    }
    .btn-baca {
      margin-top: 10px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="overlay">
    <h2 class="text-center section-title mb-5">Galeri Kegiatan STKIP NU Tegal</h2>

    <div class="row mb-5">
      <div class="col-md-6 mb-4">
        <div class="card card-gallery p-3">
          <img src="https://via.placeholder.com/600x400?text=Kegiatan+1" alt="Kegiatan Umum 1" class="gallery-img mb-3">
          <h5 class="card-title">Judul Kegiatan Umum 1</h5>
          <p class="card-text">Deskripsi singkat kegiatan umum 1. Contoh: kegiatan sosial mahasiswa bersama masyarakat.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary btn-baca">Baca selengkapnya</a>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card card-gallery p-3">
          <img src="https://via.placeholder.com/600x400?text=Kegiatan+2" alt="Kegiatan Umum 2" class="gallery-img mb-3">
          <h5 class="card-title">Judul Kegiatan Umum 2</h5>
          <p class="card-text">Deskripsi singkat kegiatan umum 2. Contoh: pelatihan dan workshop pembelajaran digital.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary btn-baca">Baca selengkapnya</a>
        </div>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <div class="card card-gallery p-3 h-100">
          <img src="https://via.placeholder.com/300x200?text=Informatika" alt="Informatika" class="gallery-img mb-2">
          <h6 class="card-title">Kegiatan Prodi Informatika</h6>
          <p class="small">Keterangan kegiatan prodi Informatika. Contoh: Workshop coding siswa SMA.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary btn-baca">Baca selengkapnya</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card card-gallery p-3 h-100">
          <img src="https://via.placeholder.com/300x200?text=Ekonomi" alt="Ekonomi" class="gallery-img mb-2">
          <h6 class="card-title">Kegiatan Prodi Ekonomi</h6>
          <p class="small">Keterangan kegiatan prodi Ekonomi. Contoh: simulasi pasar mini oleh mahasiswa.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary btn-baca">Baca selengkapnya</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card card-gallery p-3 h-100">
          <img src="https://via.placeholder.com/300x200?text=BK" alt="BK" class="gallery-img mb-2">
          <h6 class="card-title">Kegiatan Prodi BK</h6>
          <p class="small">Keterangan kegiatan prodi Bimbingan Konseling. Contoh: bimbingan karir siswa.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary btn-baca">Baca selengkapnya</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card card-gallery p-3 h-100">
          <img src="https://via.placeholder.com/300x200?text=BK+2" alt="BK 2" class="gallery-img mb-2">
          <h6 class="card-title">Layanan Konseling Mahasiswa</h6>
          <p class="small">Kegiatan layanan konseling internal untuk mahasiswa STKIP NU Tegal.</p>
          <a href="#" class="btn btn-sm btn-outline-secondary btn-baca">Baca selengkapnya</a>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-outline-primary">⬅️ Kembali ke Beranda</a>
    </div>

  </div>
</div>
</body>
</html>
