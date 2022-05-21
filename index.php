<?php
$show = (isset($_GET['load']) && $_GET['load'] !='') ? $_GET['load'] : '';
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Home | Gerogalin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Rubik:wght@500&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div id="header">
		<div id="Title">
			<div id="flame"><img id="img-flame" src="images/flame.png" ></div>
			<div id="name-box"><h1 id="name">G E R O G A L I N</h1></div>
		</div>
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?load=works">Works</a></li>
				<li><a href="index.php?load=about">About</a></li>
					<div id="profile-box">
						<h2 id="line">|</h2>
						<div id="profile"><img src="images/logo.png" id="profile-logo"></div>
						<div><a href="index.php?load=profile">Profile</a></div>
					</div>
			</ul>
		</div>
	</div>


<div id="content">
		<?php

		switch ($show) {
			case 'works':
				include_once 'works.php';
				break;
			case 'about':
				include_once 'about.php';
				break;
			case 'profile':
				include_once 'profile.php';
				break;
			default:
				include_once 'home.php'; 
				break;
			}
		?>
	</div>



	<div id="footer">
		<div>
			<div class="col-one">
				<h3>THE PROJECT</h3>
				<ul>
					<li><a href="index.php?load=home">Home</a></li>
					<li><a href="index.php?load=about">Blog</a></li>
					<li><a href="index.php?load=works">News</a></li>
					<li><a href="index.php?load=about">About Us</a></li>
					<li></ul>
			</div>
			<div class="col-two">
				<h3>USEFUL LINKS</h3>
				<ul>
					<li><a href="index.php?load=works">Dashboard</a></li>
					<li><a href="index.php?load=about">FAQS</a></li>
					<li><a href="index.php?load=profile">Account</a></li>
					<li><a href="index.php?load=profile">Profile</a></li>
					<li></ul>
			</div>
			<div class="col-three">
				<h1 id="h1">CONTACT</h1>
				<h2 id="h2">jevengerogalin@gmail.com</h2>
				<h2 id="h2">+639157371785</h2>
				<div id="icon">
				<a href="https://web.facebook.com/jeven.gerogalin/"><img src="images/facebook-logo.png"></a>
				<a href="https://twitter.com/jvengero"><img src="images/twitter-logo.png"></a>
				<a href="https://www.instagram.com/jevengerogalin/"><img src="images/instagram-logo.png"></a>
				<a href="https://www.youtube.com/channel/UCIdUj2u57U_YQOqKumxDGcQ"><img src="images/youtube-logo.png"></a>
				<a href="https://www.twitch.tv/kaneki_jg"><img src="images/twitch-logo.png"></a>
				</div>
			</div>
			<div class="col-four">
				<img src="images/flame.png" id="foot-flame">
			</div>
			<div class="col-five">
				<h1 id="h4">G E R O G A L I N</h1>
				<h3 id="h3">CLE1: Culminating Learning Evidence (Endterm)</h3>
				<h3 id="h3">WEB DESIGNER PORTFOLIO</h3>
				<h3 id="h3">Created by Jeven Gerogalin 2022	</h3>
			</div>
		</div>
	</div>

</body>
	<audio id="song1">
			<source src="audio/Enemy.mp3" type="audio/mp3">
					</audio>
	<audio id="song2">
			<source src="audio/Sunflower.mp3" type="audio/mp3">
					</audio>
	<audio id="song3">
			<source src="audio/BlackCatcher.mp3" type="audio/mp3">
					</audio>
	<audio id="song4">
			<source src="audio/LifeisaHighway.mp3" type="audio/mp3">
					</audio>
	<audio id="song5">
			<source src="audio/WishingWell.mp3" type="audio/mp3">
					</audio>
	<audio id="song6">
			<source src="audio/AllStar.mp3" type="audio/mp3">
					</audio>
	<audio id="song7">
			<source src="audio/Pompeii.mp3" type="audio/mp3">
					</audio>
	<audio id="song8">
			<source src="audio/Departure.mp3" type="audio/mp3">
					</audio>
	<audio id="song9">
			<source src="audio/SomeNights.mp3" type="audio/mp3">
					</audio>
	<audio id="song10">
			<source src="audio/Mood.mp3" type="audio/mp3">
					</audio>

	<script src="java/java.js">
		</script>
</html>