<?php
session_start();

$gem = $_GET['search'];

if (isset($_GET['search'])) {
    switch (isset($_GET['search'])) {
        case 'gjls';
            header('location:gim.html');
            break;
    }
    $search = htmlspecialchars($_GET['search']);
    // Logika pencarian dapat ditambahkan di sini
    echo "<h1>Hasil Pencarian untuk: $search</h1>";
    // Misalnya, tampilkan hasil pencarian dari database atau array
} elseif ($gem === 'gjls') {
    echo "<h1>gjls</h1>";
} else {
    echo "<h1>Silakan masukkan kata kunci untuk pencarian.</h1>";
}
