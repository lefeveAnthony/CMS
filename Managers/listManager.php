<?php 
include "../connection.php";
$q = $db->prepare('select * from categories');
$q->execute();
$data = $q->fetchAll(PDO::FETCH_ASSOC);
?>