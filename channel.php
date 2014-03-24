<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Nom de la chaîne - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="content wide channel">
				<div class="bgLoader" id="background-wide" data-background="img/backgrounds/003.jpg"></div>
	
				<section class="inner">
					<ul class="top">
						<li><b>12 864</b> Abonnés</li>
						<li><b>124</b> Vidéos</li>
						<li><b>76 261</b> +</li>
					</ul>

					<div class="left">
						<span class="bgLoader" data-background="http://lorempicsum.com/up/350/200/6"></span>
						<p>Russell</p>
						<button id="subscribe-button" data-text="S'abonner|Se désabonner">S'abonner</button>
					</div>

					<div class="right">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Magnam, unde quisquam hic nesciunt adipisci.
						Dolorum, molestias, quidem fuga facilis eligendi doloribus sit nulla illo ad !
					</div>
				</section>
			</div>

			<div class="content">
				<nav class="tabs">
					<ul>
  						<li class="current"><a href="channel">Vidéos</a></li>
  						<li><a href="channel/playlists">Playlists</a></li>
  						<li><a href="channel/nawak">N'importe nawak</a></li>
  					</ul>
				</nav>

				<aside class="full-cards-list">
					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/350/200/1">
							<div class="time">12:05</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Up !</h4></a>
							<div>
								<span class="view">12 530</span>
								<a class="channel" href="channel">Papy</a>
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
								<a class="channel" href="channel">Dori</a>
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
								<a class="channel" href="channel">Nemo</a>
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
								<a class="channel" href="channel">Hungry Bird</a>
							</div>
						</div>
					</div>

					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/350/200/1">
							<div class="time">12:05</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Up !</h4></a>
							<div>
								<span class="view">12 530</span>
								<a class="channel" href="channel">Papy</a>
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
								<a class="channel" href="channel">Dori</a>
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
								<a class="channel" href="channel">Home Simpson</a>
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
								<a class="channel" href="channel">Nemo</a>
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
								<a class="channel" href="channel">Hungry Bird</a>
							</div>
						</div>
					</div>

					<nav class="pagination">
						<ul>
							<a href="?page=2"><li>Précédent</li></a>
							<li class="current">3</li>
							<a href="?page=4"><li>4</li></a>
							...
							<a href="?page=11"><li>11</li></a>
							<a href="?page=12"><li>12</li></a>
							<a href="?page=4"><li>Suivant</li></a>
						</ul>
					</nav>
				</aside>
			</div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
		<script src="js/filePreview.js"></script>
	</body>
</html>