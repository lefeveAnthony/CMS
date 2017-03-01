<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../images/icon.png">
	<title>Ajout d'une catégorie</title>
</head>
<body>
	<div id="newCategoryPage">
		<?php include "categoriesNav.php" ?>
		<div id="newCatgoryBox">
			<h2>Ajout d'une catégorie</h2>
			<form action="../Managers/categoriesManager.php" method="post">
				<input type="text" name="title" placeholder="Titre" required><br>
				<textarea name="description" id="descCate" cols="50" rows="2"></textarea><br>
				<input type="submit" name="add" value="Ajouter">
			</form>
			
		</div>

	</div>
</body>
</html>