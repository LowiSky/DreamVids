<header>
	<div id="top-nav">
		<div id="inner-top-nav">
			<div id="inner-top-nav-left">
				<a href="index.php">
					<img src="img/icon_logo.png" alt="Logo DreamVids" id="top-nav-logo-icon" class="top-nav-icon-logo" />
					<img src="img/text_logo.png" alt="DreamVids" id="top-nav-logo-text" class="top-nav-text-logo" />
				</a>
			</div>
			<div id="inner-top-nav-right">

				<form action="post" action="#">
					<input type="text" id="top-nav-search-input" placeholder="Rechercher">
					<input type="submit" value="">
				</form>

				<div id="top-nav-user-information">
					<?php 
						if (rand(0, 1)) { ?>
							<a id="top-nav-user-information-button">
								<img src="img/avatar_top_nav.png" alt="Votre avatar" id="top-nav-user-information-button-img">
								<h4 id="top-nav-user-information-button-h4">Pseudo</h4>
								<img src="img/arrow_top_nav.png" alt="Voir vos informations" id="top-nav-user-arrow">
								<div id="top-nav-user-information-menu">
									<ul>
										<li><a href="#">Ma chaîne</a></li>
										<li><a href="#">Mon compte</a></li>
										<li><a href="#">Déconnection</a></li>
									</ul>
								</div>
							</a>
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
					<li><a href="#">Abonnements</a><div class="bottom-nav-underline"></div></li>
					<li><a href="#">Nouveautés</a><div class="bottom-nav-underline"></div></li>
					<li><a href="#">Découvrir</a><div class="bottom-nav-underline"></div></li>
				</ul>
			</nav>
			<a href="#" id="mobile-nav-icon"><img src="img/nav_mobile_icon.png" alt="Afficher le menu mobile"></a>
			<div id="bottom-nav-social">
				<ul>
					<li><a href="https://www.facebook.com/dreamvids" target="_blank"><img src="img/icon_facebook.png" alt="Facebook"></a></li>
					<li><a href="https://twitter.com/DreamVids_" target="_blank"><img src="img/icon_twitter.png" alt="Twitter"></a></li>
				</ul>
			</div>
		</div>
	</div>
</header>