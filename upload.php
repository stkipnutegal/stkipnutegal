<?php
include 'koneksi.php';

$judul    = mysqli_real_escape_string($conn, $_POST['judul']);
$penulis  = mysqli_real_escape_string($conn, $_POST['penulis']);
$tahun    = mysqli_real_escape_string($conn, $_POST['tahun']);
$abstrak  = mysqli_real_escape_string($conn, $_POST['abstrak']);
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);

// Validasi file
if ($_FILES['file']['type'] == 'application/pdf') {
    $namaFile = time() . '_' . basename($_FILES['file']['name']);
    $targetDir = 'uploads/';
    $targetFile = $targetDir . $namaFile;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        $query = "INSERT INTO repository (judul, penulis, tahun, abstrak, kategori, file) 
                  VALUES ('$judul', '$penulis', '$tahun', '$abstrak', '$kategori', '$namaFile')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Upload berhasil!'); window.location='repository.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data ke database.'); history.back();</script>";
        }
    } else {
        echo "<script>alert('Gagal upload file PDF.'); history.back();</script>";
    }
} else {
    echo "<script>alert('Hanya file PDF yang diperbolehkan.'); history.back();</script>";
}
?>
