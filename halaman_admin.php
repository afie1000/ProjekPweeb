<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * from user");
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="halLogin.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href="halDaftar.php">Masukan User Baru</a><br><br>
    <table border=1>
    <tr>
    <th>Nama</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Ubah</th>
    </tr>

    <?php
    while($user_data = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['level']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table> <br><br><br>
    <a href="add.php">Masukan Lagu Baru</a><br><br>
    <?php
include_once("config2.php");

$result = mysqli_query($mysqli, "SELECT * from lagu");
?>

    <table border=1>
    <tr>
    <th>jenis</th>
    <th>judul</th>
    <th>artis</th>
    <th>type</th>
    <th>album</th>
    </tr>

    <?php
    while($user_data = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$user_data['jenis']."</td>";
        echo "<td>".$user_data['judul']."</td>";
        echo "<td>".$user_data['artis']."</td>";
        echo "<td>".$user_data['type']."</td>";
        echo "<td>".$user_data['album']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>
