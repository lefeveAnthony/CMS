<?php 
session_start();
if (isset($_POST['log'])){
	$email = $_POST['email'];
	$password = sha1($_POST['password']);

	include "../connection.php";
	$q = $db->prepare('select * from users where email = :email AND password = :password');
	$q->execute(array(':email' => $email,
						':password' => $password));
	$data = $q->fetch(PDO::FETCH_ASSOC);

	if($data['email'] != $email && $data['password'] != $password){
		echo "Erreurs dans vos identifiants !";

	}
	else{
		$_SESSION['user'] = $data['name'].' '.$data['firstname'];
		$_SESSION['email'] = $email;
		header('Location: ../admin/admin.php?level='.$data['level']);
	}


}
?>
