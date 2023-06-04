(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();


  // Initiate the wowjs
  new WOW().init();


  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.sticky-top').addClass('shadow-sm').css('top', '0px');
    } else {
      $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
    }
  });


  // Back to top button

  var btn = $('#button');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });
  // $(window).scroll(function () {
  //     if ($(this).scrollTop() > 300) {
  //         $('.back-to-top').fadeIn('slow');
  //     } else {
  //         $('.back-to-top').fadeOut('slow');
  //     }
  // });
  // $('.back-to-top').click(function () {
  //     $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
  //     return false;
  // });


  // // Facts counter
  // $('[data-toggle="counter-up"]').counterUp({
  //     delay: 10,
  //     time: 2000
  // });


  // // Skills
  // $('.skill').waypoint(function () {
  //     $('.progress .progress-bar').each(function () {
  //         $(this).css("width", $(this).attr("aria-valuenow") + '%');
  //     });
  // }, {offset: '80%'});



  //proyash new carousal


  //gallery
  $(document).ready(function () {
    $(".gallery").magnificPopup({
      delegate: "a",
      type: "image",
      tLoading: "Loading image #%curr%...",
      mainClass: "mfp-img-mobile",
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
      }
    });
  });



  //navigation
  document.addEventListener("DOMContentLoaded", function () {
    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {

      // close all inner dropdowns when parent is closed
      document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
        everydropdown.addEventListener('hidden.bs.dropdown', function () {
          // after dropdown is hidden, then find all submenus
          this.querySelectorAll('.submenu').forEach(function (everysubmenu) {
            // hide every submenu as well
            everysubmenu.style.display = 'none';
          });
        })
      });

      document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
        element.addEventListener('click', function (e) {
          let nextEl = this.nextElementSibling;
          if (nextEl && nextEl.classList.contains('submenu')) {
            // prevent opening link if link needs to open dropdown
            e.preventDefault();
            if (nextEl.style.display == 'block') {
              nextEl.style.display = 'none';
            } else {
              nextEl.style.display = 'block';
            }

          }
        });
      })
    }
    // end if innerWidth
  });



  //proyash history
  var imgRefreshBtn = document.getElementById("hero__img-refresh");

  // Update the picsum image source on btn click
  imgRefreshBtn.onclick = function () {
    document.getElementById("hero__image").src = "img/background/1.jpg" + new Date().getTime();
  };




  //getin touch
  $(function () {

    'use strict';

    // Form

    var contactForm = function () {

      if ($('#contactForm').length > 0) {
        $("#contactForm").validate({
          rules: {
            name: "required",
            email: {
              required: true,
              email: true
            },
            message: {
              required: true,
              minlength: 5
            }
          },
          messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            message: "Please enter a message"
          },
          /* submit via ajax */
          submitHandler: function (form) {
            var $submit = $('.submitting'),
              waitText = 'Submitting...';

            $.ajax({
              type: "POST",
              url: "php/send-email.php",
              data: $(form).serialize(),

              beforeSend: function () {
                $submit.css('display', 'block').text(waitText);
              },
              success: function (msg) {
                if (msg == 'OK') {
                  $('#form-message-warning').hide();
                  setTimeout(function () {
                    $('#contactForm').fadeOut();
                  }, 1000);
                  setTimeout(function () {
                    $('#form-message-success').fadeIn();
                  }, 1400);

                } else {
                  $('#form-message-warning').html(msg);
                  $('#form-message-warning').fadeIn();
                  $submit.css('display', 'none');
                }
              },
              error: function () {
                $('#form-message-warning').html("Something went wrong. Please try again.");
                $('#form-message-warning').fadeIn();
                $submit.css('display', 'none');
              }
            });
          }

        });
      }
    };
    contactForm();

  });




})(jQuery);

