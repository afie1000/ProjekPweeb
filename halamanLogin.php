<!doctype html>
 <html>
 <head>
 <title>HalamanLogin</title>
 <link rel="stylesheet" href="halLogin.css"/>
 </head>
 <body>
 
 
 <?php

	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '<script language="javascript">';
			echo 'alert("Username atau Password Salah")';
			echo '</script>';
		}
	}
?>

 	<header></header>
 <form action="cek_login.php" style="width: 1000px"class="posisi" method="post";>
 <table style="width: 1000px; height: 450px ;">
 <tr>
 <td rowspan="7" >
 <img src="niconii.png" width="450px" height="500px"/>
 </td>
 </tr>
 <tr>
 <td><b>User ID</b></td>
 <td>:</td>
 <td>
 	<input type="text" name="username" class="form_login" required>
 </td>
 </tr>
 <tr>
 <td><b>Password</b></td>
 <td>:</td>
 <td>
 	<input type="Password" name="password" class="form_login" required>
 </td>
 </tr>
 <tr>
 <td><b>Belum Punya ID ?</b></td>
 <td></td>
 <td>
 	<a href="halDaftar.php">Daftar Akun</a>
 </td>
 </tr>
  <tr>
 <td><input type="submit" calss="tombol_login" value="LOGIN"</td>
 <td> </td>
 <td> </td>
 </tr>
 <tr>
 <td><b> </b></td>
 <td> </td>
 <td> </td>
 </tr>
 <tr>
 <td><b> </b></td>
 <td> </td>
 <td> </td>
 </tr>

 </table>
 </form>
 </body>
 </html>