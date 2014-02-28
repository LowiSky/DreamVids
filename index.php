<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/index.css">
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 0.9, maximum-scale = 1.0, user-scalable = no">
		<meta charset="utf-8">

		<title>DreamVids</title>
	</head>
	
	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div id="home-large-modal">
				<div id="backgroundLoader" class="bgLoader" data-background="img/backgrounds/002.jpg"></div>
				<section>
					<?php if (!$connected) { ?>
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
					<?php } else { ?>
						<div id="boxPages" class="channel">
							<div id="pageChannel">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/simpsons/255/200/5"></span>
								<h3>Ma chaine</h3>
								<p class="inner-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, cumque minus maiores debitis placeat !
								</p>
							</div>
						</div>

					<?php } ?>

					<div id="boxBest">
						<?php if (!$connected) { ?>
							<h3>Meilleures vidéos :</h3>
							<ul id="sliderList" class="slide1">
								<li onclick="slideTo(1);"></li>
								<li onclick="slideTo(2);"></li>
								<li onclick="slideTo(3);"></li>
							</ul>
							
							<section id="slider" class="slide1">
							
								<div id="slide">
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/rio/350/200/1"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Lorem Ipsum dolorem</h4></a>
										</div>
									</div>
							
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/rio/627/300/4"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Rio !</h4></a>
										</div>
									</div>
								</div>
							
								<div id="slide">
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/futurama/350/200/1"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Lorem Ipsum dolorem</h4></a>
										</div>
									</div>
							
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/futurama/627/300/4"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Futurama !</h4></a>
										</div>
									</div>
								</div>
							
								<div id="slide">
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/simpsons/350/200/1"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Lorem Ipsum dolorem</h4></a>
										</div>
									</div>
							
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/simpsons/627/300/4"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>The Simpsons !</h4></a>
										</div>
									</div>
								</div>
							</section>
						<?php } else { ?>
							<h3>Vidéos à découvrir :</h3>
							<ul id="sliderList" class="slide1">
								<li onclick="slideTo(1);"></li>
								<li onclick="slideTo(2);"></li>
								<li onclick="slideTo(3);"></li>
							</ul>
							
							<section id="slider" class="slide1">
							
								<div id="slide">
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/up/350/200/1"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Up !</h4></a>
										</div>
									</div>
							
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/nemo/350/200/1"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Nemo</h4></a>
										</div>
									</div>
								</div>
							
								<div id="slide">
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/simpsons/627/200/3"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Les Simpson, le film</h4></a>
										</div>
									</div>
							
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/nemo/627/300/4"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Nemo [Bande Annonce]</h4></a>
										</div>
									</div>
								</div>
							
								<div id="slide">
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/rio/350/200/1"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>Rio</h4></a>
										</div>
									</div>
							
									<div class="card video">
										<div class="thumbnail bgLoader" style="height: 75%;" data-background="http://lorempicsum.com/up/627/300/4"><a href="video" class="overlay"></a></div>
										<div class="description">
											<a href="video"><h4>La Haut ! Bande Annonce</h4></a>
										</div>
									</div>
								</div>
							</section>
						<?php } ?>
					</div>
				</section>
			</div>

			<div id="bottom">
				<?php if (!$connected) { ?>
					<aside class="aside-channels">
						<h3>Meilleures chaînes</h3>
						<ul class="medal">
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/up/255/200/2)" class="avatar"></span>
								<span class="name" href="#">UpUpUp</span>
								<p class="subscribers"><b>12 835</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/simpsons/255/200/2)" class="avatar"></span>
								<span class="name" href="#">Dreameur</span>
								<p class="subscribers"><b>11 208</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/nemo/350/200/1)" class="avatar"></span>
								<span class="name" href="#">Dori</span>
								<p class="subscribers"><b>5 214</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/rio/255/200/2)" class="avatar"></span>
								<span class="name" href="#">YoloVids</span>
								<p class="subscribers"><b>9 725</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/nemo/255/200/2)" class="avatar"></span>
								<span class="name" href="#">Kikoo 2000</span>
								<p class="subscribers"><b>2 804</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/futurama/350/200/6)" class="avatar"></span>
								<span class="name" href="#">Futurameur</span>
								<p class="subscribers"><b>1 127</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://lorempicsum.com/simpsons/255/200/5)" class="avatar"></span>
								<span class="name" href="#">Homer Simpson</span>
								<p class="subscribers"><b>546</b> Abonnés</p>
							</a>
							<a href="#" class="channels">
								<span style="background-image: url(http://static-2.nexusmods.com/15/mods/110/images/50622-1-1391287636.jpeg)" class="avatar"></span>
								<p class="name" href="#">Wow ! Much doge</p>
								<p class="subscribers"><b>248</b> Abonnés</p>
							</a>
						</ul>
					</aside>
				<?php } else { ?>
					<aside class="aside-channels">
						<h3>Mes abonnements</h3>
						<ul class="limited">
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

							<input type="checkbox" onclick="p=this.parentNode;p.className=this.checked?p.className+' all':p.className.replace(' all','');"/>
							<span class="ch-more">Voir tout</span>
							<span class="ch-less">Voir moins</span>
						</ul>
					</aside>
				<?php } ?>
	
				<?php if (!$connected) { ?>
					<aside class="aside-cards-list">
						<h3>Vidéos à découvrir</h3>
						
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
				<?php } else { ?>
					<aside class="aside-cards-list">
						<h3>Vidéos de mes abonnements</h3>
						
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

						<a href="flux" class="big-button">Voir mon flux d'acivité</a>
					</aside>

					<aside class="aside-cards-list">
						<h3>Meilleures vidéos</h3>
						
						<div class="card video">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/350/200/1">
								<div class="time">12:05</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Nemo</h4></a>
								<div>
									<span class="view">12 530</span>
									<a class="channel" href="#">Papy</a>
								</div>
							</div>
						</div>

						<div class="card video">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/627/300/4">
								<div class="time">16:17</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>La Haut ! Bande Annonce</h4></a>
								<div>
									<span class="view">10 576</span>
									<a class="channel" href="#">Dori</a>
								</div>
							</div>
						</div>
					</aside>
				<?php } ?>
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

		<script src="js/slider.js"></script>
		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>