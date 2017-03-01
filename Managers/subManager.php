<?php 
session_start();
if (isset($_POST['subscribe'])){
	$name = htmlspecialchars($_POST['name']);
	$firstname = htmlspecialchars($_POST['firstname']);
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);

	if($password != $password2){
		echo "Les mots de passe ne correspoondent pas";
	}
	else{
		include "../connection.php";
		$q = $db->prepare('select count(*) from users where email = :email');
		$q->execute(array(':email' => $email));
		$data = $q->fetchColumn();
		if($data !=0){
			echo "Ce nom de compte existe déjà !";
		}
		else{
			$q = $db->prepare('insert into users values(NULL, :name, :firstname, :email, :password, 0)');
			$q->execute(array(':name' => $name,
								':firstname' => $firstname,
								':email' => $email,
								':password' => $password
						));
			$_SESSION['user'] = $name.' '.$firstname;
			$_SESSION['email'] = $email;
			header('Location: ../admin/admin.php?level=0');
		}
	}

}
?>
