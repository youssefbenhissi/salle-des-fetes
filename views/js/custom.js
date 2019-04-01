/*-----------------------------------------------------------------------------------

  Template Name: Uniqlo-Minimalist eCommerce HTML5 Template.
  Template URI: #
  Description: Uniqlo is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: HasTech
  Author URI: https://themeforest.net/user/hastech/portfolio
  Version: 1.1

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
  01. jQuery MeanMenu
  02. wow js active
  03. Portfolio  Masonry (width)
  04. Sticky Header
  05. ScrollUp
  06. Tooltip
  07. ScrollReveal Js Init
  08. Fixed Footer bottom script ( Newsletter )
  09. Search Bar
  10. Toogle Menu
  11. Shopping Cart Area
  12. Filter Area
  13. User Menu
  14. Overlay Close
  15. Home Slider 
  16. Popular Product Wrap
  17. Testimonial Wrap
  18. Magnific Popup  
  19. Price Slider Active
  20. Plus Minus Button
  21. jQuery scroll Nav

  

/*--------------------------------
[ End table content ]
-----------------------------------*/


(function ($) {
    'use strict';


    /*-------------------------------------------
      01. jQuery MeanMenu
    --------------------------------------------- */

    $('.mobile-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanScreenWidth: "991",
        meanRevealPosition: "right",
    });

    /*-------------------------------------------
      02. wow js active
    --------------------------------------------- */

    new WOW().init();



    /*-------------------------------------------
      03. Product  Masonry (width)
    --------------------------------------------- */

    $('.htc__product__container').imagesLoaded(function () {

        // filter items on button click
        $('.product__menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        // init Isotope
        var $grid = $('.product__list').isotope({
            itemSelector: '.single__pro',
            percentPosition: true,
            transitionDuration: '0.7s',
            layoutMode: 'fitRows',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1,
            }
        });

    });

    $('.product__menu button').on('click', function (event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });



    /*-------------------------------------------
      04. Sticky Header
    --------------------------------------------- */


    var win = $(window);
    var sticky_id = $("#sticky-header-with-topbar");
    win.on('scroll', function () {
        var scroll = win.scrollTop();
        if (scroll < 245) {
            sticky_id.removeClass("scroll-header");
        } else {
            sticky_id.addClass("scroll-header");
        }
    });





    /*--------------------------
      05. ScrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });



    /*---------------------------
      06. Tooltip
    ------------------------------*/
    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });



    /*-----------------------------------
      07. ScrollReveal Js Init
    -------------------------------------- */

    window.sr = ScrollReveal({
        duration: 800,
        reset: false
    });
    sr.reveal('.foo');
    sr.reveal('.bar');



    /*-------------------------------------------------------
      08. Fixed Footer bottom script ( Newsletter )
    --------------------------------------------------------*/

    var $newsletter_height = $(".htc__foooter__area");
    $('.fixed__footer').css({
        'margin-bottom': $newsletter_height.height() + 'px'
    });




    /*------------------------------------    
      09. Search Bar
    --------------------------------------*/

    $('.search__open').on('click', function () {
        $('body').toggleClass('search__box__show__hide');
        return false;
    });

    $('.search__close__btn .search__close__btn_icon').on('click', function () {
        $('body').toggleClass('search__box__show__hide');
        return false;
    });




    /*------------------------------------    
      10. Toogle Menu
    --------------------------------------*/

    $('.toggle__menu').on('click', function () {
        $('.offsetmenu').addClass('offsetmenu__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function () {
        $('.offsetmenu').removeClass('offsetmenu__on');
        $('.body__overlay').removeClass('is-visible');
    });



    /*------------------------------------    
      11. Shopping Cart Area
    --------------------------------------*/

    $('.cart__menu').on('click', function () {
        $('.shopping__cart').addClass('shopping__cart__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function () {
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.body__overlay').removeClass('is-visible');
    });


    /*------------------------------------    
      12. Filter Area
    --------------------------------------*/

    $('.filter__menu').on('click', function () {
        $('.filter__wrap').addClass('filter__menu__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.filter__menu__close__btn').on('click', function () {
        $('.filter__wrap').removeClass('filter__menu__on');
        $('.body__overlay').removeClass('is-visible');
    });



    /*------------------------------------    
      13. User Menu
    --------------------------------------*/

    $('.user__menu').on('click', function () {
        $('.user__meta').addClass('user__meta__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function () {
        $('.user__meta').removeClass('user__meta__on');
        $('.body__overlay').removeClass('is-visible');
    });



    /*------------------------------------    
      14. Overlay Close
    --------------------------------------*/
    $('.body__overlay').on('click', function () {
        $(this).removeClass('is-visible');
        $('.offsetmenu').removeClass('offsetmenu__on');
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.filter__wrap').removeClass('filter__menu__on');
        $('.user__meta').removeClass('user__meta__on');
    });



    /*-----------------------------------------------
      15. Home Slider
    -------------------------------------------------*/

    if ($('.slider__activation__wrap').length) {
        $('.slider__activation__wrap').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: false,
            navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>'],
            autoplayTimeout: 10000,
            items: 1,
            dots: false,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        });
    }

    if ($('.slider__activation__02').length) {
        $('.slider__activation__02').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: false,
            autoplayTimeout: 10000,
            items: 1,
            dots: false,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        });
    }




    /*-----------------------------------------------
      16. Popular Product Wrap
    -------------------------------------------------*/


    $('.popular__product__wrap').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoplay: false,
        navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>'],
        autoplayTimeout: 10000,
        items: 3,
        dots: false,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            800: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    });



    /*-----------------------------------------------
      17. Testimonial Wrap
    -------------------------------------------------*/


    $('.testimonial__wrap').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        autoplay: false,
        navText: false,
        autoplayTimeout: 10000,
        items: 1,
        dots: false,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            800: {
                items: 1
            },
            1024: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    });




    /*--------------------------------
      18. Magnific Popup
    ----------------------------------*/

    $('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });

    $('.image-popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        removalDelay: 100,
        gallery: {
            enabled: true,
        }
    });





    /*-------------------------------
      19. Price Slider Active
    --------------------------------*/
    $("#slider-range").slider({
        range: true,
        min: 10,
        max: 500,
        values: [110, 400],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));




    /*-------------------------------
      20.  Plus Minus Button 
    --------------------------------*/


    $(".cart-plus-minus").append('<div class="dec qtybutton">-</i></div><div class="inc qtybutton">+</div>');

    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });


    /*--------------------------
      21. jQuery scroll Nav
    ---------------------------- */
    $('.onepage--menu').onePageNav({
        scrollOffset: 0
    });








})(jQuery);





