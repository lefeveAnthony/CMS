<?php 
include "../connection.php";
$q = $db->prepare('select c.id, c.title, c.description from categories c, users u where u.id = c.user_id');
$q->execute();
$data = $q->fetchAll(PDO::FETCH_ASSOC);
?>