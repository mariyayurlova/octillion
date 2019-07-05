import './about.scss';
import $ from 'jquery';
import Swiper from "swiper";






$( ".menu__menu-item" ).click(function() {
    $('.about__slide').removeClass("about__slide_in")
});

$( ".header__menu-item" ).click(function() {
    $('.about__slide').removeClass("about__slide_in")
});


$( "#about.menu__menu-item" ).click(function() {
    $('.about__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('about__slide_in');
        }, 500*i);
    });
});

$( "#about.header__menu-item" ).click(function() {
    $('.about__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('about__slide_in');
        }, 500*i);
    });
});