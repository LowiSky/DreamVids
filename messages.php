<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>MP - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="content">

				<section class="messages">
					<h1 class="title">Messages privés <button>Nouveau</button></h1>

					<aside class="list">
						<select name="video-visibility" id="video-visibility">
							<option value="1">Tous les messages</option>
							<option value="2">Messages non lus</option>
							<option value="3">Messages de mes abonnements</option>
							<option value="4">Mes messages favoris</option>
						</select>

						<ul id="messages-list">
							Chargement en cours...
						</ul>
					</aside>

					<aside class="message">
						<div class="title" id="discution-infos">
							<h1>Veuillez selectionner une conversation</h1>
						</div>

						<ul class="content" id="messages-discution"></ul>

						<div class="answer">
							<textarea name="answer-text" id="answer-text" cols="50" rows="5" placeholder="Votre réponse..."></textarea>

							<div class="attachment">
								
							</div>

							<button class="submit">Répondre</button>
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
		<script src="js/messages.js"></script>
	</body>
</html>