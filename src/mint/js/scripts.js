$(document).ready(function () {

    $(window).scroll(function () {
        if ($(window).scrollTop() > 143) {
            $('#nav').addClass('navbar-fixed');
        }
        if ($(window).scrollTop() < 144) {
            $('#nav').removeClass('navbar-fixed');
        }
    });
});