import $ from "jquery";
import './bootstrap';
import 'slick-slider'


$(document).ready(function () {
    $('.manufacturers-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        dots: false,
        prevArrow: '<div class="slick-left"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#left"></use></svg></div>',
        nextArrow: '<div class="slick-right"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#right"></use></svg></div>',
        appendArrows: $('.manufacturers-slider-nav'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    dots: true,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                }
            },
            {
                breakpoint: 380,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });
});
