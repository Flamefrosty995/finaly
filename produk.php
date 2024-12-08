<?php
include 'koneksi.php';
?>

<div class="container">

    <aside class="hp boxi" style="max-width:17rem; margin-right:1rem;">
        <h3>Kategori :</h3>
        <div class="sidebar">
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="?url=produk">All</a></li>
                <li class="sidebar-item"><a href="?url=makanan">Makanan</a></li>
                <li class="sidebar-item"><a href="?url=mainan">Mainan</a></li>
                <li class="sidebar-item"><a href="?url=pakaian">Pakaian</a></li>
                <li class="sidebar-item"><a href="?url=elektronik">Elektronik</a></li>
            </ul>
        </div>

    </aside>

    <?php

    if (isset($_GET['url']) && $_GET['url'] === 'produk') {
        include 'prodok.php';
        echo "</div>";
    }
    ?>