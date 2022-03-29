<?php

$host = 'localhost';
$db = 'LAD';
$user = 'Daan';
$password = 'Erniepis@19LAD';

$con = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($con, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
    
?>

<h1> kaas </h1>