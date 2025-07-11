<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontak STKIP NU Tegal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/img/gedung.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .overlay {
      background: rgba(255, 255, 255, 0.85);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
    .contact-box {
      text-align: center;
      padding: 30px;
      border-radius: 15px;
      background: linear-gradient(to right, #a5d6a7, #b3e5fc);
      box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      transition: transform 0.3s;
    }
    .contact-box:hover {
      transform: scale(1.03);
    }
    .btn-wa {
      background-color: #25D366;
      border: none;
      color: white;
      padding: 12px 25px;
      font-size: 18px;
      border-radius: 30px;
      box-shadow: 0 6px 10px rgba(0,0,0,0.2);
      transition: all 0.3s;
    }
    .btn-wa:hover {
      background-color: #1ebf57;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="overlay">
      <h2 class="text-center text-success fw-bold mb-4">Hubungi STKIP NU Tegal</h2>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="contact-box">
            <h5 class="mb-3">Kontak Langsung Admin </h5>
            <p class="mb-4">Klik tombol di bawah untuk menghubungi kami via WhatsApp</p>
            <a href="https://api.whatsapp.com/send?phone=6285642571180&text=Halo%20STKIP%20NU%20Tegal%2C%20saya%20ingin%20bertanya%20mengenai%20pendaftaran." target="_blank" class="btn-wa">
              Chat via WhatsApp
            </a>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="index.php" class="btn btn-outline-dark rounded-pill px-4 py-2">⬅️ Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</body>
</html>
