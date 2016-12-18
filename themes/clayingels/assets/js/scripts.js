(function ($) {
  $(document).ready(function() {

    $(".hamburger-menu").click(function() {
      $(".hamburger-menu").toggleClass('close');
    });

    $('.hamburger-menu').on('click', function() {
      $('.bar').toggleClass('animate');
    });

   // Mobile Navigation

    $(".main-nav").clone().attr('id', 'menu-original').addClass("hidden-xs").insertBefore(".site-wrapper");
    $("#menu-original").mmenu({
      "extensions": [
        "theme-dark"
      ]
    });



  
  if(Modernizr.mq('only all')) {
    $('html').addClass('mq');
  } else {
    $('html').addClass('no-mq');
  };
  
  if ($(".header-image-static")[0]){
    $('body').addClass('header-image-static-exsists');
  } else {
      // Do something if class does not exist
  }

  


  });
})(jQuery);