$(document).ready(function() {

  $(".hamburgler").on("click", function() {
    this.classList.toggle('active');
  })

  $(".hamburger").click(function() {
    $('.mobile-nav').slideToggle();
    // $('.mobile-nav').animate({
    //   width: 'toggle'
    // }, 400);
  })

  //
  //
  //
  // Solutions scripts
  //
  //


  $(".goforte").click(function() {
    if($('.goforte-text').css("display") == 'none') {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
      $(this).slideUp("slow", function() {});
    });
      $('.goforte-text').slideDown("slow", function() {});
      // $('.goforte-text').css("display") == 'flex';
      $('.goforte').addClass('arrowdown');
    } else {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
      $(this).slideUp("slow", function() {});
    });
    }
  })

  $(".fulfillments").click(function() {
    if($('.fulfillments-text').css("display") == 'none') {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
        $(this).slideUp("slow", function() {});
      });
      $('.fulfillments-text').slideDown("slow", function() {});
      $('.fulfillments').addClass('arrowdown');
    } else {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
      $(this).slideUp("slow", function() {});
    });
  }
  })

  $(".vin-pictures").click(function() {
    if($('.vin-pictures-text').css("display") == 'none') {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
        $(this).slideUp("slow", function() {});
      });
      $('.vin-pictures-text').slideDown("slow", function() {});
      $('.vin-pictures').addClass('arrowdown');
    } else {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
      $(this).slideUp("slow", function() {});
    });
  };
  })

  $(".services").click(function() {
    if($('.services-text').css("display") == 'none') {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
        $(this).slideUp("slow", function() {});
      });
      $('.services-text').slideDown("slow", function() {});
      $('.services').addClass('arrowdown');
    } else {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
      $(this).slideUp("slow", function() {});
    });
  };
  })

  $(".parts-labor").click(function() {
    if($('.parts-labor-text').css("display") == 'none') {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
        $(this).slideUp("slow", function() {});
      });
      $('.parts-labor-text').slideDown("slow", function() {});
      $('.parts-labor').addClass('arrowdown');
    } else {
      $(".options div").each(function() {
        $(this).removeClass('arrowdown');
      });
      $(".solutions-text div").each(function() {
      $(this).slideUp("slow", function() {});
    });
  };
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
