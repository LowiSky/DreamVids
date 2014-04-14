<header>
	<div id="top-nav">
		<div id="inner-top-nav">
			<div id="inner-top-nav-left">
				<a href="index.php">
					<img src="img/icon_logo.png" alt="Logo DreamVids" id="top-nav-logo-icon" class="top-nav-icon-logo" />
					<img src="img/text_logo.png" alt="DreamVids" id="top-nav-logo-text" class="top-nav-text-logo" />
				</a>

				<a class="bug-report" href="bugs">Un bug ?</a>
			</div>
			<div id="inner-top-nav-right">

				<form method="get" action="search">
					<input type="text" id="top-nav-search-input" name="q" placeholder="Rechercher">
					<input type="submit" value="">
				</form>

				<div id="top-nav-user-information">
					<?php 
						if ($connected = rand(0, 4)) { ?>
							<span id="top-nav-user-information-button">
								<img src="http://lorempicsum.com/simpsons/255/200/5" alt="Votre avatar" id="top-nav-user-information-button-img">
								<h4 id="top-nav-user-information-button-h4">Pseudo</h4>
								<img src="img/arrow_top_nav.png" alt="Voir vos informations" id="top-nav-user-arrow">
								<div id="top-nav-user-information-menu">
									<ul>
										<a href="channel">Ma chaîne</a>
										<a href="profile">Mon compte</a>
										<a href="messages">Mes messages</a>
										<a href="#">Déconnexion</a>
									</ul>
								</div>
							</span>
					<?php }
						else { ?>
							<div id="top-connection">
								<a href="login">Connexion</a>
								<p>/</p>
								<a href="register">Inscription</a>
							</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div id="bottom-nav">
		<div id="inner-bottom-nav">
			<nav>
				<ul>
					<?php $page = preg_replace('/.+\/(.+)\.php/i', '${1}', $_SERVER["PHP_SELF"]);?>
					<li <?php if ($page == 'index') echo 'class="current"';?>><a href="index.php">Accueil</a></li>
					<li <?php if ($page == 'discover') echo 'class="current"';?>><a href="discover">Découvrir</a></li>
					<?php if ($connected) { ?>
						<li <?php if ($page == 'flux') echo 'class="current"';?> data-new="12"><a href="flux">Flux d'activité</a></li>
						<li <?php if ($page == 'messages') echo 'class="current"';?> data-new="3"><a href="messages">Messagerie</a></li>
						<li <?php if ($page == 'upload') echo 'class="current"';?>><a href="upload">Uploader</a></li>
					<?php } ?>
				</ul>
			</nav>
			<span id="mobile-nav-icon"><p></p></span>
			<div id="bottom-nav-social">
				<ul>
					<li><a href="https://www.facebook.com/dreamvids" target="_blank"><img src="img/icon_facebook.png" alt="Facebook"></a></li>
					<li><a href="https://twitter.com/DreamVids_" target="_blank"><img src="img/icon_twitter.png" alt="Twitter"></a></li>
				</ul>
			</div>
		</div>
	</div>
</header>