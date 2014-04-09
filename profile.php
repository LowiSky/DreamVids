<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Profile - DreamVids</title>
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
  							<li class="current"><a href="profile">Mon compte</a></li>
  							<li><a href="profile-channel">Ma chaine</a></li>
  							<li><a href="profile-pass">Mot de passe</a></li>
  							<li><a href="profile-videos">Mes vidéos</a></li>
  						</ul>
					</nav>

					<form class="form" method="post" action="">
						<label for="email">Adresse email :</label>
						<input value="yolo@swag.fr" type="text" name="email" placeholder="Adresse email"><br />

						<label for="username">Pseudo :</label>
						<input value="Blou" type="text" name="username" placeholder="Pseudo"><br />

						<label for="avatar">
							<img class="preview filePreview" data-input="avatarInputFile" id="preview-avatarInputFile" src="https://fr.gravatar.com/userimage/57826048/c82ae77d5ac9635e8ace8071f81941b9.png?size=100">
							<i>Avatar :</i>
							<input type="file" data-text="Choisir un fichier" data-preview="preview-avatarInputFile" id="avatarInputFile" name="avatarInputFile" name="avatar" accept="image/*"><br />
						</label>

						<label for="language">Langue :</label>
						<select name="language">
							<option value="fr">Français</option>
							<option value="en">Anglais</option>
						</select>

						<input type="submit" name="submit" value="Enregistrer">
					</form>
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