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
		<?php include "../Managers/categoriesListModif.php" ?>
		<div id="categoriesList">
			<?php
				if(!isset($_GET['id'])){
					foreach ($data as $key) {
						echo '<h3><a href="modifCategory.php?id='.$key['id'].'">'.$key['title'].' - '. $key['description'].'</a></h3>';
					}
				}
				else{
					include "../Managers/categoriesListId.php";
					$_SESSION['id_category'] = $_GET['id'];
					?>
					<div id="newCategoryPage">
						<div id="newCatgoryBox">
							<h2>Modification d'une catégorie</h2>
							<form action="../Managers/categoriesManager.php" method="post">
								<input type="text" name="title" value="<?php echo $data['title'] ?>" required><br>
								<textarea name="description" id="descCate" cols="50" rows="2"><?php echo $data['description'] ?></textarea><br>
								<input type="submit" name="modif" value="Mettre à jour">
							</form>
			
						</div>

					</div>
				<?php
				} 
			?>	
		</div>
 
	</div>
</body>
</html>