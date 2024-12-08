<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padamana E-Shop</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .sidebar-toggle {
            display: none;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <ul>

            <li class="title"><a href="#">
                    <h1><i class='bx bxs-shopping-bag'> </i> PDMN</h1>
                </a></li>


            <li class="links"><a href="?url=info">info</a></li>
            <li class="links"><a href="?url=produk">Produk</a></li>
            <li class="links"><a href="index.php">Home</a></li>

            <?php
            session_start();

            if ($_SESSION['role'] == 'Penjual') {
                echo '<li class="acc"><a href="?url=jualan" class="q">Jualan</a>';
            }

            if (isset($_SESSION['username'])) {
                echo '<li class="acc"><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li class="acc"><a href="?url=login">Login</a></li>';
                echo '<li class="acc"><a href="?url=register" class="q">Register</a></li>';
            }

            ?>
            <li><button class="sidebar-toggle" id="sidebarToggle">☰</button></li>

        </ul>
    </div>

    <div class="responsive-sidebar">
        <div class="sidebar">
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="index.php">Home</a></li>
                <li class="sidebar-item"><a href="?url=produk">Produk</a></li>
                <li class="sidebar-item"><a href="?url=info">info</a></li>

                <?php
                session_start();

                if ($_SESSION['role'] == 'Penjual') {
                    echo '<li class="acc"><a href="?url=jualan" class="q">Jualan</a>';
                }

                if (isset($_SESSION['username'])) {
                    echo '<li class="sidebar-item acc"><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li class="sidebar-item acc"><a href="?url=login">Login</a></li>';
                    echo '<li class="sidebar-item acc"><a href="?url=register" class="q">Register</a></li>';
                }
                ?>
        </div>
        <hr>
        <div class="sidebar">
            <h3 style="color:black">Kategori :</h3>
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="?url=makanan">Makanan</a></li>
                <li class="sidebar-item"><a href="?url=mainan">Mainan</a></li>
                <li class="sidebar-item"><a href="?url=pakaian">Pakaian</a></li>
                <li class="sidebar-item"><a href="?url=elektronik">Elektronik</a></li>
            </ul>
        </div>
        </ul>
    </div>

    <?php
    include 'halaman.php';
    ?>

</body>

<script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        const sidebar = document.querySelector('.responsive-sidebar');
        sidebar.classList.toggle('active'); // Toggle the 'active' class
    });
</script>

</html>