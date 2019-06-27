import './service.scss';
import $ from 'jquery';
import Swiper from "swiper";



var swiper2 = new Swiper('.service__container', {
    navigation: {
        nextEl: '.service__button-next',
        prevEl: '.service__button-prev',
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


