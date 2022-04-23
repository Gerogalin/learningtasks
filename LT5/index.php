<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whos That Pokemon?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
	<div id="whosthat">
		<div id="main"><img src="img/whosthatpokemon.png" id="head"></div>
		<div id="song"><img src="img/play.png" id="oop"></div>
		<h2>Click here to play music</h2>
	</div>
	<div id="pkmn">
		<div>
			<div id="button1" onclick="toggle1()"><h1>REVEAL</h1></div>
			<div id="button2" onclick="toggle2()"><h1>REVEAL</h1></div>
		</div>

		<div id="col1">
			<div id="row1"><img src="img/blue.png" id="blue">
			<div id="silbox"><img id="sil1" src="img/ans1.png"><img id="ans1" src="img/pkmn1.png"></div>
				</div>
			<div id="row2"><img src="img/blue.png" id="blue">
			<div id="silbox"><img id="sil2" src="img/ans2.png"><img id="ans2" src="img/pkmn2.png"></div>
				</div>
		</div>
		<div id="buttons">
			<div id="button1" onclick="toggle3()"><h1>REVEAL</h1></div>
			<div id="button2" onclick="toggle4()"><h1>REVEAL</h1></div>
				</div>

		<div id="col2">
			<div id="row1"><img src="img/blue.png" id="blue">
			<div id="silbox"><img id="sil3" src="img/ans3.png"><img id="ans3" src="img/pkmn3.png"></div>
				</div>
			<div id="row2"><img src="img/blue.png" id="blue">
			<div id="silbox"><img id="sil4" src="img/ans4.png"><img id="ans4" src="img/pkmn4.png"></div>
				</div>
		</div>
		<div id="buttons">
			<div id="button1" onclick="toggle5()"><h1>REVEAL</h1></div>
			<div id="button2" onclick="toggle6()"><h1>REVEAL</h1></div>
				</div>

		<div id="col2">
			<div id="row1"><img src="img/blue.png" id="blue">
			<div id="silbox"><img id="sil5" src="img/ans5.png"><img id="ans5" src="img/pkmn5.png"></div>
				</div>
			<div id="row2"><img src="img/blue.png" id="blue">
			<div id="silbox"><img id="sil6" src="img/ans6.png"><img id="ans6" src="img/pkmn6.png"></div>
				</div>
		</div>
	</div>

	<audio id="mysong">
		<source src="music/PkmnTheme.mp3" type="audio/mp3">
	</audio>

	<script src="java.js">
	</script>
</body>
</html>

