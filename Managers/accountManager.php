<?php 
	include "../connection.php";
	if(isset($_POST['updateAccount'])){
		session_start();
		$name = htmlspecialchars($_POST['name']);
		$firstname = htmlspecialchars($_POST['firstname']);
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		$password2 = sha1($_POST['password2']);

		$q = $db->prepare('select * from users where id = :id');
		$q->execute(array(':id' => $_SESSION['id_user']));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		if($data['password'] != $password){
			echo "L'ancien mot de passe n'existe pas !";
			header('Location: ../admin/admin.php?level='.$_SESSION['level']);
		}
		else{
			$q = $db->prepare('update users set name = :name, firstname = :firstname, email = :email, password = :password where id = :id');
			$q->execute(array(':id' => $_SESSION['id_user'],
								':name' => $name,
								':firstname' => $firstname,
								':email' => $email,
								':password' => $password2
						));
			header('Location: ../admin/admin.php?level='.$data['level']);
		}
	}

?>
