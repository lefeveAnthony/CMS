<?php 
include "../connection.php";
$q = $db->prepare('select * from categories where id = :id');
$q->execute(array(':id' => $_GET['id']));
$data = $q->fetch(PDO::FETCH_ASSOC);
?>