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

if (isset ($_POST['submit'])){
    $Naam = $_POST['name'];
    $Plaatje = $_POST['image'];
    $Bescrhijving = $_POST['txt'];
    $Prijs = $_POST['price'];
    $Type = $_POST['type']; 
}



$sql = "INSERT INTO menu (Naam, Plaatje, Bescrhijving, Prijs, Type ) VALUES (?,?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$Naam, $Plaatje, $Bescrhijving, $Prijs, $Type]);
?>