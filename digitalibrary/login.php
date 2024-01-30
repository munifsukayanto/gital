<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="mts-removebg-preview.png" type="image/x-icon">
</head>
<body>
    
<div class="container">
    <div class="login">
        <form action="aksi/cek_login.php" method="post  ">
            <h1>Silahkan Login Untuk Melanjutkan!</h1>

            <label for="">Username :</label>
            <input type="text" placeholder="Input Your Name" required>
            <label for="">Password :</label>
            <input type="password" placeholder="Input Your Password"required>
            <button>Submit</button>
            <p>
            Saya belum memiliki akun.Buat<a href="regis.php">Disini</a>
            </p>
        </form>
    </div>
    <div class="right">
        <img src="logindepan.jpeg">
    </div>
</body>
</html>