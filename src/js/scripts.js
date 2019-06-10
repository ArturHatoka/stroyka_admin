$(document).ready(function () {
    $('.header__nav--menu__point').hover(
        function () {
            $(this).children('ul').stop(false, false).fadeIn(300).css("display", "flex").addClass("active");
            $(this).children('a').addClass("active");
        },
        function () {
            $(this).children('ul').stop(false, false).fadeOut(300).css("position", "absolute").removeClass("active");
            $(this).children('a').removeClass("active");
        }
    );

    $('.header__nav--btn').click(
        function () {
            $(this).toggleClass("active");
            $('.header__nav--menu').toggleClass("active");
            $('.header__nav--btn-menu').toggleClass("active");
        }
    );
    $('.header__nav--btn-menu').click(
        function () {
            $('.header__nav--btn').toggleClass("active");
            $('.header__nav--menu').toggleClass("active");
            $(this).toggleClass("active");
        }
    );
    $('.catalogue .akcii-h2').click(
        function () {
            $(this).toggleClass("active");
            $('.catalogue .level1').toggleClass("active");
        }
    );
    $('.news-left .akcii-h2').click(
        function () {
            $(this).toggleClass("active");
            $('.news-left .new-one').toggleClass("active");
            $('.news-left .all-news').toggleClass("active");
        }
    );

});