/* Show and hide menu */

$(document).ready(function () {

    'use strict';

    $(window).scroll(function () {

        'use strict';

        if ($(window).scrollTop() < 80) {

            $('.navbar').css({
                'margin-top': '-100px',
                'opacity': '0'

            });

            $('.navbar-default').css({
                'background-color': 'rgba(59, 59 , 59, 0)'

            });

        } else {

            $('.navbar').css({
                'margin-top': '0px',
                'opacity': '1'

            });

            $('.navbar-default').css({
                'background-color': 'rgba(59, 59 , 59, 0.7)',
                'border-color': '#444'

            });

            $('.navbar-brand img').css({
                'height': '35px',
                'padding-top': '0px'

            });

            $('.navbar-nav > li > a ').css({
                'padding-top': '15px'


            });


        }


    });


});

//add smooth scrolling
$(document).ready(function () {

    'use strict';


    $('.nav-item, #scroll-to-top').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });


});

/* active menu item on click */
$(document).ready(function () {

    'use strict';


    $('.navbar-nav li a').click(function () {

        'use strict';

        $('.navbar-nav li a').parent().removeClass("active");

        $(this).parent().addClass("active");

    });
});

// highlight menu item on scroll
$(document).ready(function () {

    'use strict';

    $(window).scroll(function () {

        'use strict';

        $("section").each(function () {

            'use strict';

            var bb = $(this).attr("id"); // ABOUT, CONTACT, DOWNLOAD
            var hei = $(this).outerHeight();
            var grttop = $(this).offset().top - 70;

            if ($(window).scrollTop() > grttop && $(window).scrollTop() < grttop + hei) {

                $(".navbar-nav li a[href='#" + bb + "']").parent().addClass("active");

            } else {
                $(".navbar-nav li a[href='#" + bb + "']").parent().removeClass("active");

            }


        });


    });


});

