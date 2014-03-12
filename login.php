<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Connection - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>
	
			<section id="login">
				<h1>Connexion <a href="register">Inscription</a></h1>
				<form method="post" action="">
					<label for="username">Pseudo :</label>
					<input type="text" name="username" id="username" placeholder="Pseudo"/><br />
					
					<label for="pass">Mot de passe :</label>
					<input type="password" name="pass" id="pass" placeholder="Mot de passe"/><br />
					
					<input type="checkbox" id="remember" name="remember"/><label for="remember">Se souvenir de moi</label><br />
					
					<input type="submit" name="submit" value="Se connecter"/>
				</form>
			</section>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>