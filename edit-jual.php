<?php
session_start();
$id = $_GET['id'];
include 'koneksi.php';
$sql = "SELECT * FROM produk WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
?>
<div class="boxi">
    <a class="btn" style="text-decoration: none;" href="index.php?url=produk">Back</a>
    <!-- /\ line atas itu /\   : cuman buat spasi gak kelihatan :v -->
    <hr style="margin-top:1rem;">
    <form method="post" action="proses-jual.php">

        <div class="form-group">
            <label style="font-size: 1rem">Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">Harga</label><br>
            <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">Stok</label><br>
            <input type="number" name="stok" class="form-control" value="<?= $data['stok'] ?>">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">ID penjual</label><br>
            <input type="number" name="idp" class="form-control" readonly value="<?php echo $data['id']; ?>">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">Deskripsi</label>
            <input type="text" name="desc" class="form-control" value="<?= $data['deskripsi'] ?>">
        </div>
        <div class="form-group">
            <label name="kategori" for="kategori">Pilih Kategori:</label><br>
            <input type="radio" id="makanan" name="kategori" value="makanan" <?= ($data['kategori'] == 'makanan') ? 'checked' : '' ?> required>
            <label for="makanan"><i class='bx bx-dish'></i> Makanan</label><br>
            <input type="radio" id="mainan" name="kategori" value="mainan" <?= ($data['kategori'] == 'mainan') ? 'checked' : '' ?> required>
            <label for="mainan"><i class='bx bxs-trophy'></i> Mainan</label><br>
            <input type="radio" id="pakaian" name="kategori" value="pakaian" <?= ($data['kategori'] == 'pakaian') ? 'checked' : '' ?> required>
            <label for="pakaian"><i class='bx bxs-t-shirt'></i> Pakaian</label><br>
            <input type="radio" id="elektronik" name="kategori" value="elektronik" <?= ($data['kategori'] == 'elektronik') ? 'checked' : '' ?> required>
            <label for="elektronik"><i class='bx bx-laptop'></i> Elektronik</label><br>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <button type="submit" name="action" value="edit" class="btn">Edit</button>
            <button type="submit" name="action" value="delete" class="btn" style="background-color:red;">Delete</button>
        </div>
    </form>
</div>