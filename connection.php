<?php 

$localhost = "localhost";
$dbname = "cms";
$db_username = "root";
$db_password = "root";

$db = new PDO ('mysql:host='.$localhost.';dbname='.$dbname, $db_username, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 ?>