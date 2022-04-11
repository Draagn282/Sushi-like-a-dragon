<?php

    include('../phpmethods/connect.php');

    if (isset($_POST['insert']))

    $Naam = $_POST['name'];
    $Plaatje = $_POST['image'];
    $Bescrhijving = $_POST['txt'];
    $Prijs = $_POST['price'];
    $Type = $_POST['type']; 



    $sql = "INSERT INTO menu (Naam, Plaatje, Bescrhijving, Prijs, Type ) VALUES (?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$Naam, $Plaatje, $Bescrhijving, $Prijs, $Type]);


    header("Location: ../backroom.php");
    exit();

?>


