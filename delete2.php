<?php
session_start();
include_once("config2.php");
$id= $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM lagu WHERE id=$id");
if($_SESSION['level']=="admin"){
header("Location:halaman_admin.php");
} else header("location:halaman_pengurus.php");
?>