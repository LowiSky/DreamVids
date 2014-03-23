<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Parametres de la vidéo "Nyan Cat" - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="content">

				<section class="video-settings">
					<h1 class="title">Parametres de la vidéo "Nyan Cat"</h1>

					<form class="form" method="post" action="">
						<label for="video-title">
							<i>Titre de la vidéo :</i>
							<input value="Nyan Cat" id="video-title" type="text" name="video-title" placeholder="Titre" spellcheck="false"/>
						</label>
						
						<label for="video-description">
							<i>Description :</i>
							<textarea name="video-description" id="video-description" rows="4" placeholder="Description">Nyan Nyan Nyan Nyan Nyan</textarea>
						</label>
						
						<label for="video-tags">
							<i>Tags :</i><input value="nyan, cat" id="video-tags" type="text" name="video-tags" placeholder="Tags" spellcheck="false"/>
						</label>

						<label for="backgroundChannel">
							<img class="preview" src="http://dreamvids.fr/uploads/Plasma/h8WjOG.jpg">
							Miniature :
						</label>
						<input type="file" data-text="Choisir un fichier" name="backgroundChannel" accept="image/*"><br />

						<label for="video-visibility">
							<i>Visibilité :</i>
							<select name="video-visibility" id="video-visibility">
								<option value="2">Publique</option>
								<option value="1">Non listée</option>
								<option value="0">Privée</option>
							</select>
						</label>
						
						<input type="checkbox" checked id="canDL" name="canDL"/><label for="canDL">Autoriser le téléchargement</label><br />

						<input type="submit" name="submit" value="Enregistrer">
					</form>
				</section>

			</div>

			<div class="center"><script type="text/javascript" src="//ad.pandad.eu/get-script/52e2e034a12777692532abd1/468x60"></script></div>
			
			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>