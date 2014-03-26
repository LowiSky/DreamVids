<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<meta charset="utf-8">

		<title>Messages privés - DreamVids</title>
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

						<ul>
							<li id="messages-1" class="new">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Yolo</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-2">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/simpsons/255/200/5"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Swag</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-3" class="current">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">zfdz</a>, <a href="#">hth</a> et <a href="#">fefe</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-4">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Man</a>, <a href="#">Dim</a> et <a href="#">fefe</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-5" class="new">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Yolo</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-6">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/simpsons/255/200/5"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Swag</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-7">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Man</a>, <a href="#">Dim</a> et <a href="#">fefe</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>
							
							<li id="messages-8">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Man</a>, <a href="#">Dim</a> et <a href="#">fefe</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<li id="messages-9" class="new">
								<span class="avatar bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2"></span>
								<h3>Lorem Ipsum</h3>
								<span class="members"><a href="#">Yolo</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita placeat obcaecati magni aspernatur mollitia repudiandae quasi animi et molestias dolores voluptates! Odio fugiat sed aut ea quod.</p>
							</li>

							<button class="more">Plus de messages</button>
						</ul>
					</aside>

					<aside class="message">
						<div class="title">
							<h1>Lorem Ipsum</h1>
							<span class="members"><a href="#">zfdz</a>, <a href="#">hth</a> et <a href="#">fefe</a></span>
						</div>

						<ul class="content">
							<li class="left">
								<a class="infos" href="#">
									<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
									<p class="pseudo">Bidule</p>
								</a>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, laborum velit accusantium vitae officiis delectus possimus necessitatibus voluptate placeat dicta? Placeat, labore reprehenderit commodi doloremque eos minima neque id totam.
								</div>
							</li>

							<li class="right">
								<a class="infos" href="#">
									<span class="avatar bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2"></span>
									<p class="pseudo">Nemo</p>
								</a>
								<div>
									Lorem ipsum dolor sit amet.
								</div>
							</li>

							<li class="left">
								<a class="infos" href="#">
									<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
									<p class="pseudo">Bidule</p>
								</a>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, laborum velit accusantium vitae officiis delectus possimus necessitatibus voluptate placeat dicta? Placeat, labore reprehenderit commodi doloremque eos minima neque id totam.
								</div>
							</li>

							<li class="right">
								<a class="infos" href="#">
									<span class="avatar bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2"></span>
									<p class="pseudo">Nemo</p>
								</a>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, blanditiis, accusamus, in quod ipsa porro nihil unde numquam voluptas vero facere pariatur velit explicabo debitis hic vel qui. Error, facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, laborum velit accusantium vitae officiis delectus possimus necessitatibus voluptate placeat dicta? Placeat, labore reprehenderit commodi doloremque eos minima neque id totam.
								</div>
							</li>

							<li class="left">
								<a class="infos" href="#">
									<span class="avatar bgLoader" data-background="http://lorempicsum.com/up/255/200/2"></span>
									<p class="pseudo">Bidule</p>
								</a>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, laborum velit accusantium vitae officiis delectus possimus necessitatibus voluptate placeat dicta? Placeat, labore reprehenderit commodi doloremque eos minima neque id totam.
								</div>
							</li>

							<li class="right">
								<a class="infos" href="#">
									<span class="avatar bgLoader" data-background="http://lorempicsum.com/nemo/255/200/2"></span>
									<p class="pseudo">Nemo</p>
								</a>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, laborum velit accusantium vitae officiis delectus possimus necessitatibus voluptate placeat dicta? Placeat, labore reprehenderit commodi doloremque eos minima neque id totam.
								</div>
							</li>
						</ul>

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
	</body>
</html>