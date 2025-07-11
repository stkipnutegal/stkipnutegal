<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Download Area - STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #e8f5e9, #e3f2fd);
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      padding-top: 50px;
    }
    .card-download {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 20px;
      transition: all 0.3s ease;
    }
    .card-download:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .btn-download {
      background-color: #4caf50;
      color: white;
      border-radius: 30px;
      padding: 6px 20px;
      transition: all 0.3s;
    }
    .btn-download:hover {
      background-color: #388e3c;
    }
    .btn-back {
      margin-top: 40px;
      background: linear-gradient(to right, #1976d2, #fbc02d);
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 10px 25px;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .search-box {
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2 class="text-center text-primary fw-bold mb-4">Download Area STKIP NU Tegal</h2>
  <div class="row justify-content-center search-box">
    <div class="col-md-6">
      <input type="text" id="searchInput" class="form-control form-control-lg" placeholder="Cari file...">
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-md-6">
      <form action="upload_download.php" method="post" enctype="multipart/form-data" class="p-3 bg-light rounded shadow-sm">
        <h5 class="mb-3">Upload File (Admin)</h5>
        <input type="text" name="judul" class="form-control mb-2" placeholder="Judul File" required>
        <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi singkat" required></textarea>
        <input type="file" name="file" accept=".pdf,.docx,.xlsx" class="form-control mb-2" required>
        <button type="submit" class="btn btn-success">Upload</button>
      </form>
    </div>
  </div>
  <div class="row g-4" id="fileList">
    <div class="col-md-6 file-item">
      <div class="card-download">
        <h5 class="fw-bold">Contoh File</h5>
        <p class="text-muted">Deskripsi file contoh.</p>
        <a href="downloads/sample.pdf" class="btn btn-download" download>Unduh</a>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="index.php" class="btn btn-back">⬅️ Kembali ke Beranda</a>
  </div>
</div>
<script>
  const searchInput = document.getElementById('searchInput');
  const fileItems = document.querySelectorAll('.file-item');
  searchInput.addEventListener('keyup', function () {
    const keyword = this.value.toLowerCase();
    fileItems.forEach(item => {
      const text = item.textContent.toLowerCase();
      item.style.display = text.includes(keyword) ? 'block' : 'none';
    });
  });
</script>
</body>
</html>
