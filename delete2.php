<?php
include_once("config2.php");
$id= $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM lagu WHERE id=$id");

header("Location:halaman_admin.php");
?>