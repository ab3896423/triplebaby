
$(document).ready(function(){

$("#menu-button").click(function() {
  if($(this).hasClass("menu-show")) {
    $(this).removeClass("menu-show");
    $(this).animate({ left: "+=300" }, 500);
  }
  else {
    $(this).addClass("menu-show");
    $(this).animate({ left: "-=300" }, 500);
  }
});

};