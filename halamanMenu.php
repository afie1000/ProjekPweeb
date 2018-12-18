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
		<div class="header"></div>
	</header>
		<aside>
			<form>
  				<input class="search" type="text" placeholder="Cari..." required>	
  				<input class="button" type="button" value="Cari">		
			</form>
			<div class="bread">Music</div>
			<ul class="links">
				<li><a href="" class="flex align-center"><i class="material-icons">explore</i> Explore</a></li>
				<li><a href="" class="flex align-center"><i class="material-icons">music_note</i> Song</a></li>
				<li><a href="" class="flex align-center"><i class="material-icons">perm_identity</i> Artist</a></li>
				<li><a href="" class="flex align-center"><i class="material-icons">album</i> Album</a></li>
				<li><link rel="icon" type="image/png" href=""></li>
			</ul>
			<div class="bread">Playlist</div>
			<ul class="links">
				<li><a href="" class="flex align-center"><i class="material-icons">playlist_play</i> Playlist 1</a></li>
				<li><a href="" class="flex align-center"><i class="material-icons">playlist_play</i> Playlist 2</a></li>
				<li><a href="" class="flex align-center"><i class="material-icons">playlist_play</i> Playlist 3</a></li>
			</ul>
			</aside>
			<div class="main">
				<div class="music">
					<iframe scrolling="no" id="hearthis_at_track_2633436" width="100%" height="150" src="https://hearthis.at/embed/2633436/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=" frameborder="0" allowtransparency allow="autoplay"><p>Listen to <a href="https://hearthis.at/afie-syahrulloh-arridlo/01-bright-blue/" target="_blank">Bright Blue</a> <span>by</span><a href="https://hearthis.at/afie-syahrulloh-arridlo/" target="_blank" >Afie Syahrulloh Arridlo</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p></iframe>
				</div>
				

			</div>
</body>
</html>