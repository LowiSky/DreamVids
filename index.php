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

			<div id="slider">
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
						
						<div class="video one">
							<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/rio/350/200/1)">
								<div class="video-time"><p>24:34</p></div>
								<a href="#"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
							</div>
							<div class="video-description">
								<a href="#"><h4>Lorem Ipsum dolorem</h4></a>
								<div class="video-bottom-description">
									<span class="video-view"><img src="img/view_icon_recomandation.png" alt="View of the video">12 530</span>
									<span class="video-channel"><a href="#">Nom de la chaine</a></span>
								</div>
							</div>
						</div>

						<div class="video two">
							<div class="video-thumbnail" style="background-image: url(http://lorempicsum.com/rio/627/300/4)">
								<div class="video-time"><p>12:53</p></div>
								<a href="#"><div class="video-overlay"><img src="img/play_icon_recomandations.png" alt="Regardez la vidéo 'Titre de la vidéo'"></div></a>
							</div>
							<div class="video-description">
								<a href="#"><h4>Rio !</h4></a>
								<div class="video-bottom-description">
									<span class="video-view"><img src="img/view_icon_recomandation.png" alt="View of the video">720</span>
									<span class="video-channel"><a href="#">Nom de la chaine</a></span>
								</div>
							</div>
						</div>
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

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
	</body>
</html>