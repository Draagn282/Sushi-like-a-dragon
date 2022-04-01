<?php

include('../phpmethods/connect.php');

if(isset($_POST['delete'])){
    $stmt = $pdo->prepare("DELETE FROM menu WHERE ID = :ID");
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->execute();

    header("Location: ../backroom.php");
    exit();
    }
    ?>