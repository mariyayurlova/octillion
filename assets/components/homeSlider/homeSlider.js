import './homeSlider.scss';
import $ from 'jquery';
import Swiper from 'swiper';


function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.homeSlider').css({
        'padding-top': pt
    });
}


$(document).ready(function () {

    var swiper = new Swiper('.homeSlider__container', {
        pagination: {
            el: '.homeSlider__pagination',
            clickable: 'true'
        },
        direction: 'horizontal',
        autoplay: true,
        effect: 'fade',
        speed: 3000,
        autoHeight: true,


    });

    $(".swiper-slide-active .homeSlider__title").addClass("homeSlider__title_in");
    $(".swiper-slide-active .homeSlider__description").addClass("homeSlider__description_subin");
    $(".swiper-slide-active .homeSlider__text").addClass("homeSlider__text_linkin");
    $(".swiper-slide-active .homeSlider__image").addClass("homeSlider__image_linkin");


    swiper.on('slideChange', function () {
        $(".swiper-slide-active .homeSlider__title").addClass("homeSlider__title_out").removeClass('homeSlider__title_in');
        $(".swiper-slide-active .homeSlider__description").addClass("homeSlider__description_subout").removeClass('homeSlider__description_subin');
        $(".swiper-slide-active .homeSlider__text").addClass("homeSlider__text_linkout").removeClass('homeSlider__text_linkin');
        $(".swiper-slide-active .homeSlider__image").addClass("homeSlider__image_linkout").removeClass('homeSlider__image_linkin');



    });

    swiper.on('transitionStart', function () {
        $(".swiper-slide-active .homeSlider__title").removeClass("homeSlider__title_out");
        $(".swiper-slide-active .homeSlider__description").removeClass("homeSlider__description_subout");
        $(".swiper-slide-active .homeSlider__text").removeClass("homeSlider__text_linkout");
        $(".swiper-slide-active .homeSlider__image").removeClass("homeSlider__image_linkout");

        $(".swiper-slide-active .homeSlider__title").addClass("homeSlider__title_in");
        $(".swiper-slide-active .homeSlider__description").addClass("homeSlider__description_subin");
        $(".swiper-slide-active .homeSlider__text").addClass("homeSlider__text_linkin");
        $(".swiper-slide-active .homeSlider__image").addClass("homeSlider__image_linkin");

});



});




$("#homeSection").addClass("homeSlider__slide-item_active");


$(".menu__menu-item").click(function(){

    var menuId = $(this).attr("id");
    var test =  $('li[data-id=menuId]');
    $(".section").removeClass("homeSlider__slide-item_active");
    $('#' + menuId + 'Section').addClass("homeSlider__slide-item_active");
    $(".menu__menu-item").removeClass("menu__menu-item_active");
    $(this).addClass("menu__menu-item_active");


});

$(".menu-inner__menu-item").click(function(){

    var menuId = $(this).attr("id");
    var test =  $('li[data-id=menuId]');
    $(".section").removeClass("homeSlider__slide-item_active");
    $('#' + menuId + 'Section').addClass("homeSlider__slide-item_active");
    $(".menu-inner__menu-item").removeClass("menu-inner__menu-item_active");
    $(this).addClass("menu-inner__menu-item_active");


});


$(".header__menu-item").click(function(){

    var menuId = $(this).attr("id");
    var test =  $('li[data-id=menuId]');
    $(".section").removeClass("homeSlider__slide-item_active");
    $('#' + menuId + 'Section').addClass("homeSlider__slide-item_active");
    $(".header__menu-item").removeClass("header__menu-item_active");
    $(this).addClass("header__menu-item_active");
    $(".header__burger").click();


});


