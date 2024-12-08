<?php
session_start();
?>
<div class="boxi">
    <form method="post" action="proses-jual.php" enctype="multipart/form-data">

        <div class="form-group">
            <label style="font-size: 1rem">Nama Produk</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">Harga</label><br>
            <input type="number" name="harga" class="form-control">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">Stok</label><br>
            <input type="number" name="stok" class="form-control">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">ID penjual</label><br>
            <input type="number" name="idp" class="form-control" readonly value="<?php echo $_SESSION['idp']; ?>">
        </div>
        <div class="form-group">
            <label style="font-size: 1rem">Deskripsi</label>
            <input type="text" name="desc" class="form-control">
        </div>
        <div class="form-group">
            <label name="kategori" for="kategori">Pilih Kategori:</label><br>
            <input type="radio" id="makanan" name="kategori" value="makanan" required>
            <label for="makanan"><i class='bx bx-dish'></i> Makanan</label><br>
            <input type="radio" id="mainan" name="kategori" value="mainan" required>
            <label for="mainan"><i class='bx bxs-trophy'></i> Mainan</label><br>
            <input type="radio" id="pakaian" name="kategori" value="pakaian" required>
            <label for="pakaian"><i class='bx bxs-t-shirt'></i> Pakaian</label><br>
            <input type="radio" id="elektronik" name="kategori" value="elektronik" required>
            <label for="elektronik"><i class='bx bx-laptop'></i> Elektronik</label><br>
        </div>
        <div class="form-group">
            <button type="submit" name="action" value="save" class="btn btn-success">Save </button>
        </div>
    </form>
</div>