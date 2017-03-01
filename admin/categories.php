<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../images/icon.png">
	<title>Gestions des catégories</title>
</head>
<body>
	<?php include "categoriesNav.php"; ?>
	<div id="categoriesPage">
		<?php include "../Managers/categoriesList.php" ?>
		<div id="categoriesList">
			<h2>Liste des catégories</h2>
			<?php 
				foreach ($data as $key) {
					echo '<h3>'.$key['title'].' - '. $key['description'].'</h3>';
				}
			?>	
		</div>
 
	</div>
</body>
</html>