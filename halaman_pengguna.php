<!DOCTYPE html>
<html>
<head>
	<title>Welcome to LiveM@ster</title>
	<link rel="stylesheet" href="halMenu.css">
</head>
<header>
</header>
<body>
<?php
    include 'config2.php';

    $ambil_lagu = mysqli_query($mysqli, "SELECT * FROM lagu where id='2' ");
    $play = mysqli_fetch_array($ambil_lagu);
    $link = $play['link'];

    ?>
	<form action="#" style="width: 1200px" class="posisi";>
		<table style="width: 1200px; height: 800px;" >
			<tr style="margin-left: auto; margin-top: auto; margin-bottom: auto;">
				<td rowspan="4">
					<img src="blank.png" style="width: 300px; height: 300px;"/> 
				</td>
			</tr>
			
			<tr style="margin-right: auto; margin-top: auto;">
				<td><b>Search</b></td>
				<td>
					<input type="text" name="Search">
					<select name="pilih">
						<option value="">Search By</option>
						<option value="judul">Song</option>
						<option value="Artist">Artist</option>
						<option value="Album">Album</option>
						<option value="Type">Type</option>
					</select><br><br>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>