import './footer.scss';
import $ from 'jquery';
import Swiper from 'swiper';


var swiper2 = new Swiper('.footer__container', {
    pagination: {
        el: '.footer__pagination',
        clickable: 'true'
    },
    direction: 'horizontal',
    effect: 'fade',

});