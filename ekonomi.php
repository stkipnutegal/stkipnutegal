<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendidikan Ekonomi - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .section-box {
      background: linear-gradient(to right, rgba(255, 245, 157, 0.95), rgba(204, 255, 204, 0.95));
      padding: 40px;
      margin-bottom: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .section-title {
      color: #e65100;
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
    <img src="assets/img/kaprodi-pe.png" alt="Ketua Prodi Ekonomi" class="mb-3 rounded-circle prodi-icon">
    <h4 class="fw-bold">Zulfatun Nisa, M.Pd</h4>
    <p class="mb-2">NIDN: [ISI NIDN]</p>
    <p>Selamat datang di Program Studi Pendidikan Ekonomi STKIP NU Tegal. Kami hadir untuk mempersiapkan pendidik dan praktisi ekonomi yang berdaya saing dan berakhlak mulia.</p>
  </div>

  <!-- Tentang Prodi -->
  <div class="section-box">
    <h3 class="section-title">Tentang Prodi</h3>
    <p>Pendidikan Ekonomi adalah program studi yang bertujuan membekali mahasiswa dengan pemahaman ekonomi, kewirausahaan, dan pendidikan ekonomi untuk jenjang menengah dan atas. Mahasiswa dipersiapkan menjadi tenaga pendidik profesional dan pelaku ekonomi kreatif yang unggul.</p>
  </div>

  <!-- Kegiatan & Galeri Prodi -->
  <div class="section-box">
    <h3 class="section-title">Kegiatan Prodi</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Pelatihan UMKM">
          <div class="activity-caption">Pelatihan Kewirausahaan untuk Mahasiswa Ekonomi</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Kunjungan Industri">
          <div class="activity-caption">Kunjungan Industri ke Bank dan Pasar Modal</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Seminar Ekonomi Digital">
          <div class="activity-caption">Seminar Ekonomi Digital dan UMKM Era 5.0</div>
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
            ["judul" => "Pengantar Ekonomi", "file" => "pengantar-ekonomi.pdf"],
            ["judul" => "Manajemen Keuangan", "file" => "manajemen-keuangan.pdf"],
            ["judul" => "Ekonomi Mikro", "file" => "ekonomi-mikro.pdf"]
          ];
          $no = 1;
          foreach ($materi as $m) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$m['judul']}</td>
                    <td>{$m['file']}</td>
                    <td><a href='materi/ekonomi/{$m['file']}' target='_blank' class='btn btn-sm btn-success'>Unduh</a></td>
                  </tr>";
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Tombol Kembali -->
  <div class="text-center mt-4">
    <a href="profil.php" class="btn btn-warning btn-lg">Kembali ke Beranda</a>
  </div>
</div>
</body>
</html>
