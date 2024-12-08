<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="boxi">
        <form method="post" action="proses-register.php">
            <div class="form-group">
                <input name="username" type="text" class="form-control" id="exampleInputUsername" placeholder="Enter your Username..." required>
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="********" required>
            </div>
            <div class="form-group">
                <input name="telepon" type="number" class="form-control" id="exampleInputTelp" placeholder="Enter Your Phone Number.." required>
            </div>
            <div class="form-group">
                <label for="role">Pilih Peran:</label><br>
                <input type="radio" id="penjual" name="role" value="penjual" required>
                <label for="penjual">Penjual</label><br>
                <input type="radio" id="pembeli" name="role" value="pembeli" required>
                <label for="pembeli">Pembeli</label><br>
            </div>
            <button type="submit" class="btn">
                Register
            </button>
        </form>
    </div>

</body>

</html>