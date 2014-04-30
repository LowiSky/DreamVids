<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Mes chaînes - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="content">

				<section class="profile">
					<h1 class="title">Espace membre</h1>

					<nav class="tabs four">
						<ul>
  							<li><a href="profile">Mon compte</a></li>
  							<li><a href="profile-pass">Mot de passe</a></li>
  							<li class="current"><a href="channels">Mes chaînes</a></li>
  							<li><a href="profile-videos">Mes vidéos</a></li>
  						</ul>
					</nav>

					<div class="moderating-commands">
						<a href="create-channel"><button class="blue big" name="create-channel">Créer une nouvelle chaîne</button></a>		
					</div>

					<aside class="long-cards-list">
						<div class="card channel long">
							<a href="channel-settings">
								<div class="avatar bgLoader" data-background="http://lorempicsum.com/futurama/255/200/2"></div>
							</a>

							<div class="description">
								<a href="channel"><b>Chnok</b></a>
								<a href="channel-settings"><button>Paramètres</button></a>
								<b class="principal">Chaîne principale</b>
								<span class="subscriber"><b>64 520</b> Abonnés</span>
							</div>
						</div>
					</aside>
				</section>

			</div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
		<script src="js/filePreview.js"></script>
	</body>
</html>