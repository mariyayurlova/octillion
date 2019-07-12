import './blog.scss';
import $ from 'jquery';



$( ".menu__menu-item" ).click(function() {
    $('.blog__about-item').removeClass("blog__about-item_in")
});

$( ".header__menu-item" ).click(function() {
    $('.blog__about-item').removeClass("blog__about-item_in")
});


$( "#blog.menu__menu-item" ).click(function() {
    $('.blog__about-item').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('blog__about-item_in');
        }, 500*i);
    });
});

$( "#blogMobile.header__menu-item" ).click(function() {
    $('.blog__about-item').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('blog__about-item_in');
        }, 500*i);
    });
});

$( ".blog__about-list" ).scroll(function() {
    $(".blog__about-item").css({ opacity: 1 });
    console.log("done")
});