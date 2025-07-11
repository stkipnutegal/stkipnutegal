<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bimbingan Konseling - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .section-box {
      background: linear-gradient(to right, rgba(135, 206, 250, 0.95), rgba(255, 204, 128, 0.95));
      padding: 40px;
      margin-bottom: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .section-title {
      color: #bf360c;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .prodi-icon {
      width: 160px;
      height: 160px;
    }
    .table {
      background-color: #ffffff;
    }
    .activity-card {
      border-radius: 15px;
      background: #fff;
      padding: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .activity-card img {
      border-radius: 10px;
    }
    .activity-caption {
      margin-top: 10px;
      font-weight: 500;
    }
  </style>
</head>
<body>
<div class="container py-5">
  <!-- Sambutan Kaprodi -->
  <div class="section-box text-center">
    <img src="assets/img/kaprodi-bk.png" alt="Ketua Prodi BK" class="mb-3 rounded-circle prodi-icon">
    <h4 class="fw-bold">IRA PALUPI, M.Pd</h4>
    <p class="mb-2">NIDN: 068898806</p>
    <p>Selamat datang di Program Studi Bimbingan Konseling STKIP NU Tegal. Kami mendidik calon konselor yang profesional, empatik, dan berdaya saing tinggi dalam dunia pendidikan dan masyarakat.</p>
  </div>

  <!-- Tentang Prodi -->
  <div class="section-box">
    <h3 class="section-title">Tentang Prodi</h3>
    <p>Program Studi Bimbingan Konseling bertujuan mencetak lulusan yang memiliki kompetensi dalam memberikan layanan konseling, baik di lembaga pendidikan, masyarakat, maupun institusi lainnya. Mahasiswa dibekali teori dan praktik konseling individu dan kelompok.</p>
  </div>

  <!-- Kegiatan & Galeri Prodi -->
  <div class="section-box">
    <h3 class="section-title">Kegiatan Prodi</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Seminar BK">
          <div class="activity-caption">Seminar Nasional Kesehatan Mental Anak Remaja</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Praktik Lapangan">
          <div class="activity-caption">Praktik Konseling Sekolah di SMA Mitra</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Pelatihan Softskill">
          <div class="activity-caption">Pelatihan Softskill dan Empati untuk Mahasiswa</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Materi Kuliah -->
  <div class="section-box">
    <h3 class="section-title text-center">Materi Kuliah</h3>
    <form action="upload_materi.php" method="post" enctype="multipart/form-data" class="row justify-content-center mb-4">
      <div class="col-md-4">
        <input type="file" name="materi_file" class="form-control mb-2" required>
      </div>
      <div class="col-md-4">
        <input type="text" name="judul" class="form-control mb-2" placeholder="Judul Materi" required>
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Upload</button>
      </div>
    </form>

    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>File</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $materi = [
            ["judul" => "Teori Konseling Dasar", "file" => "teori-konseling.pdf"],
            ["judul" => "Etika Profesi BK", "file" => "etika-bk.pdf"],
            ["judul" => "Konseling Kelompok", "file" => "konseling-kelompok.pdf"]
          ];
          $no = 1;
          foreach ($materi as $m) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$m['judul']}</td>
                    <td>{$m['file']}</td>
                    <td><a href='materi/bk/{$m['file']}' target='_blank' class='btn btn-sm btn-success'>Unduh</a></td>
                  </tr>";
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Tombol Kembali -->
  <div class="text-center mt-4">
    <a href="profil.php" class="btn btn-warning btn-lg">Kembali ke profil</a>
  </div>
</div>
</body>
</html>
