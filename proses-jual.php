<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $idp = $_POST['idp'];
    $desc = $_POST['desc'];
    $kategori = $_POST['kategori'];
    $namaq = (mb_strlen($nama) > 17) ? mb_substr($nama, 0, 17 - 3, 'UTF-8') . '...' : $nama;
    $descq = (mb_strlen($desc) > 17) ? mb_substr($desc, 0, 17 - 3, 'UTF-8') . '...' : $desc;

    // Save product details to the database
    include 'koneksi.php';
    $sql = "INSERT INTO produk(nama, harga, stok, id_penjual, deskripsi, kategori, namaq, descq) VALUES ('$nama', '$harga', '$stok', '$idp', '$desc', '$kategori', '$namaq', '$descq')";
    mysqli_query($koneksi, $sql);
    echo "<script>alert('Produk Berhasil Ditambah!'); window.location.assign('index.php');</script>";
}
