<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="images/icon.png">
	<title>Administration</title>
</head>
<body>
	<div id="adminPage">

		<?php include "adminNav.php";?>

		<div id="infos">
			<?php include "../Managers/profilManager.php" ?>
			<div id="profil">
				<h2>Mon Profil</h2>
				<form action="../Managers/accountManager.php" method="post">
					<input type="text" name="name" value="<?php echo $data['name']  ?>" required><br>
					<input type="text" name="firstname" value="<?php echo $data['firstname'] ?>" required><br>
					<input type="email" name="email" value="<?php echo $data['email'] ?>" required ><br>
					<input type="password" name="password" placeholder="Ancien mot de passe" required><br>
					<input type="password" name="password2" placeholder="Nouveau mot de passe" required><br>
					<input type="submit" name="updateAccount" value="Mettre à jour">
				</form>
			</div>
		</div>
	</div>
</body>
</html>