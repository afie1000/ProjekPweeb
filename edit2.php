<?php

session_start();

include_once("config2.php");
if(isset($_POST['update'])){
    $jenis = $_POST['jenis'];
    $judul = $_POST['judul'];
    $artis = $_POST['artis'];
    $album = $_POST['album'];
    $type = $_POST['type'];
    $link = $_POST['link'];
    $favorit = $_POST['favorit'];
    $id = $_POST['id'];
    

    $result = mysqli_query($mysqli, "UPDATE lagu SET jenis='$jenis',judul='$judul',artis='$artis',album='$album',type='$type',link='$link',favorit='$favorit',id='$id' where id='$id'");

    if($_SESSION['level']=="admin"){
    header("Location: halaman_admin.php");
    } else header("location:halaman_pengurus.php?pilih=1&song=1");
    
}
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($mysqli,"SELECT * FROM lagu WHERE id='$id'");

while($user_data = mysqli_fetch_array($result)){
    $id = $user_data['id'];
    $jenis = $user_data['jenis'];
    $judul = $user_data['judul'];
    $artis = $user_data['artis'];
    $album = $user_data['album'];
    $type = $user_data['type'];
    $link = $user_data['link'];
    $favorit = $user_data['favorit'];
   
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Lagu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="halLogin.css" />
    <script src="main.js"></script>
</head>
<body>
  
<form action="edit2.php" method="post" name="form2" class="posisi">
   
<br> 
        <select name="jenis">
           <option value="Love Live">Love Live</option>
           <option value="Idolm@ster">Idolm@ster</option>
        </select> <br><br>
        Artis : 
        <input type="text" name="artis" value="<?php echo $artis; ?>"><br><br>
        Judul Lagu : 
        <input type="text" name="judul" value="<?php echo $judul; ?>"><br><br>
        Album :
        <input type="text" name="album" value="<?php echo $album;?>"><br><br>
        Type :
        <input type="text" name="type" value="<?php echo $type; ?>"><br><br>
        Link Play :
        <input type="text" name="link" value="<?php echo $link; ?>"><br><br>

        <input type="hidden" name="favorit" value="0">
        <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="update" value="update">

</form>
</body>
</html>