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