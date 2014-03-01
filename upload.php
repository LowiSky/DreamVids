<!DOCTYPE html>
<html>
	<!-- // // HEAD \\ \\-->
	<head>
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="icon" href="img/favicon.png" />

		<meta name="viewport" content="width = device-width, initial-scale = 0.9, maximum-scale = 1.0, user-scalable = no">
		<meta cHarset="utf-8">

		<title>Upload</title>
	</head>

	<!-- // // BODY \\ \\-->
	<body>
		<div id="page">

			<?php include 'header.php'; ?>

			<div id="upload-large-modal">
				<div id="backgroundLoader" class="bgLoader" data-background="img/backgrounds/006.jpg"></div>

				<section id="uploader">
					<span id="upload-illustration">
						<span class="cloud">
							<span id="arrowUpload"></span>
						</span>
					</span>
				</section>
			</div>

			<?php include 'footer.php'; ?>
			
		</div>

		<script src="js/ajax.js"></script>
		<script src="js/interactions.js"></script>
		<script src="js/upload.js"></script>
		<script src="js/bgLoader.js"></script>
	</body>
</html>