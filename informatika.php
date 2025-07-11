<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendidikan Informatika - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .section-box {
      background: linear-gradient(to right, rgba(204, 255, 204, 0.95), rgba(173, 216, 230, 0.95));
      padding: 40px;
      margin-bottom: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .section-title {
      color: #388e3c;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .prodi-icon {
      width: 100px;
      height: 100px;
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
  <!-- Foto & Sambutan Ketua Prodi -->
  <div class="section-box text-center">
    <img src="assets/img/kaprodi-rizal.png" alt="Ketua Prodi" class="prodi-icon mb-3 rounded-circle">
    <h4 class="fw-bold">Rizal Nurzuli, M.Kom</h4>
    <p class="mb-2">NIDN: 0618058706</p>
    <p>Selamat datang di Program Studi Pendidikan Informatika. Kami berkomitmen membentuk lulusan berintegritas dan kompeten dalam dunia pendidikan dan teknologi informasi.</p>
  </div>

  <!-- Tentang Prodi -->
  <div class="section-box">
    <h3 class="section-title">Tentang Prodi</h3>
    <p>Program Studi Pendidikan Informatika STKIP NU Tegal bertujuan mencetak tenaga pendidik dan profesional di bidang informatika. Mahasiswa dibekali dengan kompetensi pedagogik dan keahlian teknologi informasi untuk menjawab tantangan era digital.</p>
  </div>

  <!-- Kegiatan Prodi -->
  <div class="section-box">
    <h3 class="section-title">Kegiatan Prodi</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Workshop Desain Web">
          <div class="activity-caption">Workshop Desain Web untuk Mahasiswa Semester 2</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Pelatihan IoT">
          <div class="activity-caption">Pelatihan IoT dan Robotika Dasar untuk Praktikum</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="activity-card text-center">
          <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Kuliah Umum">
          <div class="activity-caption">Kuliah Umum bersama Praktisi Industri Digital</div>
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
            ["judul" => "Pemrograman Dasar", "file" => "pemrograman-dasar.pdf"],
            ["judul" => "Desain Web", "file" => "desain-web.pdf"],
            ["judul" => "Struktur Data", "file" => "struktur-data.pdf"]
          ];
          $no = 1;
          foreach ($materi as $m) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$m['judul']}</td>
                    <td>{$m['file']}</td>
                    <td><a href='materi/informatika/{$m['file']}' target='_blank' class='btn btn-sm btn-success'>Unduh</a></td>
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
