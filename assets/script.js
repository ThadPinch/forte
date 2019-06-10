$(document).ready(function() {

  $(".hamburgler").on("click", function() {
    this.classList.toggle('active');
  })

  $(".hamburgler").click(function(){
    $('.mobile-nav').slideToggle();
  })



});
