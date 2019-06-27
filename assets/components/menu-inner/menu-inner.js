import './menu-inner.scss';
import $ from 'jquery';


function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.menu-inner').css({
        'padding-top': pt
    });
}

$(".menu-inner__menu-item").click(function(){
    $(".menu-inner__menu-link").removeClass("menu-inner-link_active");
    $(this).closest(".menu-inner__menu-link").addClass("menu-inner-link_active");
});