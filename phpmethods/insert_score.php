<?php

    include('../phpmethods/connect.php');

    if (isset($_POST['insert']))

    $Email = $_POST['email'];
    $Bericht = $_POST['bericht'];
    $Review = $_POST['review'];
    $Ster = $_POST['ster'];


    $sql = "INSERT INTO score (Email, Bericht, Review, Ster) VALUES (?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$Email, $Bericht, $Review, $Ster]);


    header("Location: ../backroom.php");
    exit();

?>


