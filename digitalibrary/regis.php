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
        <form action="">
            <h1>Silahkan Login Untuk Melanjutkan!</h1>

            <label for="">NIS :</label>
            <input type="text" placeholder="Input Your NIS" required>
            <label for="">Nama Lengkap :</label>
            <input type="password" placeholder="Input Your Name" required>
            <label for="">Email :</label>
            <input type="email" placeholder="Input Your email" required>
            <label for="">Alamat :</label>
            <input type="text" placeholder="Input Your Alamat" required>
            <label for="">Username :</label>
            <input type="text" placeholder="Input Your Name" required>
            <label for="">Password :</label>
            <input type="password" placeholder="Input Your Password" required>
            <div class="user">
            <label for="">Level</label> 
                <select name="level" id="level" required>
                    <option value="Pilih">pilih</option>
                    <option value="Mudah">Mudah</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Sulit">Sulit</option>
                </select>   
            </div>
            <button>Submit</button>
            <p>
            Saya Sudah memiliki akun.buat<a href="login.php">Disini</a>
            </p>
        </form>
    </div>
    <div class="right">
        <img src="logindepan.jpeg">
    </div>
</body>
</html>