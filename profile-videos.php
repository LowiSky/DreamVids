<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Mes vidéos - DreamVids</title>
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
  							<li class="current"><a href="profile-videos">Mes vidéos</a></li>
  							<li><a href="messages">Messagerie</a></li>
  						</ul>
					</nav>

					<aside class="long-cards-list">
						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/350/200/1">
								<div class="time">12:05</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Up !</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<div><span class="view">12 530</span><span class="plus">34</span><span class="moins">2</span></div>
							</div>
						</div>

						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/350/200/1">
								<div class="time">16:17</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Nemo</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<b class="visibility" data-visibility="1">Non répertoriées</b>
								<div><span class="view">10 576</span><span class="plus">34</span><span class="moins">2</span></div>
							</div>
						</div>

						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/627/300/4">
								<div class="time">3:27</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Nemo [Bande Annonce]</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<b class="visibility" data-visibility="2">Privée</b>
								<div><span class="view">32 546</span><span class="plus">14</span><span class="moins">84</span></div>
							</div>
						</div>

						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/rio/350/200/1">
								<div class="time">2:34:53</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Rio</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<div><span class="view">1 752</span><span class="plus">7</span><span class="moins">0</span></div>
							</div>
						</div>

						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/up/255/200/2">
								<div class="time">12:05</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Up !</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<div><span class="view">12 530</span><span class="plus">128</span><span class="moins">9</span></div>
							</div>
						</div>
					
						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2">
								<div class="time">16:17</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Nemo</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<b class="visibility" data-visibility="1">Non répertoriées</b>
								<div><span class="view">10 576</span><span class="plus">254</span><span class="moins">57</span></div>
							</div>
						</div>
					
						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/simpsons/627/200/3">
								<div class="time">1:27:24</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Les Simpson, le film</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<b class="visibility" data-visibility="1">Non répertoriées</b>
								<div><span class="view">401</span><span class="plus">71</span><span class="moins">9</span></div>
							</div>
						</div>
					
						<div class="card video long">
							<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/nemo/627/300/4">
								<div class="time">3:27</div>
								<a href="video" class="overlay"></a>
							</div>
							<div class="description">
								<a href="video"><h4>Nemo [Bande Annonce]</h4></a>
								<a href="video-settings"><button>Paramètres</button></a>
								<b class="visibility" data-visibility="2">Privée</b>
								<div><span class="view">32 546</span><span class="plus">54</span><span class="moins">0</span></div>
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