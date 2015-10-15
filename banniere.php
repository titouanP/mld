<!-- Banniere -->
<div id="recap_ban">
	<img src="res/logo_2.png"/>
	<span id='info_connexion'>connecté en tant que <strong><?php echo $_SESSION['prenom']." ".$_SESSION['nom']?></strong></span>
	<form id="form_deco" action="index.php" method="POST">
		<input class="button" type="submit" value="Deconnexion"/>
		<input type="hidden" name="action" value="deconnexion"/>
	</form>
</div>
