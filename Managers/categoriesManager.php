<?php 
session_start();
if(isset($_POST['add'])){
	include "../connection.php";
	$title = htmlspecialchars($_POST['title']);
	$description = htmlspecialchars($_POST['description']);
	$q = $db->prepare('select count(*) from categories where title = :title');
	$q->execute(array(':title' => $title));
	$data = $q->fetchColumn();

	if($data != 0){
		echo "Cette catégorie existe déjà !";
		header('Location: ../admin/newCategory.php');
	}
	else{
		$q = $db->prepare('insert into categories values(NULL, :title, :description, :user_id)');
		$q->execute(array(':title' => $title,
							':description' => $description,
							':user_id' => $_SESSION['id_user']
					));
		header('Location: ../admin/categories.php');
	}
}

if(isset($_POST['modif'])){
	include "../connection.php";
	$title = htmlspecialchars($_POST['title']);
	$description = htmlspecialchars($_POST['description']);
	$q = $db->prepare('update categories set title = :title, description = :description where id = :id');
	$q->execute(array(':id' => $_SESSION['id_category'],
						':title' => $title,
						':description' => $description
				));
	header('Location: ../admin/categories.php');
}


?>