import './about.scss';
import $ from 'jquery';
import Swiper from "swiper";



var swiper4 = new Swiper('.about__container', {
    navigation: {
        nextEl: '.about__button-next',
        prevEl: '.about__button-prev',
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
    $('.about__slide').removeClass("about__slide_in")
});

$( ".header__menu-item" ).click(function() {
    $('.about__slide').removeClass("about__slide_in")
});


$( "#contact.menu__menu-item" ).click(function() {
    $('.about__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('about__slide_in');
        }, 500*i);
    });
});

$( "#contact.header__menu-item" ).click(function() {
    $('.about__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('about__slide_in');
        }, 500*i);
    });
});