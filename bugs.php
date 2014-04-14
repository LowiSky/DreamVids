<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Reporter un bug - DreamVids</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div class="bug-large-modal">
				<div class="bgLoader" id="backgroundLoader" data-background="img/backgrounds/004.jpg"></div>

				<form method="post" action="" class="form">
					<h1 class="title">Reporter un bug</h1>
					
					<label for="bug-description">
						Description du bug :
						<textarea name="bug-description" id="bug-description" rows="4" placeholder="Description"></textarea>
					</label>
					
					<label for="bug-url">
						Adresse du bug :<input id="bug-url" type="url" name="bug-url" placeholder="Url" spellcheck="false"/>
					</label>
					
					<input type="submit" id="up-submit" disabled="disabled" name="submit" value="Valider">
				</form>
			</div>

			<div class="bug-content content">
				<h1 class="title">Bugs reportés :</h1>

				<ul class="bugs">
					
					<li>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, labore animi ratione! Facilis, voluptatibus, nesciunt, voluptate totam tempore quia culpa reprehenderit harum reiciendis optio consequuntur odit possimus perferendis saepe illo!</div>
						
						<a href="http://img15.hostingpics.net/pics/365235reportsbug.png" class="link">img15.hostingpics.net/pics/365235reportsbug.png</a>

						<span class="infos">
							Par <a href="channel">Machin</a> le 05/05/2014
							<i class="state" data-state="0">En attente</i>
						</span>
					</li>

					<li>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, labore animi ratione! Facilis, voluptatibus, nesciunt, voluptate totam tempore quia culpa reprehenderit harum reiciendis optio consequuntur odit possimus perferendis saepe illo!</div>
						
						<a href="http://img15.hostingpics.net/pics/365235reportsbug.png" class="link">img15.hostingpics.net/pics/365235reportsbug.png</a>

						<span class="infos">
							Par <a href="channel">Bidule</a> le 05/05/2014
							<i class="state" data-state="1">Pris en considération</i>
						</span>
					</li>

					<li>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, labore animi ratione! Facilis, voluptatibus, nesciunt, voluptate totam tempore quia culpa reprehenderit harum reiciendis optio consequuntur odit possimus perferendis saepe illo!</div>
						
						<a href="http://img15.hostingpics.net/pics/365235reportsbug.png" class="link">img15.hostingpics.net/pics/365235reportsbug.png</a>

						<span class="infos">
							Par <a href="channel">Machin</a> le 05/05/2014
							<i class="state" data-state="0">En attente</i>
						</span>
					</li>

					<li>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, labore animi ratione! Facilis, voluptatibus, nesciunt, voluptate totam tempore quia culpa reprehenderit harum reiciendis optio consequuntur odit possimus perferendis saepe illo!</div>
						
						<a href="http://img15.hostingpics.net/pics/365235reportsbug.png" class="link">img15.hostingpics.net/pics/365235reportsbug.png</a>

						<span class="infos">
							Par <a href="channel">Machin</a> le 05/05/2014
							<i class="state" data-state="2">En cours de correction</i>
						</span>
					</li>

				</ul>
			</div>

			<div class="center"><img src="http://dummyimage.com/468x60/f0f0f0/242424&text=ad" width="468" height="60"></div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/bgLoader.js"></script>
		<script src="js/filePreview.js"></script>
	</body>
</html>