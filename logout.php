<?php

session_start();
session_destroy(); // Menghapus semua session
header("Location: index.php"); // Kembali ke halaman utama
exit();
