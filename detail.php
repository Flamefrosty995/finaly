<div class="boxi">

    <a class="btn" style="text-decoration: none;" href="index.php?url=produk">Back</a>
    <hr style="margin-top:1rem;">

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    if (empty($id)) {
        header('location:index.php?url=produk');
    }

    $sql = "SELECT * FROM produk WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);
    $Deskripsi = $data['deskripsi'];
    ?>

    <input class="h2" type="text" readonly value="<?php echo htmlspecialchars($data['nama']); ?>" />
    <p>Harga: Rp <?php echo number_format($data['harga'], 2, ',', '.'); ?></p>
    <p>Stok: <?php echo htmlspecialchars($data['stok']); ?></p>
    <hr />
    <?php
    function FD($deskripsi)
    {
        $formatted = '';
        $length = mb_strlen($deskripsi);
        $start = 0;

        while ($start < $length) {
            // Ambil substring dari posisi $start sepanjang 40 karakter
            $formatted .= mb_substr($deskripsi, $start, 40) . '<br>';
            $start += 40; // Pindah ke posisi berikutnya
        }

        return rtrim($formatted); // Menghapus spasi di akhir
    }
    ?>
    <p class="box" style="margin: 1rem"><?php echo FD($data['deskripsi']); ?></p>
    <p class="boxi" style="max-width:20rem; margin: 1rem;">Penjual ID: <?php echo htmlspecialchars($data['id_penjual']); ?>
    </p>
    <hr />
    <br />

    <?php
    if (isset($_SESSION['username'])) {
        // Jika sudah login, tampilkan tombol Beli
        echo "<button class='btn' onclick='beli()'>Beli</button>";
    } else {
        // Jika belum login, tampilkan tombol yang mengarahkan ke login
        echo "<button class='btn' onclick='alertLogin()'>Beli</button>";
    }
    ?>

    <script>
        function beli() {
            alert('Berhasil Membeli.');
        }

        function alertLogin() {
            alert('Silakan login terlebih dahulu');
            window.location.href = 'index.php?url=login';
        }
    </script>

</div>