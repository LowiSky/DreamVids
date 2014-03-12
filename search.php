<?php 
	if (!isset($_GET['q'])) {
		$_GET['q'] = 'Nyan Cat';
	}
 ?>

<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Recherche "<?php echo htmlspecialchars($_GET['q']); ?>" - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="content">
				<aside class="full-cards-list">
					<h3>Recherche "<b><?php echo htmlspecialchars($_GET['q']); ?></b>"</h3>
					
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
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/simpsons/350/200/6">
							<div class="time">2:34:53</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Simpsons</h4></a>
							<div>
								<span class="view">1 752</span>
								<a class="channel" href="channel">Bart</a>
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
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/futurama/350/200/1">
							<div class="time">6:27</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Futurama</h4></a>
							<div>
								<span class="view">32 546</span>
								<a class="channel" href="channel">blop</a>
							</div>
						</div>
					</div>
	
					<div class="card video">
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/rio/255/200/2">
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
						<div class="thumbnail bgLoader" data-background="http://lorempicsum.com/futurama/627/300/4">
							<div class="time">6:00</div>
							<a href="video" class="overlay"></a>
						</div>
						<div class="description">
							<a href="video"><h4>Futurama (encore :P)</h4></a>
							<div>
								<span class="view">546</span>
								<a class="channel" href="channel">blop - 2</a>
							</div>
						</div>
					</div>
				</aside>
			</div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>