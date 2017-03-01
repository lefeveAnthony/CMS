<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../images/icon.png">
	<script src="../js/ckeditor/ckeditor.js"></script>
	<title>Gestion des Articles</title>
</head>
<body>
	<div id="newArticlesPage">
		<?php include "articlesNav.php" ?>
		<div id="articleBox">
			<?php include "../Managers/listManager.php" ?>
			<h2>Ajout d'un Article</h2>
			<form action="../Managers/articlesManager.php" method="post">
				<input type="text" name="title" placeholder="Titre" required>
				<select name="categoriesList" id="">
					<option value="0">Choisissez une catégorie</option>
					<?php 
					foreach ($data as $key) {
						echo '<option value='.$key['id'].'>'.$key['title'].'</option>';
					} 
					?>
				</select><br>
				<textarea name="editor" id="editor" cols="30" rows="10"></textarea><br>
				<script>
                	CKEDITOR.replace( 'editor' );
           		</script>
				<input type="submit" name="add" value="Ajouter">

			</form>

		</div>

	</div>
</body>
</html>