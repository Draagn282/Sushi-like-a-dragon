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
    </div>
    <div class="back_nav_space"></div>
    <div class="back_add_div">
      <form class="add_form" method="post" action="phpmethods/insert_item.php">
        <label class="add_lable" for="name">name</label>
        <input
          class="add_input"
          type="text"
          id="name"
          name="name"
          placeholder="Enter name"
        />
        <label class="add_lable" for="image">image</label>
        <input
          class="add_input"
          type="text"
          id="image"
          name="image"
          placeholder="insert image"
        />
        <label class="add_lable" for="txt">Description</label>
        <textarea
          class="add_textarea"
          id="txt"
          name="txt"
          placeholder="Enter description"
        ></textarea>
        <label class="add_lable" for="price">price</label>
        <input
          class="add_input"
          type="text"
          id="price"
          name="price"
          placeholder="Enter price"
        />
        <label class="add_lable" for="type">type</label>
        <input
          class="add_input"
          type="text"
          id="type"
          name="type"
          placeholder="Enter type"
        />
        <input type="submit" value="Submit" />
      </form>
    </div>
    <div class="back_list">
    
  </div>
  </body>
</html>
