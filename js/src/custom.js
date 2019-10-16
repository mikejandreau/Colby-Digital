jQuery(document).ready(function($) {




function btnColor(btn, color) {
var property = document.getElementById(btn);
    if (property.className !== 'toggled') {
        property.style.backgroundColor=color;
        property.className = 'toggled';
    }
    else {
        property.style.backgroundColor = "rgb(244,113,33)";
        property.className = '';
    }
}

});


(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          // scrollTop: (target.offset().top - 56)
          scrollTop: (target.offset().top - 0) // changed nav offset
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // // Closes responsive menu when a scroll trigger link is clicked
  // $('.js-scroll-trigger').click(function() {
  //   $('.navbar-collapse').collapse('hide');
  // });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    // offset: 56
    offset: 0 // changed nav offset
  });



    // Initialize animations
    new WOW().init();

    // Show and hide scrollup button
    $(function() {
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
          $("#scrollUpButton").addClass("show");
        } else {
          $("#scrollUpButton").removeClass("show");
        }
      });
    });




// color overlay transition
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".page-overlay");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
});


  
})(jQuery); // End of use strict
