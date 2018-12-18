<?php
session_start();
$pilih=$_GET['pilih'];
$song=$_GET['song'];
if($_SESSION['level']=="pengurus"){
header("location:halaman_pengurus.php?pilih=$pilih&song=$song");
}
 else header("location:halaman_pengguna.php?pilih=$pilih&song=$song");
?>