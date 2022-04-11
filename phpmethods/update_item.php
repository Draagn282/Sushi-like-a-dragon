<?php

        include('connect.php');

    $id = (int)$_GET['id'];

    $sql = "SELECT * FROM menu WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(":id", $_GET['id']);
    $stmt -> execute();
    $i = $stmt -> fetch();

?>
