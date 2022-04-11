<?php

  include ("./phpmethods/session.php");
  include ("./phpmethods/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <div class="back_nav">
      <a href="./phpmethods/logout.php"><button class="back_butn">bac to index</button></a>
      </div>
    <div class="back_nav_space"></div>

    <div class="back_add_div">
      <form class="add_form" method="post" action="phpmethods/insert_item.php">
        <label class="add_lable" for="name">Name</label>
        <input
          class="add_input"
          type="text"
          id="name"
          name="name"
          placeholder="Enter name"
        />
        <label class="add_lable" for="image">Image</label>
        <input
          class="add_input"
          type="text"
          id="image"
          name="image"
          placeholder="insert image"
          value="./img/gerechten/"
        />
        <label class="add_lable" for="txt">Description</label>
        <textarea
          class="add_textarea"
          id="txt"
          name="txt"
          placeholder="Enter description"
        ></textarea>
        <label class="add_lable" for="price">Price</label>
        <input
          class="add_input"
          type="text"
          id="price"
          name="price"
          placeholder="Enter price"
        />
        <label class="add_lable" for="type">Type</label>
        <select class="add_select" id="type" name="type">
          <option value="Appetizers">Appetizers</option>
          <option value="Main Course">Main Course</option>
          <option value="Dessert">Dessert</option>
        </select>
        <input type="submit" value="Submit" name="insert"/>
      </form>
    </div>
    <div class="back_list">
      <div class="menu_card_div">
        <div class="card_title" id="menu1">
          <p>Appetizers</p>
        </div>
      </div>

      <div class="card_items">
        <?php
      $category = 'Appetizers';
      $stm = $pdo->prepare("SELECT * FROM menu WHERE Type = :typ");
        $stm->bindParam(":typ", $category, PDO::PARAM_STR); $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC); var_dump($result);
        foreach($result as $i) { echo '
        <div class="menu_item">
          <div class="item_picture"><img src="' . $i['Plaatje'] . '" /></div>
          '; echo '
          <div class="item_title"><p>' . $i['Naam'] . '</p></div>
          '; echo '
          <div class="item_description"><p>' . $i['Bescrhijving'] . '</p></div>
          '; echo '
          <div class="item_cost">
            <form action="phpmethods/verwijder.php" method="post">
              <input
                class="inviz"
                type="text"
                name="ID"
                value="' . $i['ID'] . ' "
              />
              <button type="submit" name="delete" class="item_delete_butn">
                Delete
              </button>
            </form>
            <button class="item_add_butn">$' . $i['Prijs'] . '</button>
            <a href="update.php?id=' . $i['ID'] . '">
              <button class="item_update_butn">Update</button>
            </a>
          </div>
        </div>
        '; } ?>
      </div>

      <div class="card_title" id="menu2">
        <p>Main Course</p>
      </div>
      <div class="card_items">
        <?php
          $category = 'Main Course';
          $stm = $pdo->prepare("SELECT * FROM menu WHERE Type = :typ");
        $stm->bindParam(":typ", $category, PDO::PARAM_STR); $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC); var_dump($result);
        foreach($result as $i) { echo '
          <div class="menu_item">
          <div class="item_picture"><img src="' . $i['Plaatje'] . '" /></div>
          '; echo '
          <div class="item_title"><p>' . $i['Naam'] . '</p></div>
          '; echo '
          <div class="item_description"><p>' . $i['Bescrhijving'] . '</p></div>
          '; echo '
          <div class="item_cost">
            <form action="phpmethods/verwijder.php" method="post">
              <input
                class="inviz"
                type="text"
                name="ID"
                value="' . $i['ID'] . ' "
              />
              <button type="submit" name="delete" class="item_delete_butn">
                Delete
              </button>
            </form>
            <button class="item_add_butn">$' . $i['Prijs'] . '</button>
            <a href="update.php?id=' . $i['ID'] . '">
              <button class="item_update_butn">Update</button>
            </a>
          </div>
        </div>
        '; } ?>
      </div>
      <div class="card_title" id="menu3">
        <p>Dessert</p>
      </div>
      <div class="card_items">
        <?php
          $category = 'Dessert';
          $stm = $pdo->prepare("SELECT * FROM menu WHERE Type = :typ");
        $stm->bindParam(":typ", $category, PDO::PARAM_STR); $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC); var_dump($result);
        foreach($result as $i) { echo '
          <div class="menu_item">
          <div class="item_picture"><img src="' . $i['Plaatje'] . '" /></div>
          '; echo '
          <div class="item_title"><p>' . $i['Naam'] . '</p></div>
          '; echo '
          <div class="item_description"><p>' . $i['Bescrhijving'] . '</p></div>
          '; echo '
          <div class="item_cost">
            <form action="phpmethods/verwijder.php" method="post">
              <input
                class="inviz"
                type="text"
                name="ID"
                value="' . $i['ID'] . ' "
              />
              <button type="submit" name="delete" class="item_delete_butn">
                Delete
              </button>
            </form>
            <button class="item_add_butn">$' . $i['Prijs'] . '</button>
            <a href="update.php?id=' . $i['ID'] . '">
              <button class="item_update_butn">Update</button>
            </a>
          </div>
        </div>
        '; } ?>
      </div>
    </div>
  </body>
</html>
