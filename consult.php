<html>
	<head>
		<title>
			Consultation
		</title>
		<meta charset='utf8'>
		<link rel="stylesheet" type="text/css" href="style/main.css">
	</head>

	<body>
		<?php include('banniere.php');?>
		<div id='content'>
			<h3 class='entete'>Consultation des frais</h3>

				<!-- Affichage frais forfaitaires -->

				<h3>Frais forfaitaires</h3>
				<table class='tableau'>
				<tr><th>Libelle</th><th>Quantité</th><th>Montant</th></tr>
				<?php

					foreach( $fichesForfait as $fiche ){
						echo "<tr><td>".$fiche['libelle']."</td><td>".$fiche['quantite']."</td><td>".$fiche['montant']."</td></tr>";
					}

					echo "</table>";

					// Choix des frais a supprimer
					echo "<form action='form_modSupp_forfait.php' method='POST'>";
					echo "<select name=lst_supp>";
					foreach( $fichesForfait as $fiche ){
						echo "<option value='".$mois.":".$fiche['idFraisForfait']."'>".$fiche['libelle']."</option>";
					}
				?>

				</select>
				<input type='submit' name='sb_sup' value='Supprimer'>
				<input type='submit' name='sb_mod' value='Modifier'>
				</form>




				 <!-- Affichage frais hors forfait -->

				<h3>Frais hors forfait</h3>
				<table class='tableau'>
				<tr><th>Libelle</th><th>Montant</th></tr>
				<?php
					foreach( $fichesHorsForfait as $fiche ){
						echo "<tr><td>".$fiche['libelle']."</td><td>".$fiche['montant']."</td></tr>";
					}
					echo "</table>";

					echo "<form action='form_modSupp_hors_forfait.php' method='POST'>";
					echo "<select name=lst_supp>";
					foreach( $fichesHorsForfait as $fiche ){
						echo "<option value='".$mois.":".$fiche['libelle'].":".$fiche['montant']."'>".$fiche['libelle']."</option>";
						$ligne = mysqli_fetch_assoc($data);
					}
				?>
				</select>
				<input type='submit' name='sb_sup' value='Supprimer'>
				<input type='submit' name='sb_mod' value='Modifier'>
				</form>

			<form action="accueil.php">
				<input type='submit'  value='Accueil' class="button"/>
			</form>
		</div>
	</body>
</html>
