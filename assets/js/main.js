(function($) {
  
  "use strict";  

  $(window).on('load', function() {

  /*Page Loader active
    ========================================================*/
    $('#preloader').fadeOut();

  // Sticky Nav
  // $('.scrolling-navbar').addClass('top-nav-collapse');
      if (window.location.href.indexOf("policy") === -1) {
          $(window).on('scroll', function() {
              if ($(window).scrollTop() >= 20) {
                  $('.scrolling-navbar').addClass('top-nav-collapse');
              } else {
                  $('.scrolling-navbar').removeClass('top-nav-collapse');
              }
          });
      }

    /* ==========================================================================
       countdown timer
       ========================================================================== */
     jQuery('#clock').countdown('2021/07/10 06:00',function(event){
      var $this=jQuery(this).html(event.strftime(''
      +'<div class="time-entry days"><span>%-D</span> Days</div> '
      +'<div class="time-entry hours"><span>%H</span> Hours</div> '
      +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
      +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
    });

    /* slicknav mobile menu active  */
    $('.mobile-menu').slicknav({
        prependTo: '.navbar-header',
        parentTag: 'liner',
        allowParentLinks: true,
        duplicate: true,
        label: '',
      });

      /* WOW Scroll Spy
    ========================================================*/
     var wow = new WOW({
      //disabled for mobile
        mobile: false
    });
    wow.init();

    /* Nivo Lightbox 
    ========================================================*/
    // $('.lightbox').nivoLightbox({
    //     effect: 'fadeScale',
    //     keyboardNav: true,
    //   });

    // one page navigation 
    $('.navbar-nav').onePageNav({
            currentClass: 'active'
    }); 

    /* Back Top Link active
    ========================================================*/
      var offset = 200;
      var duration = 500;
      $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
          $('.back-to-top').fadeIn(400);
        } else {
          $('.back-to-top').fadeOut(400);
        }
      });

      $('.back-to-top').on('click',function(event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, 600);
        return false;
      });

      /* Event Interest
    ========================================================*/
    var NumOfEvents=2;
    for (let i = 1; i <= NumOfEvents; i++) {
      $('#event-'+i+'-button').on('click', function(event) {
        $('#msg_subject').val('Interested in "'+$('#event-'+i+'-name').text()+'"');
        $('#message').val('Hi ,\nI am interested into live workshop : '+$('#event-'+i+'-name').text()+'.');
      });
    }

  });

}(jQuery));