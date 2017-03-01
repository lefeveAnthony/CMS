<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../images/icon.png">
	<title>Gestions des articles</title>
</head>
<body>
	<?php include "articlesNav.php"; ?>
	<div id="articlesPage">
		<?php include "../Managers/articlesList.php" ?>

	</div>
</body>
</html>