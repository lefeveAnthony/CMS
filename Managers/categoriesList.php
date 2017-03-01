<?php 
include "../connection.php";
$q = $db->prepare('select * from categories order by id desc');
$q->execute();
$data = $q->fetchAll(PDO::FETCH_ASSOC);
?>