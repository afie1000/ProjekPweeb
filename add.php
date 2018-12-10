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
    <a href="halaman_pengurus.php">Kembali ke laman utama</a><br><br>

    <form action="add.php" method="post" name="form1" class="posisi" style="width: 300px; height: 300px; background-color: rgba(256, 256, 256, 0.7) ;">
        <br> &nbsp;&nbsp;&nbsp;&nbsp;
        <select name="jenis">
           <option value="Love Live">Love Live</option>
           <option value="Idolm@ster">Idolm@ster</option>
        </select> <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Artis :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input type="text" name="artis"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Judul Lagu : 
        <input type="text" name="judul"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Album : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="album"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Type :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="type"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Link Play :
        &nbsp;&nbsp;<input type="text" name="link"> <br><br>

        <input type="hidden" name="favorit" value="0w">

        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="add">

    </form>

    <?php

    if(isset($_POST['submit'])){
        $jenis = $_POST['jenis'];
        $judul = $_POST['judul'];
        $artis = $_POST['artis'];
        $album = $_POST['album'];
        $type = $_POST['type'];
        $link = $_POST['link'];
        $favorit = $_POST['favorit'];
        
        include_once("config2.php");

        $result = mysqli_query($mysqli, "INSERT INTO lagu(jenis,judul,artis,album,type,link,favorit) VALUES('$jenis','$judul','$artis','$album','$type','$link','$favorit')");
    
        echo "Berhasil ditambahkan";
    }

    ?>

</body>
</html>