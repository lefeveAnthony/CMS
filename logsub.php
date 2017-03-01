<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/icon.png">
	<title>Inscription & Connexion</title>
</head>
<body>
	<?php 
	include "nav.php";
	?>
	<div id="logsubPage">
		<div id="subBox">
			<h2>Inscription</h2>
			<form action="Managers/subManager.php" method="POST">
				<input type="text" name="name" placeholder="Nom" required><br>
				<input type="text" name="firstname" placeholder="Prénom" required><br>
				<input type="email" name="email" placeholder="exemple@exemple.com" required><br>
				<input type="password" name="password" placeholder="Mot de passe" required><br>
				<input type="password" name="password2" placeholder="A nouveau" required><br>
				<input type="submit" name="subscribe" value="S'inscrire">
			</form>
		</div>

		<div id="logBox">
			<h2>Connexion</h2>
			<form action="Managers/logManager.php" method="POST">
				<input type="email" name="email" placeholder="exemple@exemple.com" required><br>
				<input type="password" name="password" placeholder="Mot de passe" required><br>
				<input type="submit" name="log" value="Se connecter">
			</form>
		</div>
	</div>
</body>
</html>