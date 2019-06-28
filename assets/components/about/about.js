import './about.scss';
import $ from 'jquery';
import Swiper from "swiper";



var swiper3 = new Swiper('.services__container', {
    navigation: {
        nextEl: '.services__button-next',
        prevEl: '.services__button-prev',
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

});


$( ".menu__menu-item" ).click(function() {
    $('.services__slide').removeClass("services__slide_in")
});

$( ".header__menu-item" ).click(function() {
    $('.services__slide').removeClass("services__slide_in")
});


$( "#services.menu__menu-item" ).click(function() {
    $('.services__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('services__slide_in');
        }, 500*i);
    });
    console.log("done");
});

$( "#services.header__menu-item" ).click(function() {
    $('.services__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('services__slide_in');
        }, 500*i);
    });
    console.log("done");
});