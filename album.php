<?php
session_start();
if($_SESSION['level']=="pengurus"){
header("location:halaman_pengurus.php?pilih=4&song=1");
}
 else header("location:halaman_pengguna.php?pilih=4&song=1");
?>