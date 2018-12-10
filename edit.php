<?php

include_once("config.php");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    

    $result = mysqli_query($mysqli, "UPDATE user SET nama='$nama',username='$username',password='$password',level='$level' WHERE id='$id'");

    header("Location: halaman_admin.php");
}
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($mysqli,"SELECT * FROM user WHERE id='$id'");

while($user_data = mysqli_fetch_array($result)){
    $id = $user_data['id'];
    $nama = $user_data['nama'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $level = $user_data['level'];
   
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Biodata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="halLogin.css" />
    <script src="main.js"></script>
</head>
<body>
<a href="halaman_admin.php">Kembali ke laman admin</a><br><br>

<form action="edit.php" method="post" name="form1" class="posisi">
   
    Nama : 
    <input type="text" name="nama" value=<?php echo $nama; ?>><br><br>
    Username : 
    <input type="text" name="username" value=<?php echo $username; ?>><br><br>
    Password :
    <input type="password" name="password" value=<?php echo $password; ?>><br><br>
    Level: <br>
    <input type="radio" name="level" value="admin">Admin <br>
    <input type="radio" name="level" value="pengurus">Pengurus <br>
    <input type="radio" name="level" value="pengguna">Pengguna <br>
    <br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="update" value="update">

</form>
</body>
</html>