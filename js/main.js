//Менюшка
$("header .left .hamburger").click(function(){
   $("header .left nav").addClass("active");
});
$("header .left .cross").click(function(){
   $("header .left nav").removeClass("active");
});
//Для закриття менюшки
$(document).click(function(event) {
   if (($(event.target).closest(".hamburger").length)) return;
   $('nav').removeClass('active');
   event.stopPropagation();
});

//Для телефону
$("header .right").click(function(){
   $("header .right .phone").toggleClass("active");
});
//Для закриття телефону по клыку на будь що
$(document).click(function(event) {
   if (($(event.target).closest(".right").length)) return;
   $('header .right .phone').removeClass('active');
   event.stopPropagation();
});

//slider
$(window).load(function() {
   $('.flexslider').flexslider({
      animation: "slide"
   });
});
