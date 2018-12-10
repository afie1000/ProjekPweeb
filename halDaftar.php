<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Biodata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="halLogin.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href="halamanLogin.php">Kembali ke Halaman Login</a><br><br>

    <form action="halDaftar.php" method="post" name="form2" style="width: 300px; height: 200px; background-color: rgba(256, 256, 256, 0.7) ;"class="posisi">
        <br><br>
        <div class="tengah">
            &nbsp;&nbsp;&nbsp;&nbsp;Nama : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
            <input type="text" name="nama"> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Username :
            <input type="text" name="username"> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Password :&nbsp;
            <input type="password" name="password"> <br><br>

            <input type="hidden" name="level" value="pengguna">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Daftar">
        </div>
    </form>

    <?php

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        
        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO user(nama,username,password,level) VALUES('$nama','$username','$password','$level')");
    
        echo "Berhasil ditambahkan. <a href='halamanLogin.php'>Kembali</a> ";
    }

    ?>

</body>
</html>