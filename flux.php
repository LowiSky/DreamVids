<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/flux.css">
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 0.9, maximum-scale = 1.0, user-scalable = no">
		<meta charset="utf-8">

		<title>DreamVids</title>
	</head>
	
	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div id="bottom">
				<aside class="aside-channels">
					<h3>Mes abonnements</h3>
					<ul class="limited" id="list-flux-channels">
						<a href="#" class="channels" data-new="12">
							<span style="background-image: url(http://lorempicsum.com/simpsons/255/200/2)" class="avatar"></span>
							<span class="name" href="#">Dreameur</span>
							<p class="subscribers"><b>12 835</b> Abonnés</p>
						</a>
						<a href="#" class="channels" data-new="7">
							<span style="background-image: url(http://lorempicsum.com/rio/255/200/2)" class="avatar"></span>
							<span class="name" href="#">YoloVids</span>
							<p class="subscribers"><b>11 208</b> Abonnés</p>
						</a>
						<a href="#" class="channels" data-new="3">
							<span style="background-image: url(http://lorempicsum.com/nemo/255/200/2)" class="avatar"></span>
							<span class="name" href="#">Kikoo 2000</span>
							<p class="subscribers"><b>9 725</b> Abonnés</p>
						</a>
						<a href="#" class="channels" data-new="1">
							<span style="background-image: url(http://lorempicsum.com/futurama/350/200/6)" class="avatar"></span>
							<span class="name" href="#">Futurameur</span>
							<p class="subscribers"><b>5 214</b> Abonnés</p>
						</a>
						<a href="#" class="channels">
							<span style="background-image: url(http://lorempicsum.com/up/255/200/2)" class="avatar"></span>
							<span class="name" href="#">UpUpUp</span>
							<p class="subscribers"><b>2 804</b> Abonnés</p>
						</a>
						<a href="#" class="channels">
							<span style="background-image: url(http://lorempicsum.com/simpsons/255/200/5)" class="avatar"></span>
							<span class="name" href="#">Homer Simpson</span>
							<p class="subscribers"><b>1 127</b> Abonnés</p>
						</a>
						<a href="#" class="channels">
							<span style="background-image: url(http://lorempicsum.com/nemo/350/200/1)" class="avatar"></span>
							<span class="name" href="#">Dori</span>
							<p class="subscribers"><b>546</b> Abonnés</p>
						</a>
						<a href="#" class="channels">
							<span style="background-image: url(http://lorempicsum.com/rio/255/200/2)" class="avatar"></span>
							<span class="name" href="#">YoloVids</span>
							<p class="subscribers"><b>11 208</b> Abonnés</p>
						</a>
						<a href="#" class="channels">
							<span style="background-image: url(http://lorempicsum.com/nemo/255/200/2)" class="avatar"></span>
							<span class="name" href="#">Kikoo 2000</span>
							<p class="subscribers"><b>9 725</b> Abonnés</p>
						</a>
						<a href="#" class="channels">
							<span style="background-image: url(http://lorempicsum.com/futurama/350/200/6)" class="avatar"></span>
							<span class="name" href="#">Futurameur</span>
							<p class="subscribers"><b>5 214</b> Abonnés</p>
						</a>

						<input type="checkbox" onclick="toogleFluxChannelVisibility(this.checked)"/>
						<span class="ch-more">Voir tout</span>
						<span class="ch-less">Voir moins</span>
					</ul>
				</aside>
	
				<aside class="aside-cards-list">
					<h3>Flux d'activité</h3>
					
					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/350/200/1">
							<div class="time">12:05</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Up !</h4></a>
							<div>
								<span class="view">12 530</span>
								<a class="channel" href="#">Papy</a>
							</div>
						</div>
					</div>

					<div class="card subscribe">
						<a href="#">
							<div class="avatar bgLoader" data-background="http://lorempicsum.com/simpsons/255/200/5"></div>
							<p><b>Chnok</b> s'est abonné à votre chaîne</p>
						</a>
						<span class="subscriber"><b>64 520</b> Abonnés</span>
						<i>Il y a 1 heure</i>
					</div>

					<div class="card plus">
						<a href="#">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/simpsons/627/300/4"></div>
							<p><b>Machin</b> à aimé votre vidéo "<b>Nyan Cat</b>"</p>
						</a>
						<i>Il y a 1 heure</i>
					</div>

					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/350/200/1">
							<div class="time">16:17</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Nemo</h4></a>
							<div>
								<span class="view">10 576</span>
								<a class="channel" href="#">Dori</a>
							</div>
						</div>
					</div>

					<div class="card comment">
						<a href="video">
							<p><b>Bidule</b> à commenté votre vidéo "<b>Nom Nom Nom</b>" :</p>
							<blockquote>
								J'aime trop cette vidéo parce que Nom Nom Nom Nom Nom Nom Nom Nom !
							</blockquote>
						</a>
						<i>Il y a 2 minutes</i>
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
	
				</aside>
			</div>
	
			<div id="accueil" style="display: none;">

				<h3>Quelques liens :</h3>

				<a href="video" style="color: blue">Page d'une vidéo</a><br />
				<a href="annotations" style="color: blue">Éditeur d'annotations</a><br />
				<a href="embed" style="color: blue">Embed d'une vidéo</a><br />
				<a href="login" style="color: blue">Connexion</a><br />
				<a href="register" style="color: blue">Inscription</a><br />
				<a href="404" style="color: blue">404</a><br />

			</div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>