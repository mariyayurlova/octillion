import './serviceSingle.scss';
import $ from 'jquery';



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
});

$( "#services.header__menu-item" ).click(function() {
    $('.services__slide').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('services__slide_in');
        }, 500*i);
    });
});