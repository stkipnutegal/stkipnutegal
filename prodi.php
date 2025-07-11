<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Program Studi - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #ccf5d3, #e6ffe6);
      font-family: 'Segoe UI', sans-serif;
    }
    .prodi-card {
      border: none;
      border-radius: 20px;
      transition: transform 0.3s, box-shadow 0.3s;
      background-color: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .prodi-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    .prodi-icon {
      width: 100px;
      height: 100px;
    }
    .btn-prodi {
      border-radius: 30px;
      font-weight: bold;
      padding: 12px 30px;
      background: linear-gradient(to right, #4CAF50, #8BC34A);
      color: white;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }
    .btn-prodi:hover {
      transform: scale(1.05);
      background: linear-gradient(to right, #43a047, #7cb342);
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="text-center mb-5 text-success fw-bold">Program Studi STKIP NU Tegal</h2>

  <div class="row g-4">
    <!-- Pendidikan Informatika -->
    <div class="col-md-4 text-center">
      <div class="prodi-card p-4">
        <img src="assets/img/informatika.png" alt="Informatika" class="prodi-icon mb-3">
        <h5>Pendidikan Informatika</h5>
        <a href="informatika.php" class="btn btn-prodi mt-3">Lihat Detail</a>
      </div>
    </div>

    <!-- Pendidikan Ekonomi -->
    <div class="col-md-4 text-center">
      <div class="prodi-card p-4">
        <img src="assets/img/ekonomi.png" alt="Ekonomi" class="prodi-icon mb-3">
        <h5>Pendidikan Ekonomi</h5>
        <a href="ekonomi.php" class="btn btn-prodi mt-3">Lihat Detail</a>
      </div>
    </div>

    <!-- Bimbingan Konseling -->
    <div class="col-md-4 text-center">
      <div class="prodi-card p-4">
        <img src="assets/img/bk.png" alt="BK" class="prodi-icon mb-3">
        <h5>Bimbingan Konseling</h5>
        <a href="bk.php" class="btn btn-prodi mt-3">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>