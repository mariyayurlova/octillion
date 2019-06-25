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
        autoHeight: true,
    });

    $(".swiper-slide-active .homeSlider__title").addClass("homeSlider__title_in");
    $(".swiper-slide-active .homeSlider__description").addClass("homeSlider__description_subin");
    $(".swiper-slide-active .homeSlider__text").addClass("homeSlider__text_linkin");


    swiper.on('slideChange', function () {
        $(".swiper-slide-active .homeSlider__title").addClass("homeSlider__title_out").removeClass('homeSlider__title_in');
        $(".swiper-slide-active .homeSlider__description").addClass("homeSlider__description_subout").removeClass('homeSlider__description_subin');
        $(".swiper-slide-active .homeSlider__text").addClass("homeSlider__text_linkout").removeClass('homeSlider__text_linkin');



    });

    swiper.on('transitionStart', function () {
        $(".swiper-slide-active .homeSlider__title").removeClass("homeSlider__title_out");
        $(".swiper-slide-active .homeSlider__description").removeClass("homeSlider__description_subout");
        $(".swiper-slide-active .homeSlider__text").removeClass("homeSlider__text_linkout");

        $(".swiper-slide-active .homeSlider__title").addClass("homeSlider__title_in");
        $(".swiper-slide-active .homeSlider__description").addClass("homeSlider__description_subin");
        $(".swiper-slide-active .homeSlider__text").addClass("homeSlider__text_linkin");

});


    $(".swiper-slide-active .slider__home-item-left-title").addClass("in")
    $(".swiper-slide-active .slider__home-item-left-desc").addClass("subin")
    $(".swiper-slide-active .slider__home-item-left-link").addClass("linkin")
    $(".swiper-slide-active .slider__home-item-right-item-img").addClass("imgin")


    swiper.on('slideChange', function () {
        $(".swiper-slide-active .slider__home-item-left-title").addClass("out").siblings().removeClass('in')
        $(".swiper-slide-active .slider__home-item-left-desc").addClass("subout").siblings().removeClass('subin')
        $(".swiper-slide-active .slider__home-item-left-link").addClass("linkout").siblings().removeClass('linkin')
        $(".swiper-slide-active .slider__home-item-right-item-img").addClass("imgout").siblings().removeClass('imgin')




    });

    swiper.on('transitionStart', function () {
        $(".swiper-slide-active .slider__home-item-left-title").removeClass("out")
        $(".swiper-slide-active .slider__home-item-left-desc").removeClass("subout")
        $(".swiper-slide-active .slider__home-item-left-link").removeClass("linkout")
        $(".swiper-slide-active .slider__home-item-right-item-img").removeClass("imgout")

        $(".swiper-slide-active .slider__home-item-left-title").addClass("in")
        $(".swiper-slide-active .slider__home-item-left-desc").addClass("subin")
        $(".swiper-slide-active .slider__home-item-left-link").addClass("linkin")
        $(".swiper-slide-active .slider__home-item-right-item-img").addClass("imgin")
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
