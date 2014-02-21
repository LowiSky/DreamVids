<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/index.css">
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 0.9, maximum-scale = 1.0, user-scalable = no">
		<meta cHarset="utf-8">

		<title>Titre de la vidéo - Nom de la chaîne - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div id="homeLargeModal">
				<section>
					<div id="boxPages" class="home">
						<div id="pageHome">
							<img src="img/icon_logo.png" alt="Logo DreamVids" class="logo"/>

							<h3>Bienvenue sur DreamVids</h3>
							<p class="inner-text">
								Let us dream ! - Nouvelle plateforme ouverte, gratuite et conviviale de partage de contenu vidéo.
							</p>

							<button onclick="document.getElementById('boxPages').className = 'register';">S'inscrire</button>
							<a onclick="document.getElementById('boxPages').className = 'login';">Se connecter</a>
						</div>
				
						<div id="pageRegister">
							<h3>S'inscrire</h3>

							<form method="post" action="">
								<label for="email">Adresse email :</label>
								<input type="email" name="email" id="email" placeholder="Adresse email"/><br />
								<label for="username">Pseudo :</label>
								<input type="text" name="username" id="username" placeholder="Pseudo"/><br />
								
								<label for="pass">Mot de passe :</label>
								<input type="password" name="pass" id="pass" placeholder="Mot de passe"/><br />
								<label for="passConfirm">Confirmez le mot de passe :</label>
								<input type="password" name="passConfirm" id="passConfirm" placeholder="Confirmation du mot de passe"/><br />
								
								<input type="checkbox" id="CGU" name="CGU"/><label for="CGU">J'accepte les conditions d'utilisations</label><br />
								
								<input type="submit" name="submit" value="S'inscrire"/>
							</form>

							<a onclick="document.getElementById('boxPages').className = 'login';">Se connecter</a>
						</div>

						<div id="pageLogin">
							<h3>Se connecter</h3>

							<form method="post" action="">
								<label for="username">Pseudo :</label>
								<input type="text" name="username" id="username" placeholder="Pseudo"/><br />
								
								<label for="pass">Mot de passe :</label>
								<input type="password" name="pass" id="pass" placeholder="Mot de passe"/><br />
								
								<input type="submit" name="submit" value="Se connecter"/>
							</form>

							<a onclick="document.getElementById('boxPages').className = 'register';">S'inscrire</a>
						</div>
					</div>

					<div id="boxBest">
						<h3>Meilleures vidéos :</h3>
						<ul id="sliderList" class="slide1">
							<li onclick="slideTo(1);"></li>
							<li onclick="slideTo(2);"></li>
							<li onclick="slideTo(3);"></li>
						</ul>

						<section id="slider" class="slide1">

							<div id="slide">
								<div class="video">
									<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/rio/350/200/1)">
										<a href="video"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
									</div>
									<div class="video-description"><a href="video"><h4>Lorem Ipsum dolorem</h4></a></div>
								</div>
		
								<div class="video">
									<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/rio/627/300/4)">
										<a href="video"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
									</div>
									<div class="video-description"><a href="video"><h4>Rio !</h4></a></div>
								</div>
							</div>

							<div id="slide">
								<div class="video">
									<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/futurama/350/200/1)">
										<a href="video"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
									</div>
									<div class="video-description"><a href="video"><h4>Lorem Ipsum dolorem</h4></a></div>
								</div>
		
								<div class="video">
									<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/futurama/627/300/4)">
										<a href="video"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
									</div>
									<div class="video-description"><a href="video"><h4>Futurama !</h4></a></div>
								</div>
							</div>

							<div id="slide">
								<div class="video">
									<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/simpsons/350/200/1)">
										<a href="video"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
									</div>
									<div class="video-description"><a href="video"><h4>Lorem Ipsum dolorem</h4></a></div>
								</div>
		
								<div class="video">
									<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/simpsons/627/300/4)">
										<a href="video"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
									</div>
									<div class="video-description"><a href="video"><h4>The Simpsons !</h4></a></div>
								</div>
							</div>

						</section>
					</div>
				</section>
			</div>
	
			<div id="accueil">

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

		<script src="js/slider.js"></script>
		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
	</body>
</html>