// add auto padding to header 

$(document).ready(function () {

    'use strict';

    setInterval(function () {

        'use strict';

        var windowHeight = $(window).height();

        var containerHeight = $(".header-container").height();

        var padTop = windowHeight - containerHeight;

        $(".header-container").css({

            'padding-top': Math.round(padTop / 2) + 'px',
            'padding-bottom': Math.round(padTop / 2) + 'px'

        });


    }, 10)


});

// Add bx slider to screens
$(document).ready(function () {

    $('.bxslider').bxSlider({

        slideWidth: 292.5,
        auto: true,
        minSlides: 1,
        maxSlides: 3,
        slideMargin: 50
    });

});


// Add counter
$(document).ready(function () {

    $('.counter-number').counterUp({
        delay: 10,
        time: 2000
    });
});

// Add animation/ Initialize Woo
$(document).ready(function () {

    'use strict';

    new WOW().init();

});
//add animation initialize woo
$(document).ready(function () {
    'use strict';
    new WOW().init();
});
// add bx slider to screen
$(document).ready(function () {
    $('.bxSlider').bxSlider({
        slideWidth: 292.5,
        auto: true,
        minSlides: 1,
        maxSlides: 3,
        slideMargin: 50
    });
});

var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
    // validate username
    if (username.value == "") {
        username.style.border = "1px solid red";
        document.getElementById('username_div').style.color = "red";
        name_error.textContent = "Username is required";
        username.focus();
        return false;
    }
    // validate username
    if (username.value.length < 3) {
        username.style.border = "1px solid red";
        document.getElementById('username_div').style.color = "red";
        name_error.textContent = "Username must be at least 3 characters";
        username.focus();
        return false;
    }
    // validate email
    if (email.value == "") {
        email.style.border = "1px solid red";
        document.getElementById('email_div').style.color = "red";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
    }
    // validate password
    if (password.value == "") {
        password.style.border = "1px solid red";
        document.getElementById('password_div').style.color = "red";
        password_confirm.style.border = "1px solid red";
        password_error.textContent = "Password is required";
        password.focus();
        return false;
    }
    // check if the two passwords match
    if (password.value != password_confirm.value) {
        password.style.border = "1px solid red";
        document.getElementById('pass_confirm_div').style.color = "red";
        password_confirm.style.border = "1px solid red";
        password_error.innerHTML = "The two passwords do not match";
        return false;
    }
}
// event handler functions
function nameVerify() {
    if (username.value != "") {
        username.style.border = "1px solid #5e6e66";
        document.getElementById('username_div').style.color = "#5e6e66";
        name_error.innerHTML = "";
        return true;
    }
}

function emailVerify() {
    if (email.value != "") {
        email.style.border = "1px solid #5e6e66";
        document.getElementById('email_div').style.color = "#5e6e66";
        email_error.innerHTML = "";
        return true;
    }
}

function passwordVerify() {
    if (password.value != "") {
        password.style.border = "1px solid #5e6e66";
        document.getElementById('pass_confirm_div').style.color = "#5e6e66";
        document.getElementById('password_div').style.color = "#5e6e66";
        password_error.innerHTML = "";
        return true;
    }
    if (password.value === password_confirm.value) {
        password.style.border = "1px solid #5e6e66";
        document.getElementById('pass_confirm_div').style.color = "#5e6e66";
        password_error.innerHTML = "";
        return true;
    }
}

function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}