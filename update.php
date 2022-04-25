<?php

  include ("./phpmethods/update_item.php");

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
      <a href="./index.php"><button class="back_butn">bac to index</button></a>
      <a href="./backroom.php"
        ><button class="back_butn">to backroom</button></a
      >
    </div>
    <div class="back_nav_space"></div>
    <div class="update_div">
      <form class="add_form" method="post" action="phpmethods/update_data.php">
        <label class="add_lable" for="name">Name</label>
        <input
          class="add_input"
          type="text"
          id="name"
          name="name"
          value="<?php echo $i['Naam'];?> "
          placeholder="Enter name"
        />
        <label class="add_lable" for="image">Image</label>
        <input
          class="add_input"
          type="text"
          id="image"
          name="image"
          placeholder="insert image"
          value="<?php echo $i['Plaatje'];?>"
        />
        <label class="add_lable" for="txt">Description</label>
        <textarea
          class="add_textarea"
          id="txt"
          name="txt"
          placeholder="Enter description"
        >
<?php echo $i['Bescrhijving'];?></textarea
        >
        <label class="add_lable" for="price">Price</label>
        <input
          class="add_input"
          type="text"
          id="price"
          name="price"
          placeholder="Enter price"
          value="<?php echo $i['Prijs'];?>"
        />
        <input
          type="text"
          hidden
          value="<?php echo $i['ID'];?>"
          readonly
          name="id"
        />
        <label class="add_lable" for="type">Type</label>
        <select class="add_select" id="type" name="type">
          <option value="<?php echo $i['Type'];?>">
            <?php echo $i['Type'];?>
          </option>
          <option value="Appetizers">Appetizers</option>
          <option value="Main Course">Main Course</option>
          <option value="Dessert">Dessert</option>
        </select>
        <input type="submit" value="Submit" name="update"/>
      </form>
    </div>
  </body>
</html>
