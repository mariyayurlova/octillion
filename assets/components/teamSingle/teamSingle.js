import './teamSingle.scss';
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

});


$( ".menu__menu-item" ).click(function() {
    $('.team__slide').removeClass("team__slide_in")
});

