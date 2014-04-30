<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Créer une nouvelle chaîne - DreamVids</title>
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
  							<li><a href="channels">Mes chaînes</a></li>
  							<li><a href="profile-videos">Mes vidéos</a></li>
  						</ul>
					</nav>

					<form class="form" method="post" action="">
						<label for="name">Nom :</label>
						<input value="" type="text" name="name" placeholder="Nom"><br />

						<label for="avatar">
							<img class="preview filePreview" data-input="avatarInputFile" id="preview-avatarInputFile">
							<i>Avatar :</i>
							<input type="file" data-text="Choisir un fichier" data-preview="preview-avatarInputFile" id="avatarInputFile" name="avatarInputFile" name="avatar" accept="image/*"><br />
						</label>

						<label for="backgroundChannel">
							<img class="preview filePreview" data-input="backgroundChannel" id="preview-backgroundChannel">
							<i>Fond de ma chaine :</i>
							<input type="file" data-text="Choisir un fichier" data-preview="preview-backgroundChannel" name="backgroundChannel" id="backgroundChannel" accept="image/*"><br />
						</label>

						<label for="username">Description :</label>
						<textarea type="text" name="description" placeholder="Description de ma chaine..."></textarea>

						<input type="submit" name="submit" value="Créer la chaîne">
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