$(document).ready(function () {
  $(window).scroll(function () {
    if (this.scrollY > 30) {
      $(".header_main_div").addClass("header_main_div_sticky");
      $(".header_butn").addClass("header_butn_sticky");
    } else {
      $(".header_main_div").removeClass("header_main_div_sticky");
      $(".header_butn").removeClass("header_butn_sticky");
    }

    if (this.scrollY < 500) {
      $(".scroll_up_butn").addClass("show");
    } else {
      $(".scroll_up_butn").removeClass("show");
    }
  });
});
