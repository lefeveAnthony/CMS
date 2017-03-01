<?php 
include "../connection.php";
$q = $db->prepare('select * from users where email = :email');
$q->execute(array(':email' => $_SESSION['email']));
$data = $q->fetch(PDO::FETCH_ASSOC);
$_SESSION['id_user'] = $data['id'];
$_SESSION['level'] = $data['level'];



?>