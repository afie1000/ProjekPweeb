<?php
	session_start();
	include_once('config2.php');
	$pilih= $_GET['pilih'];
if($pilih==1){
	$result = mysqli_query($mysqli, "SELECT * from lagu");
}else if($pilih==2){
	$result = mysqli_query($mysqli, "SELECT * from lagu order by judul");
}else if ($pilih==3){
	$result = mysqli_query($mysqli, "SELECT * from lagu order by artis");
}else if ($pilih==4){
	$result = mysqli_query($mysqli, "SELECT * from lagu order by album");
}

   $song = $_GET['song'];
	$pilLagu = mysqli_query($mysqli, "SELECT * from lagu where id='$song'");

	while($songs = mysqli_fetch_array($pilLagu)){
		$play=$songs['link'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<script>
		const init = function(){
	let items = document.querySelectorAll('section');
	for (let i = 0; i < items.length; i++){
		items[i].style.background = randomColor({luminosity: 'light'});
	}
	cssScrollSnapPolyfill()
}
init();
	</script>
	<title>Welcome to LiveM@ster</title>
	<link rel="stylesheet" href="halMenu.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"> integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTw1AQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="header">
			<br><br>
		<b class="teLog">Selamat Datang</b><br>
		<b class="teLog"><?php echo $_SESSION['nama']; ?></b>
		</div>

	</header>
		<aside>
			<form>
  				<input class="search" type="text" placeholder="Cari..." required>	
  				<input class="button" type="button" value="Cari">		
			</form>
			<div class="bread">Music</div>
			<ul class="links">
				<li><a href="song.php" class="flex align-center"><i class="material-icons">music_note</i> Song</a></li>
				<li><a href="artist.php" class="flex align-center"><i class="material-icons">perm_identity</i> Artist</a></li>
				<li><a href="album.php" class="flex align-center"><i class="material-icons">album</i> Album</a></li>
				<li><link rel="icon" type="image/png" href=""></li>
			</ul>
			
			<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="location.href='logout.php'" type="button">LOGOUT</button>
			</aside>
			<div class="main">
				<div class="music">
					<iframe scrolling="no" id="track" width="100%" height="150" src="<?php echo $play; ?>" frameborder="0" allowtransparency allow="autoplay"></iframe>
				</div>
			</div>
			<br><br>
			<div>
				<table class="fixed_headers">
					<thead>
					<tr>
					<th>judul lagu</th>
  					<th>idol</th>
    				<th>artis</th>
    				<th>album</th>
					<th>type</th>
					</tr>
					</thead>
					<tbody>
					<?php
						while($user_data = mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td><a href='play.php?pilih=$pilih&song=$user_data[id]'>".$user_data['judul']."</a></td>";
							echo "<td>".$user_data['jenis']."</td>";
							echo "<td>".$user_data['artis']."</td>";
							echo "<td>".$user_data['album']."</td>";
							echo "<td>".$user_data['type']."</td>";
						}
					?>
				</tbody>
				</table>
			</div>

</body>
</html>