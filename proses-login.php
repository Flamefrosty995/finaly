<?php
session_start();

$username   = $_POST['username'];
$telp       = $_POST['telepon'];
$password   = $_POST['password'];
$role       = $_POST['role'];

include 'koneksi.php';

// Check if the username exists
$sql = "SELECT * FROM users WHERE username='$username'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

if ($data) {
    // Username exists, now check the password
    if (password_verify($password, $data['password'])) {
        // Check if the telephone number matches
        if ($data['telepon'] === $telp) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $data['role'];
            $_SESSION['idp'] = $data['id'];
            $_SESSION['SV'] = $data['saldo_virtual'];
            header("Location:index.php");
        } else {
            echo "<script>alert('Nomor telepon salah.'); window.location.assign('index.php?url=login');</script>";
        }
    } else {
        echo "<script>alert('Password salah.'); window.location.assign('index.php?url=login');</script>";
    }
} else {
    // Username does not exist
    echo "<script>alert('Username tidak ditemukan.'); window.location.assign('index.php?url=login');</script>";
}
