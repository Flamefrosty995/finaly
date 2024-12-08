<?php
session_start();

// 

// 

if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'info':
            include 'info.php';
            break;

        case 'produk':
            include 'produk.php';
            break;

        case 'makanan':
            include 'zmakanan.php';
            break;
        case 'mainan':
            include 'zmainan.php';
            break;
        case 'pakaian':
            include 'zpakaian.php';
            break;
        case 'elektronik':
            include 'zelektronik.php';
            break;

        case 'login':
            include 'login.php';
            break;

        case 'register':
            include 'register.php';
            break;

        case 'detail';
            include 'detail.php';
            break;

        case 'jualan';
            include 'jual.php';
            break;

        case 'edit-jual';
            include 'edit-jual.php';
            break;

        default:
            echo 'Halaman Tidak Ditemukan';
            break;
    }
} else { ?>

    <!--  -->
    <div class="box">
        <h3>Anda Masuk Sebagai : . . . <?= htmlspecialchars($_SESSION['username']) ?></h3>
        <p>sebagai . . . <?= htmlspecialchars($_SESSION['role']) ?></p>
    </div>
    <div class="container">
        <main>
            <div class="box" style="display:flex; justify-content: center; align-items:center;">
                <img src="Hero.png" alt="Alt">
            </div>
        </main>

        <aside class="boxi">
            <h3>Kategori :</h3>
            <div class="sidebar">
                <ul class="sidebar-list">
                    <li class="sidebar-item"><a href="?url=makanan">Makanan</a></li>
                    <li class="sidebar-item"><a href="?url=mainan">Mainan</a></li>
                    <li class="sidebar-item"><a href="?url=pakaian">Pakaian</a></li>
                    <li class="sidebar-item"><a href="?url=elektronik">Elektronik</a></li>
                </ul>
            </div>

        </aside>
    </div>


    <!--  -->

<?php
}
?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>