import $ from "jquery";
import './bootstrap';
import 'slick-slider'



$(document).ready(function () {
    const banner_time = +$(`.banner-slider`).attr('data-time') * 1000;
    console.log(banner_time);
    $('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        dots: false,
        prevArrow: '<div class="slick-left"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#left"></use></svg></div>',
        nextArrow: '<div class="slick-right"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#right"></use></svg></div>',
        appendArrows: $('.banner-slider-nav'),
        autoplay: !!banner_time,
        autoplaySpeed: banner_time,
        responsive: [

            {
                breakpoint: 769,
                settings: {
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });
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
    $('.news-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        dots: false,
        prevArrow: '<div class="slick-left"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#left"></use></svg></div>',
        nextArrow: '<div class="slick-right"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#right"></use></svg></div>',
        appendArrows: $('.news-slider-nav'),
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

    // $('.tabs-item').on('click', function(e) {
    //     e.preventDefault();
    //
    //     var category = $(this).data('category');
    //
    //     $('.tabs-item').removeClass('active');
    //     $(this).addClass('active');
    //
    //     if (category === 'all') {
    //         $('.new-card').parents('.slick-slide').show();
    //     } else {
    //         $('.new-card').parents('.slick-slide').hide();
    //         $('.new-card[data-category="' + category + '"]').parents('.slick-slide').show();
    //     }
    //
    //     $('.news-slider').slick('setPosition');
    // });

    $('.tabs').each(function() {
        var $this = $(this);
        var tabContainers = $this.find('> div');  // Отримуємо тільки прямі div елементи всередині конкретної tabs групи
        var tabListItems = $this.find('.tab-list li');

        // Ховаємо всі таби та показуємо перший
        tabContainers.hide().filter(':first').show();
        tabListItems.filter(':first').addClass('active');

        // Обробка кліку на таб
        $this.find('.tab-list a').click(function (e) {
            e.preventDefault();

            var targetTab = $(this).attr('href');

            // Ховаємо всі контейнери та показуємо вибраний
            tabContainers.hide();
            $this.find(targetTab).show();

            // Оновлюємо активний таб
            tabListItems.removeClass('active');
            $(this).parent('li').addClass('active');

            // Оновлюємо позицію слайдера, якщо використовується
            $this.find('.catalog-slider').slick('setPosition');
        }).filter(':first').click();
    });
});
