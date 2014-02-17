<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/register.css">
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 0.9, maximum-scale = 1.0, user-scalable = no">
		<meta cHarset="utf-8">

		<title>Inscription - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>
	
			<section id="register">
				<h1>Inscription <a href="login">Connexion</a></h1>
				<form method="post" action="">
					<label for="email">Adresse email :</label>
					<input type="text" name="email" id="email" placeholder="Adresse email"/><br />
					<label for="username">Pseudo :</label>
					<input type="text" name="username" id="username" placeholder="Pseudo"/><br />
					
					<label for="pass">Mot de passe :</label>
					<input type="password" name="pass" id="pass" placeholder="Mot de passe"/><br />
					<label for="passConfirm">Confirmez le mot de passe :</label>
					<input type="password" name="passConfirm" id="passConfirm" placeholder="Confirmation du mot de passe"/><br />
					
					<input type="checkbox" id="CGU" name="CGU"/><label for="CGU">J'accepte les conditions d'utilisations</label><br />
					
					<input type="submit" name="submit" value="S'inscrire"/>
				</form>
			</section>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
	</body>
</html>