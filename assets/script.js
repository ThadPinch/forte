$(document).ready(function() {

  $(".hamburgler").on("click", function() {
    this.classList.toggle('active');
  })

  $(".hamburger").click(function(){
    // $('.mobile-nav').slideToggle();
    $('.mobile-nav').animate({width: 'toggle'}, 400);
  })



});
