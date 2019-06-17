$(document).ready(function() {

  $(".hamburgler").on("click", function() {
    this.classList.toggle('active');
  })

  $(".hamburger").click(function() {
    // $('.mobile-nav').slideToggle();
    $('.mobile-nav').animate({
      width: 'toggle'
    }, 400);
  })

  //
  //
  //
  // Solutions scripts
  //
  //


  $(".goforte").click(function() {
    $(".solutions-text div").each(function() {
      $(this).hide();
    })
    $('.goforte-text').fadeIn("slow", function() {});
  })

  $(".fulfillments").click(function() {
    $(".solutions-text div").each(function() {
      $(this).hide();
    })
    $('.fulfillments-text').fadeIn("slow", function() {});
  })

  $(".vin-pictures").click(function() {
    $(".solutions-text div").each(function() {
      $(this).hide();
    })
    $('.vin-pictures-text').fadeIn("slow", function() {});
  })

  $(".services").click(function() {
    $(".solutions-text div").each(function() {
      $(this).hide();
    })
    $('.services-text').fadeIn("slow", function() {});
  })

  $(".parts-labor").click(function() {
    $(".solutions-text div").each(function() {
      $(this).hide();
    })
    $('.parts-labor-text').fadeIn("slow", function() {});
  })


  //
  //
  // Portal scripts
  //
  //

  $('.portal-1').hover(function() {
    $('.login p').html('Parts And Labor');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-2').hover(function() {
    $('.login p').html('Policy Print');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-3').hover(function() {
    $('.login p').html('Goforte Online');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-4').hover(function() {
    $('.login p').html('Forte Numbers');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-5').hover(function() {
    $('.login p').html('Forte Providers');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-6').hover(function() {
    $('.login p').html('Repair ID');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-7').hover(function() {
    $('.login p').html('Peace of Mind Driving');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-8').hover(function() {
    $('.login p').html('Forte Analytics');
  }, function() {
    $('.login p').html('Choose your log in');
  })

  $('.portal-9').hover(function() {
    $('.login p').html('Help Center');
  }, function() {
    $('.login p').html('Choose your log in');
  })

});
