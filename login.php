<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
  </head>
  <body>
    <div class="login_div">
      <div class="loggin_main">
        <div class="loggin_txt">
          <p>Log in</p>
        </div>
        <div class="loggin_form">
          <form class="loggin_log" action="phpmethods/login.php" method="post"> 
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="fname"><br>
            <label for="pass">Wachtwoord:</label><br>
            <input type="password" id="pass" name="Lname"><br>
            <input type="submit" name="login" value="Login">
          </form>  
      </div>
    </div>

    <?php
        if (isset($_POST["sub"])){
        echo $_POST["fname"], $_POST["Lname"], $_POST["age"]; 
        }
    ?>
  </body>
</html>
