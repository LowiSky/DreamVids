<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/video.css">
		<link rel="stylesheet" media="screen and (max-width: 600px)" href="css/m_video.css">

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
						<h1>Titre de la vidéo DreamVids</h1>
						<hr/>
					</div>
					<div id="video-top-channel">
						<img src="img/avatar_top_nav.png" alt="Image de la chaîne">
						<span id="hover_subscribe" data-vid="0"><i>S'abonner</i></span>
						<div id="video-top-channel-infos">
							<p id="video-top-pseudo">Pseudo</p>
							<hr>
							<p id="video-top-abonnes"><span class="strong">64 350</span> abonnés</p>
						</div>
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
					<div id="videoVues">20 220 vues</div>
					<hr />
					<div id="votes">
						<p id="votePlus" onclick="plus(1);">1752</p>
						<m id="voteMoins" onclick="moins(1);">3</m>
					</div>
					<hr/>
					<div id="description">
						<div id="innerDescription">
							Ceci est une description que j'ai écrite à la main très très très longtemps pour avoir quelque chose de plus réaliste et inutile et pour pouvoir commiter quelquechose vu que je n'avais aucune idée de quoi faire.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, laudantium, labore assumenda corporis ea dolor saepe nostrum quae molestias nobis illum accusamus magnam rerum! Velit, fuga, laborum qui ducimus nesciunt sequi necessitatibus dolores illo itaque tenetur ea cupiditate temporibus vero amet dolorem veniam possimus perferendis explicabo sed debitis delectus aliquam.
						</div>
					</div>
					<hr/>
					<div id="buttons">
						<img class="share" src="img/share.png"/>
						<img class="star" src="img/star.png"/>
						<img class="flag" src="img/flag.png"/>
					</div>
				</section>
			</section>




			<div id="bottom">
				<section id="comments">
					<section id="createComment">
						<div id="wysiwyg">
						    <span data-tag="bold" style="background-image: url(img/wysiwyg/1.png);"></span>
						    <span data-tag="italic" style="background-image: url(img/wysiwyg/2.png);"></span>
						    <span data-tag="underline" style="background-image: url(img/wysiwyg/3.png);"></span>
						    <span data-tag="strikeThrough" style="background-image: url(img/wysiwyg/4.png);"></span>
						    <span data-tag="createLink" style="background-image: url(img/wysiwyg/5.png);"></span>
						    <span class="button" style="background-image: url(img/wysiwyg/6.png);" onclick="ouvrir();"></span>
						    <span data-tag="undo" style="background-image: url(img/wysiwyg/7.png);"></span>
						    <div id="modal">
						        <img src="img/smiley/close.png" class="close" onclick="fermer();" width="30" height="30">
						        <span class="smiley" data-value="smile.png" data-tag="smiley"><img src="img/smiley/smile.png"></span>
						        <span class="smiley" data-value="blink.gif" data-tag="smiley"><img src="img/smiley/blink.gif"></span>
						        <span class="smiley" data-value="clin.png" data-tag="smiley"><img src="img/smiley/clin.png"></span>
						        <span class="smiley" data-value="heureux.png" data-tag="smiley"><img src="img/smiley/heureux.png"></span>
						        <span class="smiley" data-value="hihi.png" data-tag="smiley"><img src="img/smiley/hihi.png"></span>
						        <span class="smiley" data-value="huh.png" data-tag="smiley"><img src="img/smiley/huh.png"></span>
						        <span class="smiley" data-value="langue.png" data-tag="smiley"><img src="img/smiley/langue.png"></span>
						        <span class="smiley" data-value="pleure.png" data-tag="smiley"><img src="img/smiley/pleure.png"></span>
						        <span class="smiley" data-value="rire.gif" data-tag="smiley"><img src="img/smiley/rire.gif"></span>
						        <span class="smiley" data-value="siffle.png" data-tag="smiley"><img src="img/smiley/siffle.png"></span>
						        <span class="smiley" data-value="triste.png" data-tag="smiley"><img src="img/smiley/triste.png"></span>
						        <span class="smiley" data-value="unsure.gif" data-tag="smiley"><img src="img/smiley/unsure.gif"></span>
						    </div>
						</div>
						<div id="editor" contenteditable="true" tabindex="3" onkeyup="document.getElementById('text').value = this.innerHTML;"></div>
						<input type="hidden" name="text" id="text"/><br />
					</section>
					<div id="comments-title">
						<h3>Commentaires Populaires</h3>
						<hr/>
					</div>

					<div id="comments-best">
						<div class="comment">
							<div class="comment-head">
								<div class="user">
									<img src="img/avatar_user.png" alt="Avatar de Pseudo">
									<p>Pseudo</p>
								</div>
								<div class="date">
									<p>12 / 06 à 8h09</p>
								</div>
							</div>
							<div class="comment-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, ad, voluptate, molestias, necessitatibus ex a rerum laudantium aperiam sit recusandae perferendis quod deleniti minima consequatur dicta vitae praesentium inventore earum mollitia cumque iste totam nostrum fugit porro sed quibusdam velit! Officiis, temporibus doloribus consequuntur debitis assumenda quidem obcaecati adipisci quaerat.</p>
							</div>
							<div class="comment-notation">
								<ul>
									<li class="plus"><a href="#">+</a>141</li>
									<li class="moins"><a href="#">-</a>3</li>
								</ul>
							</div>
						</div>

						<div class="comment">
							<div class="comment-head">
								<div class="user">
									<img src="img/avatar_user.png" alt="Avatar de Pseudo">
									<p>Louis A.</p>
								</div>
								<div class="date">
									<p>12 / 06 à 8h09</p>
								</div>
							</div>
							<div class="comment-text">
								<p>Commentaire de félicitations à Dimitri notre inétgrateur adoré ! ;)</p>
							</div>
							<div class="comment-notation">
								<ul>
									<li class="plus"><a href="#">+</a>25</li>
									<li class="moins"><a href="#">-</a>1</li>
								</ul>
							</div>
						</div>
					</div>

				</section>


				<aside id="recomandations">
					<div id="recomandations-title">
						<h3>Recommandations</h3>
						<hr/>
					</div>


				</aside>
			</div>



		</div>


		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>

		<script src="js/vote.js"></script>
		<script src="js/wysiwyg.js"></script>
		<script src="js/player.js"></script>
		<script>
			/*setVideo([
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
			]);*/
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