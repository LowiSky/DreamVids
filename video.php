<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/video.css">

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
						<div id="video-top-channel">
							<img src="img/avatar_top_nav.png" alt="Image de la chaîne">
							<span id="hover_subscribe" data-vid="0"><i>S'abonner</i></span>
							<div id="video-top-channel-infos">
								<p id="video-top-pseudo">Pseudo</p>
								<hr>
								<p id="video-top-abonnes"><span class="strong">64 350</span> abonnés</p>
							</div>
						</div>
						<h1 title="Le titre d'une vidéo trop long sera coupé mais affiché dans un title. Bla Bla Bla Bla Bla Bla ">Le titre d'une vidéo trop long sera coupé mais affiché dans un title. Bla ...</h1>
					</div>
				</div>
				
				<div id="player">
					<video x-webkit-airplay="allow" autobuffer preload="auto" poster="http://puu.sh/6Tf6f.png">
						<source id="srcMp4" type="video/mp4"/>
						<source id="srcWebm" type="video/webm"/>
					</video>
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
						<img class="embed-icon" src="img/embed.png"/>
						<input class="embed" type="checkbox" onclick="document.getElementById('embed-input').select();"/>
						<input id="embed-input" value='<iframe width="640" height="360" src="//www.youtube.com/embed/EBZ1owgiSSQ" frameborder="0" allowfullscreen></iframe>' onclick="this.select();" type="text" spellcheck="false"/>
					</div>
				</section>
			</section>
	
	
			<div id="bottom">
				<section id="comments">
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
									<p>Lorem</p>
								</div>
								<div class="date">
									<p>18 / 06 à 15h09</p>
								</div>
							</div>
							<div class="comment-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
							<div class="comment-notation">
								<ul>
									<li class="plus"><a href="#">+</a>25</li>
									<li class="moins"><a href="#">-</a>0</li>
								</ul>
							</div>
						</div>
	
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
								<p>Laudantium aperiam sit recusandae perferendis quod deleniti minima consequatur dicta vitae praesentium inventore earum mollitia cumque iste totam nostrum fugit porro sed quibusdam velit! Officiis, temporibus doloribus consequuntur debitis assumenda quidem obcaecati adipisci quaerat.</p>
							</div>
							<div class="comment-notation">
								<ul>
									<li class="plus"><a href="#">+</a>854</li>
									<li class="moins"><a href="#">-</a>24</li>
								</ul>
							</div>
						</div>
	
					</div>
	
				</section>
	
	
				<aside id="recomandations">
					<h3>Recommandations</h3>
					
					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/simpsons/627/200/3">
							<div class="time">1:27:24</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Les Simpson, le film</h4></a>
							<div>
								<span class="view">401</span>
								<a class="channel" href="#">Home Simpson</a>
							</div>
						</div>
					</div>

					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/627/300/4">
							<div class="time">3:27</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Nemo [Bande Annonce]</h4></a>
							<div>
								<span class="view">32 546</span>
								<a class="channel" href="#">Nemo</a>
							</div>
						</div>
					</div>

					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/rio/350/200/1">
							<div class="time">2:34:53</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Rio</h4></a>
							<div>
								<span class="view">1 752</span>
								<a class="channel" href="#">Hungry Bird</a>
							</div>
						</div>
					</div>

					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/627/300/4">
							<div class="time">2:43</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>La Haut ! Bande Annonce</h4></a>
							<div>
								<span class="view">513</span>
								<a class="channel" href="#">Pixar</a>
							</div>
						</div>
					</div>
				</aside>
			</div>
	
			<?php include 'footer.php'; ?>

		</div>


		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>

		<script src="js/vote.js"></script>
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
			setVolume(1);
		</script>
	</body>

</html>