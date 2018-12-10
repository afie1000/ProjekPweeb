<?php
	//mengaktifkan session
	session_start();
	
	//menghubungkan php
	include 'koneksi.php' ;
	
	//mengambil data dari halaman login
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//seleksi data user 
	$login = mysqli_query($koneksi,"select* from user where username='$username' and password='$password'");
	//menghitung jumlah daanya
	$cek = mysqli_num_rows($login);
	// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pengguna"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_pengguna.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:HalamanLogin.php?pesan=gagal");
	}	
}else{
	header("location:HalamanLogin.php?pesan=gagal");
}
 
?>