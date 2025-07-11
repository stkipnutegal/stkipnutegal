<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: ../login.php");
  exit;
}
require '../koneksi.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = (int)$_GET['id'];
$data = $conn->query("SELECT * FROM pendaftaran WHERE id = $id")->fetch_assoc();

if (!$data) {
  echo "<p>Data tidak ditemukan.</p>";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];
  $asal = $_POST['asal'];
  $jalur = $_POST['jalur'];

  $sql = "UPDATE pendaftaran SET nama='$nama', email='$email', no_hp='$no_hp', asal_sekolah_perusahaan='$asal', jalur='$jalur' WHERE id=$id";

  if ($conn->query($sql)) {
    header("Location: index.php");
    exit;
  } else {
    echo "<div class='alert alert-danger'>Gagal menyimpan perubahan!</div>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Data Pendaftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <h3>Edit Data Pendaftar</h3>
  <form method="POST">
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($data['email']) ?>" required>
    </div>
    <div class="mb-3">
      <label>No HP</label>
      <input type="text" name="no_hp" class="form-control" value="<?= htmlspecialchars($data['no_hp']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Asal Sekolah/Perusahaan</label>
      <input type="text" name="asal" class="form-control" value="<?= htmlspecialchars($data['asal_sekolah_perusahaan']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Jalur Pendaftaran</label>
      <select name="jalur" class="form-select" required>
        <option value="Reguler" <?= $data['jalur']=='Reguler' ? 'selected' : '' ?>>Reguler</option>
        <option value="KIPK" <?= $data['jalur']=='KIPK' ? 'selected' : '' ?>>KIPK</option>
        <option value="Karyawan" <?= $data['jalur']=='Karyawan' ? 'selected' : '' ?>>Karyawan</option>
        <option value="Pemda" <?= $data['jalur']=='Pemda' ? 'selected' : '' ?>>Pemda</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>
