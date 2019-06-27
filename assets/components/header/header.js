import './header.scss';
import $ from 'jquery';


function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.main').css({
        'padding-top': pt
    });
}

$(".header__menu-item").click(function(){
    $(".header__menu-item").removeClass("header__menu-item_active");
    $(this).closest(".header__menu-item").addClass("header__menu-item_active");
});




$(".header__burger").click(function(){
    $(".header__burger").toggleClass("header__burger_active");


    if ((!$(".header__menu").hasClass("header__menu_deactive")) && (!$(".header__menu").hasClass("header__menu_active"))){
        $(".header__menu").addClass("header__menu_active");
        $(".header__menu").removeClass("header__menu_deactive");
    }

    else if($(".header__menu").hasClass("header__menu_active")){
        $(".header__menu").addClass("header__menu_deactive");
        $(".header__menu").removeClass("header__menu_active");
    }

    else if ($(".header__menu").hasClass("header__menu_deactive")){
        $(".header__menu").addClass("header__menu_active");
        $(".header__menu").removeClass("header__menu_deactive");
    }


});




$(".header__lang-type-item").click(function(){
    $(".mob").slideToggle();
    $(".header__lang-type").toggleClass("header__lang-type_active");

});

$(".header__call").click(function(){

    if ((!$(".header__call-content").hasClass("header__call-content_deactive")) && (!$(".header__call-content").hasClass("header__call-content_active"))){
        $(".header__call-content").addClass("header__call-content_active");
        $(".header__call-content").removeClass("header__call-content_deactive");
    }

    else if($(".header__call-content").hasClass("header__call-content_active")){
        $(".header__call-content").addClass("header__call-content_deactive");
        $(".header__call-content").removeClass("header__call-content_active");
    }

    else if ($(".header__call-content").hasClass("header__call-content_deactive")){
        $(".header__call-content").addClass("header__call-content_active");
        $(".header__call-content").removeClass("header__call-content_deactive");
    }

});


$(".desctop-lang").click(function(){
    $(".desc").slideToggle();
    $(".desctop-lang").toggleClass("desctop-lang_active");

});



window.setCookie = function (key, value){
    let date = new Date(new Date().getTime() + 365 * 24 * 3600 * 1000);
    document.cookie = `${key}=${value}; path=/; expires=` + date.toUTCString();
};

window.getCookie = function(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
};

$(function ($) {
    $('[data-lang]').on('click', function (event) {
        event.preventDefault();

        if (!$(this).hasClass('lang__link_active')) {
            let lang = $(this).data('lang');
            setCookie('lang', lang);
            window.location.reload(true);
        }
    });
});
