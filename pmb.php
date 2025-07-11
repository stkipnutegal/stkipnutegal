<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftaran Mahasiswa Baru - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }
    .overlay {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 60px 30px;
      border-radius: 20px;
    }
    .pmb-box {
      background: linear-gradient(to bottom right, #e0f7fa, #fffde7);
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 30px;
      color: #000;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .pmb-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    .pmb-box h4 {
      color: #2e7d32;
    }
    .syarat-box {
      background: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 15px;
      color: #000;
      margin-top: 40px;
    }
    .pmb-img {
      width: 100px;
      animation: float 3s ease-in-out infinite;
      display: block;
      margin: 0 auto 20px auto;
    }
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="overlay">
    <img src="assets/img/pmb.png" alt="PMB" class="pmb-img">
    <h2 class="text-center fw-bold mb-5">Pendaftaran Mahasiswa Baru STKIP NU Tegal</h2>

    <div class="row">
      <div class="col-md-6">
        <div class="pmb-box">
          <h4>Jalur Reguler</h4>
          <p>Pendaftaran untuk calon mahasiswa umum dengan mengikuti tes seleksi sesuai jadwal akademik.</p>
          <a href="https://forms.gle/NVsU7uVTQ5heG1Ei7" class="btn btn-success mt-2">Daftar Jalur Reguler</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pmb-box">
          <h4>Jalur Beasiswa KIPK</h4>
          <p>Jalur beasiswa KIPK (Kartu Indonesia Pintar Kuliah) untuk lulusan 2023–2025 yang memiliki KIP-K.</p>
          <a href="https://forms.gle/NVsU7uVTQ5heG1Ei7" class="btn btn-success mt-2">Daftar Jalur Beasiswa KIPK</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pmb-box">
          <h4>Jalur Kelas Karyawan</h4>
          <p>Jalur ini diperuntukkan bagi karyawan aktif yang ingin melanjutkan studi. Wajib menyertakan surat rekomendasi dari pimpinan.</p>
          <a href="https://forms.gle/NVsU7uVTQ5heG1Ei7" class="btn btn-success mt-2">Daftar Jalur Kelas Karyawan</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pmb-box">
          <h4>Jalur Beasiswa Pemda Kab. Tegal</h4>
          <p>Beasiswa kerja sama antara STKIP NU Tegal dan Pemerintah Daerah Kab. Tegal. Ketentuan mengikuti aturan dari Pemda.</p>
          <a href="form-pemda.php" class="btn btn-success mt-2">Daftar Jalur Beasiswa Pemda</a>
        </div>
      </div>
    </div>

    <div class="syarat-box">
      <h5 class="fw-bold mb-3">Ketentuan dan Syarat Pendaftaran</h5>
      <ul>
        <li>Mengisi formulir pendaftaran secara online.</li>
        <li>Mengunggah scan ijazah terakhir atau surat keterangan lulus.</li>
        <li>Pas foto berwarna terbaru ukuran 3x4.</li>
        <li>Scan KTP dan KK.</li>
        <li>Untuk Jalur KIPK: wajib mengunggah kartu KIP-K dan ijazah tahun lulus 2023–2025.</li>
        <li>Untuk Jalur Karyawan: menyertakan surat rekomendasi pimpinan tempat kerja.</li>
        <li>Untuk Jalur Beasiswa Pemda: sesuai aturan Pemkab Tegal.</li>
      </ul>
    </div>
<div class="mt-4">
  <a href="index.php" class="btn btn-outline-light btn-lg">
    ⬅️ Kembali ke Beranda
  </a>
</div>
  </div>
</div>
</body>
</html>
