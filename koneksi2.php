<?php
	$koneksi = mysqli_connect("localhost","root","","projek_lagu");
	
	//cek koneksi
	
	if(mysqli_connect_errno()){
		echo "Koneksi GAGAL ! : " . mysqli_connect_error();
	}

?>