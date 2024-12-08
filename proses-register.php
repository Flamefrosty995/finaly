<?php
include 'koneksi.php';

$username   = $_POST['username'];
$telp       = $_POST['telepon'];
$password   = $_POST['password'];
$role       = $_POST['role'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sqlt = "SELECT * FROM users WHERE telepon = '$telp'";
$result = mysqli_query($koneksi, $sqlt);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Nomor telepon sudah terdaftar. Gunakan Nomor telepon lain.'); window.location.assign('index.php?url=register');</script>";
    exit();
}

$saldo_virtual = ($role == 'Pembeli') ? 0 : null;

$sql = "INSERT INTO users(username, password, telepon, role) VALUES('$username','$hashed_password','$telp','$role')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index.php?url=login');</script>";
} else {
    echo "<script>alert('Anda Gagal Mendaftar.'); window.location.assign('index.php?url=register');</script>";
}
