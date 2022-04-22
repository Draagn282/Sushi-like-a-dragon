
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Finger+Paint&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   
    <title>ryu ga gotoku SUSHI</title>
  </head>
  <body>
    <div class="nav_main_div">
      <div class="nav_left_div">
        <img src="../minicrud/img/dragon tatoo.png">
        <div class="nav_search">
          <form class="nav_form" method="post" action="#">
            <input class="nav_bar" type="text" placeholder="     Search food.." name="search"> 
          </form>
          </div>
        </div>
      <div class="nav_right_div">
        <a href="#hoofdpagina"><button class="nav_butn">hoofdpagina</button></a>
        <a href="#menu"><button class="nav_butn">menu</button></a>
        <a href="#contact"><button class="nav_butn">contact</button></a>
        <a href="./login.php"><button class="nav_butn">log</button></a>
      </div>
    </div>
    <div class="nav_space" id="hoofdpagina"></div>
    <?php
  include ("./phpmethods/connect.php")
?>
    <div class="base_main_div">
      <div class="main_left_div">
        <div class="main_left_upper_div">
          <div class="upper_txt">
            <p class="up_top">Welcome to</p>
            <p class="up_down">LIKE A DRAGON SUSHI</p>
          </div>
        </div>
        <div class="main_left_downer_div">
          <div class="downer_txt">
            <p class="downer_p">
              Hier maken wij sushi. Duh ik bedoel waarom ga je dan naar deze
              site. om te kijken hoe mooi hij is... HAHAH ik ben geen art
              designer. Ik zie wel wat mooit is maar om dat zelf te maken ik wel
              veel gevraagt
            </p>
          </div>
        </div>
      </div>
      <div class="main_right_div"></div>
    </div>
    <div class="info_main_div">
      
    </div>
    <div class="menu_top_div">
        <p>Menu</p>
      </div>
    <div class="base_menu_div">
      <div class="menu_div" id="menu">
        
        <div class="menu_card_div">
          <div class="card_title" id="menu1">
            <p>Appetizers</p>
          </div>
        </div>
          <div class="card_items">
            <?php
            $category = 'Appetizers';
            
            if (!empty($_POST)){
              $search = '%'.$_POST['search'].'%';
              $sql = "SELECT * FROM menu WHERE Naam LIKE :search AND Type = :typ";
              $stm = $pdo->prepare($sql);
              $stm->bindParam(":search", $search);  
              $stm->bindParam(":typ", $category);  
             
            } else {
              $sql = "SELECT * FROM menu WHERE Type = :typ";
              $stm = $pdo->prepare($sql);
              $stm->bindParam(":typ", $category);  
          }
          $stm->execute(); 
          $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $i) { 
            echo '
            <div class="menu_item">
              
              <div class="item_picture"><img src="' . $i['Plaatje'] . '" /></div>
              '; echo '
              <div class="item_title"><p>' . $i['Naam'] . '</p></div>
              '; echo '
              <div class="item_description"><p>' . $i['Bescrhijving'] . '</p></div>
              '; echo '
              <div class="item_cost">
                <button class="item_add_butn">$' . $i['Prijs'] . '</button>
              </div>
            </div>
            '; 
            } 
            ?>
          </div>
        <div class="menu_card_div">
          <div class="card_title" id="menu2">
            <p>Main Course</p>
          </div>
            </div>
          <div class="card_items">

            <?php
            $category = 'Main Course';
            if (!empty($_POST)){
              $search = '%'.$_POST['search'].'%';
              $sql = "SELECT * FROM menu WHERE Naam LIKE :search AND Type = :typ";
              $stm = $pdo->prepare($sql);
              $stm->bindParam(":search", $search);  
              $stm->bindParam(":typ", $category);  
             
            } else {
              $sql = "SELECT * FROM menu WHERE Type = :typ";
              $stm = $pdo->prepare($sql);
              $stm->bindParam(":typ", $category);  
          }
          $stm->execute(); 
          $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($result as $i) { 
            echo '
            <div class="menu_item">
              
              <div class="item_picture"><img src="' . $i['Plaatje'] . '" /></div>
              '; echo '
              <div class="item_title"><p>' . $i['Naam'] . '</p></div>
              '; echo '
              <div class="item_description"><p>' . $i['Bescrhijving'] . '</p></div>
              '; echo '
              <div class="item_cost">
              <button class="item_add_butn">$' . $i['Prijs'] . '</button>
              </div>
            </div>
            '; 
            } 
  
            ?>
          </div>
      <div class="menu_card_div">
        <div class="card_title" id="menu3">
          <p>Dessert</p>
        </div>
        </div>
        <div class="card_items">

          <?php
          $category = 'Dessert';
          if (!empty($_POST)){
            $search = '%'.$_POST['search'].'%';
            $sql = "SELECT * FROM menu WHERE Naam LIKE :search AND Type = :typ";
            $stm = $pdo->prepare($sql);
            $stm->bindParam(":search", $search);  
            $stm->bindParam(":typ", $category);  
           
          } else {
            $sql = "SELECT * FROM menu WHERE Type = :typ";
            $stm = $pdo->prepare($sql);
            $stm->bindParam(":typ", $category);  
        }
        $stm->execute(); 
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
         
          foreach($result as $i) { 
          echo '
          <div class="menu_item">
            
            <div class="item_picture"><img src="' . $i['Plaatje'] . '" /></div>
            '; echo '
            <div class="item_title"><p>' . $i['Naam'] . '</p></div>
            '; echo '
            <div class="item_description"><p>' . $i['Bescrhijving'] . '</p></div>
            '; echo '
            <div class="item_cost">
            <button class="item_add_butn">$' . $i['Prijs'] . '</button>
            </div>
          </div>
          '; 
          } 
          ?>
        </div>
      </div>
    <div class="nav_space">
    </div>
    </div>
    <div class="contact_title_div" id="contact">
        <p>
          Contact
        </p>
      </div>
    <div class="base_contact_div">
      
      <div class="contact_div" >
        
          <div class="contact_form">
            <div class="contact_email">
              <form method="post" action="phpmethods/insert_score.php">
                  <p class="contact_t">
                    Email
                  </p>
                  <div class="email_ownmail">
                    <label for="email"></label>
                  <input type="email" id="email" name="email" placeholder="insert youre email here!">
                </div>
                </div>
                <div class="contact_message">
                  <p class="contact_t">
                    Message?
                  </p>
                  <textarea id="w3review" name="bericht" rows="6" cols="60" placeholder="want to send us a message"></textarea>
                </div>
                <div class="contact_revieuw">
                  <p class="contact_t">
                    Revieuw
                  </p>
                  <textarea id="w3review" name="review" rows="8" cols="60" placeholder="look at the fokkin cod revieuws and give us that number"></textarea>
                  <div class="revieuw_star">
                    <input type="range" id="volume" name="ster" min="1" max="5" step="1">
                    <p class="contact_t">
                      Ster
                    </p>
                        </div>
                      </div>
                  <input type="submit" name="rate" value="Submit ur soul">
                </div>
            </form>          
        </div>
    <div class="foot_main_div">
      <div class="footer_middle_div">
        <div class="footer_logo_div">
          <img src="./img/Nishiki_fish.png" />
          <img src="./img/dragon tatoo.png">
        </div>
        <div class="footer_list_div">
          <ul class="footer_list">
              <li><a href="#hoofdpagina">hoofdpagina</a></li>
              <hr class="footer_hr"/>
              <li><a href="#hoofdpagina">beschrijving</a></li>
            </ul>
            <ul class="footer_list">
              <li><a href="#menu">menu</a></li>
              <hr class="footer_hr" />
              <li><a href="#menu1">Appatizer</a></li>
              <li><a href="#menu2">Main Course</a></li>
              <li><a href="#menu3">Dessert</a></li>
            </ul>
            <ul class="footer_list">
              <li><a href="#contact">contact</a></li>
              <hr class="footer_hr" />
              <li><a href="#contact">email</a></li>
              <li><a href="#contact">revieuw</a></li>
            </ul>
        </div>
        
      </div>
    </div>
    <script src="./js/main.js"></script>
  </body>
</html>