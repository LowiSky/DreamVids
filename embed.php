<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">

		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body class="embeded">
		<div id="player">
			<video x-webkit-airplay="allow" autobuffer preload="auto" poster="http://puu.sh/6Tf6f.png"></video>
			<div id="annotationsElement"></div>
			<span id="repeat">
				<span class="icon"></span>
			</span>
			<span id="qualitySelection" class="show"></span>
			<span id="waitForPlay"></span>
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
				<a href="http://dreamvids.fr/&t0dnj1" target="_blank" id="DreamVidsIconEmbed"></a>
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

		<script>var embeded = true;</script>
		<script src="js/ajax.js"></script>
		<script src="js/player.js"></script>
		<script src="js/main.js"></script>
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
			setVolume(1);
		</script>
	</body>

</html>
