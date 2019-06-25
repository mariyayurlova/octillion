import './menu.scss';
import $ from 'jquery';


function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.menu').css({
        'padding-top': pt
    });
}

$(".menu__menu-item").click(function(){
    $(".menu__menu-link").removeClass("menu-link_active");
    $(this).closest(".menu__menu-link").addClass("menu-link_active");
});