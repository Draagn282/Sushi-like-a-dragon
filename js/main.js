$(document).ready(function () {
  $(window).scroll(function () {
    if (this.scrollY > 30) {
      $(".nav_main_div").addClass("nav_sticky");
      $(".nav_right_div a button").addClass("nav_butn_sticky");
    } else {
      $(".nav_main_div").removeClass("nav_sticky");
      $(".nav_right_div a button").removeClass("nav_butn_sticky");
    }

    if (this.scrollY < 500) {
      $(".scroll_up_butn").addClass("show");
    } else {
      $(".scroll_up_butn").removeClass("show");
    }
  });
});

const button_item = document.querySelector(".item_add_butn");

button_item.addEventListener("click", () => {
  console.log("ik ben geklikt");
  $(".menu_item").addClass("menu_one");
});
