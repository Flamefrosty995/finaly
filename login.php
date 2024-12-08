<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="boxi">
        <form method="post" action="proses-login.php">
            <div class="form-group">
                <input name="username" type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Your Username.." value="<?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <input name="telepon" type="number" class="form-control" id="exampleInputTelp" placeholder="Enter Your Phone Number.." value="<?php echo isset($_GET['telepon']) ? htmlspecialchars($_GET['telepon']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="********" required>
            </div>
            <button type="submit" class="btn">
                Login
            </button>
        </form>
    </div>
</body>

</html>