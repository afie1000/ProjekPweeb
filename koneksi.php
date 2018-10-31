<?php
	$koneksi = mysqli_connect("localhost","root","","user_level");
	
	//cek koneksi
	
	if(mysqli_connect_errno()){
		echo "Koneksi GAGAL ! : " . mysqli_connect_error();
	}

?>