<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Repository STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #fffde7, #e3f2fd);
      font-family: 'Segoe UI', sans-serif;
    }
    .section-title {
      color: #0d47a1;
      font-weight: bold;
    }
    .table-container {
      background: white;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    .btn-3d {
      background: linear-gradient(to right, #1976d2, #fdd835);
      color: #fff;
      font-weight: bold;
      border-radius: 30px;
      padding: 10px 25px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .btn-3d:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>
<div class="container py-5">
  <h2 class="text-center section-title mb-4">Upload File Repository</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-5">
    <div class="row g-3">
      <div class="col-md-4">
        <input type="text" name="judul" class="form-control" placeholder="Judul" required>
      </div>
      <div class="col-md-4">
        <input type="text" name="penulis" class="form-control" placeholder="Penulis" required>
      </div>
      <div class="col-md-4">
        <input type="text" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-12">
        <textarea name="abstrak" rows="3" class="form-control" placeholder="Abstrak" required></textarea>
      </div>
      <div class="col-md-6">
        <select name="kategori" class="form-select" required>
          <option value="">-- Pilih Kategori --</option>
          <option value="pkm">PKM</option>
          <option value="jurnal">Jurnal</option>
          <option value="skripsi">Skripsi</option>
        </select>
      </div>
      <div class="col-md-6">
        <input type="file" name="file" class="form-control" accept="application/pdf" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success w-100">Upload</button>
      </div>
    </div>
  </form>

  <h2 class="text-center section-title mb-5">Repository STKIP NU Tegal</h2>

  <div class="table-container">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="table-light">
          <tr>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Abstrak</th>
            <th>Tahun</th>
            <th>File</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'koneksi.php';
          $query = mysqli_query($conn, "SELECT * FROM repository ORDER BY tahun DESC");
          while ($data = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data['kategori']) . "</td>";
            echo "<td>" . htmlspecialchars($data['judul']) . "</td>";
            echo "<td>" . htmlspecialchars($data['penulis']) . "</td>";
            echo "<td>" . htmlspecialchars($data['abstrak']) . "</td>";
            echo "<td>" . htmlspecialchars($data['tahun']) . "</td>";
            echo "<td><a href='uploads/" . urlencode($data['file']) . "' target='_blank' class='btn btn-sm btn-primary'>Unduh</a></td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="index.php" class="btn-3d">⬅️ Kembali ke Beranda</a>
  </div>
</div>
</body>
</html>