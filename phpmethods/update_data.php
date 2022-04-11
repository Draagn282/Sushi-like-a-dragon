<?php

    include('../phpmethods/connect.php');

    if (isset ($_POST['update'])){

        $Naam = $_POST['name'];
        $Plaatje = $_POST['image'];
        $Bescrhijving = $_POST['txt'];
        $Prijs = $_POST['price'];
        $Type = $_POST['type'];
        $id = $_POST['id']; 



        $sql = "UPDATE menu SET Naam=?, Plaatje=?, Bescrhijving=?, Prijs=?, Type=? WHERE ID=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$Naam, $Plaatje, $Bescrhijving, $Prijs, $Type, $id]);
    }

       

    
    header("Location: ../backroom.php");
    exit();

?>


