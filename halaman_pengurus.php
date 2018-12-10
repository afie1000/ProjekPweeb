<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Pengurus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    include 'config2.php';

    $ambil_lagu = mysqli_query($mysqli, "SELECT * FROM lagu where id='2' ");
    $play = mysqli_fetch_array($ambil_lagu);
    $link = $play['link'];

    ?>
    <br><br>
    <a href="add.php">Tambah Lagu</a>
    <a href="iseng_musik.php">iseng2</a>

    <audio src="<?php echo $link; ?>" controls ></audio>
    
</body>
</html>