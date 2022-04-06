<?php

$id = $_GET['ID'];

$sql = $con->query("SELECT * FROM menu WHERE id=?");
$sql->execute([$id]);
$data = $sql->fetch()

[$Naam, $Plaatje, $Bescrhijving, $Prijs, $Type]

?>