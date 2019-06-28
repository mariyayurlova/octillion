import './team.scss';
import $ from 'jquery';
import Swiper from "swiper";



var swiper2 = new Swiper('.team__container', {
    navigation: {
        nextEl: '.team__button-next',
        prevEl: '.team__button-prev',
    },
    slidesPerView: 3,
    breakpointsInverse: true,
    breakpoints: {
        320: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1280: {
            slidesPerView: 3
        }
    },
    forceToAxis: 'true',
    mousewheel: {
        invert: true,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
    paginationClickable: true,
    mousewheelControl: true

});


$( ".menu__menu-item" ).click(function() {
    $('.team__slide').removeClass("team__slide_in")
});

$( ".header__menu-item" ).click(function() {
    $('.team__slide').removeClass("team__slide_in")
});



$( "#team.menu__menu-item" ).click(function() {
    $('.team__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('team__slide_in');
        }, 500*i);
    });
    console.log("done");
});

$( "#team.header__menu-item" ).click(function() {
    $('.team__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('team__slide_in');
        }, 500*i);
    });
    console.log("done");
});