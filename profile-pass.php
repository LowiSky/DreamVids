<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Mot de passe - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="content">

				<section class="profile">
					<h1>Espace membre</h1>

					<nav class="tabs four">
						<ul>
  							<li><a href="profile">Mon compte</a></li>
  							<li class="current"><a href="profile-pass">Mot de passe</a></li>
  							<li><a href="profile-videos">Mes vidéos</a></li>
  							<li><a href="messages">Messagerie</a></li>
  						</ul>
					</nav>

					<form method="post" action="">
						<label for="currentPass">Mot de passe actuel :</label>
						<input type="password" name="currentPass"><br />

						<label for="newPass">Nouveau mot de passe :</label>
						<input type="password" name="newPass"><br />

						<label for="newPassConfirm">Confirmation du nouveau mot de passe :</label>
						<input type="password" name="newPassConfirm"><br />

						<input type="submit" name="submit" value="Enregistrer">
					</form>
				</section>

			</div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>