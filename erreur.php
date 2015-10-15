<html>

	<head>
		<link rel='stylesheet' type='text/css' href='style/main.css'>
		<title>
			Accueil
		</title>
	</head>

	<body>

		<?php include('banniere.php')?>
		<div id="content">
			<p class='entete'>Erreur</p>
			<h1>Erreur</h1>
			<h2>
				<?php
					echo $msg;
				?>
				<br>
				<a href="index.php">Retour a l'accueil</a>
			</h2>

		</div>

	</body>
</html>
