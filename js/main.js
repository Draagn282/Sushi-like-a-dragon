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
