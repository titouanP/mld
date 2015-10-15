<html>

	<head>
		<link rel="stylesheet" type="text/css" href="style/main.css" />
		<link rel="stylesheet" type="text/css" href="style/connexion.css" />
	</head>

	<body>

		<div id="co_global">
			<img id="co_logo" src="res/logo.png"/>
			<div id="co_connexion">
				<form action="#" method="POST">
					<img id="co_icon_user"src="res/user.png"/><input id="co_txt_ident" class="text_field" type="text" name="txt_id" placeholder="Identifiant"></br>
					<img id="co_icon_pwd"src="res/pwd.png"/><input class="text_field" type="password" name="txt_pwd" placeholder="Mot de passe"></br>
					<input value="Connexion" id="co_button" class="button" type="submit" name="b_connexion"/>
					<input type="hidden" name="action" value="connexion"/>
				</form>
				<a href="http://192.170.3.107">Gestion des incidents</a>
			</div>
		</div>

	</body>

</html>
