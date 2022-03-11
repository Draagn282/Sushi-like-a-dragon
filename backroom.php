<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
        if (isset($_POST["sub"])){
        echo $_POST["fname"], $_POST["Lname"], $_POST["age"]; 
        }
    ?>
    
  </body>
</html>
