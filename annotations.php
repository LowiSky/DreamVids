<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/annotations.css">

		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 0.9, maximum-scale = 1.0, user-scalable = no">
		<meta cHarset="utf-8">

		<title>Titre de la vidéo - Nom de la chaîne - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>
	
			<section id="video">
				<div id="video-top-infos">
					<div id="video-top-title">
						<h1>Titre de la vidéo</h1>
					</div>
				</div>

				<div id="player">
					<video x-webkit-airplay="allow" autobuffer preload="auto" poster="http://puu.sh/6Tf6f.png"></video>
					<div id="annotationsElement"></div>
					<span id="repeat">
						<span class="icon"></span>
					</span>
					<span id="qualitySelection" class="show"></span>
					<span id="waitForPlay" style="display: none;"></span>
					<span id="bigPlay"></span>
					<span id="bigPause"></span>
					<div id="controls">
						<span id="progress">
							<span id="buffered"></span>
							<span id="viewed"></span>
							<span id="current"></span>
						</span>
						<span id="play-pause" class="play"></span>
						<span id="time"></span>
						<span id="annotationsButton" style="display: none"></span>
						<span id="qualityButton">SD</span>
						<span id="volume">
							<span id="barre"></span>
							<span id="icon"></span>
						</span>
						<span id="separation"></span>
						<span id="widescreen" class="widescreen"></span>
						<span id="fullscreen" class="fullscreen"></span>
					</div>
				</div>
				<section id="videoInfos">
					<div id="annoTools">
						<button onclick="addAnnotation();">Créer une annotation</button>
						<div id="selectedTools" style="display: none;">
							<input type="text" id="STtitle" value="Oh une annotation !" oninput="valueSTchange(this.value);"/>
	
							Gauche : <input type="text" id="STleft" value="20" maxlength="5" oninput="leftSTchange(this, this.value);"/><p class="purcent">%</p><br />
							Haut : <input type="text" id="STtop" value="20" maxlength="5" oninput="topSTchange(this, this.value);"/><p class="purcent">%</p><br />
	
							Largeur : <input type="text" id="STwidth" value="45" maxlength="5" oninput="widthSTchange(this, this.value);"/><p class="purcent">%</p><br />
							Hauteur : <input type="text" id="STheight" value="10" maxlength="5" oninput="heightSTchange(this, this.value);"/><p class="purcent">%</p><br />
	
							<div style="text-align: center;">
								<button class="colorSelect blue" onclick="STsetColor('blue')"></button>
								<button class="colorSelect orange" onclick="STsetColor('orange')"></button>
								<button class="colorSelect yellow" onclick="STsetColor('yellow')"></button>
								<button class="colorSelect pink" onclick="STsetColor('pink')"></button>
								<button class="colorSelect red" onclick="STsetColor('red')"></button>
								<button class="colorSelect green" onclick="STsetColor('green')"></button>
								<button class="colorSelect purple" onclick="STsetColor('purple')"></button>
								<button class="colorSelect white" onclick="STsetColor('white')"></button>
								<button class="colorSelect black" onclick="STsetColor('black')"></button>
								<button class="colorSelect transparent b" onclick="STsetColor('transparent b')">a</button>
								<button class="colorSelect transparent w" onclick="STsetColor('transparent w')">a</button>
							</div>
		
							Lien : <input type="url" id="STlink" autocorrect="off" autocapitalize="off" spellcheck="false" value="" oninput="STsetLink(this.value);"/>

							<button class="red" onclick="deleteAnnotation(document.getElementById('ann' + (selectedAnnotation + 1)));">Supprimer l'annotation</button>
						</div>
					</div>
				</section>
			</section>
	
			<section id="annoTimeLine">
				<ul id="annoList"></ul>
			</section>
	
			<?php include 'footer.php'; ?>*
				
		</div>


		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>

		<script src="js/annotations.js"></script>
		<script src="js/player.js"></script>
		<script>
			setVideo([
				{
					format: 360,
					mp4: 'http://media.jilion.com/videos/demo/midnight_sun_sv1_360p.mp4',
					webm: 'http://media.jilion.com/videos/demo/midnight_sun_sv1_360p.webm'
				},
				{
					format: 720,
					mp4: 'http://media.jilion.com/videos/demo/midnight_sun_sv1_720p.mp4',
					webm: 'http://media.jilion.com/videos/demo/midnight_sun_sv1_720p.webm'
				}
			]);
			setAnnotations([
				{
					text: "Oh une annotation !",
					left: 20, top: 20,
					width: 45, height: 10,
					start: 5, end: 12
				}
			]);
			setVolume(0);
		</script>
	</body>

</html>