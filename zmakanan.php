<?php
session_start();
include 'koneksi.php';
include 'produk.php';

?>
<hr>
<hr>
<main class="fcontainer">
    <?php

    $sql = "SELECT id, nama, harga, stok, id_penjual, deskripsi, kategori, namaq, descq FROM produk WHERE kategori = 'Makanan' ORDER BY id DESC";
    $query = mysqli_query($koneksi, $sql);

    while ($data = mysqli_fetch_assoc($query)) {
        echo "
<div class='fbox'>
    <div class='produk'>
        <h2>" . htmlspecialchars($data['namaq']) . "</h2>
        <p>Harga : Rp " . number_format($data['harga'], 2, ',', '.') . "</p>
        <p>Stok : " . htmlspecialchars($data['stok']) . "</p>
        <p>Penjual ID : " . htmlspecialchars($data['id_penjual']) . "</p>
        <p>Kategori : " . htmlspecialchars($data['kategori']) . "</p>
        <p>" . htmlspecialchars($data['descq']) . "</p>
        <hr>
        <br>
        <a href='index.php?url=detail&id={$data['id']}' class='btn' style='text-decoration: none; margin-right:1rem;'>Detail</a>";
        if (isset($_SESSION['username']) && $_SESSION['username'] > 0) {
            if ($data['id_penjual'] == $_SESSION['idp']) {
                echo "<a href=\"?url=edit-jual&id={$data['id']}\" class=\"btn\" style=\"text-decoration:none;\">
            <i class='bx bx-edit-alt'></i>
            <span class=\"text\">Edit</span>
            </a>";
            }
        }
        echo '
    </div>
</div>'; // Closing divs for fbox and produk
    }
    echo "</main></div>";
