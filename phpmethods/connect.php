<?php

$host = 'localhost';
$db = 'LAD';
$user = 'Daan';
$password = 'Erniepis@19LAD';

$con = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($con, $user, $password);
} catch (PDOException $e) {
	echo $e->getMessage();
}
    
?>
