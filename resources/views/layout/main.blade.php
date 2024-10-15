@extends('app')
@section('class', 'main-page-page')

@section('content')
    <div class="banner-division">
        <div class="banner-slider" data-time="3">
            @for ($i = 1; $i <= 4; $i++)
                <div class="banner-card">
                    <img src="https://picsum.photos/1920/94{{$i}}/" alt="#">
                </div>
            @endfor
        </div>
        <div class="container banner-inner">
            <div class="banner-slider-nav"></div>
            <div class="banner-button button">
                <span>Стати партнером</span>
                <svg class="icon">
                    <use xlink:href="/images/sprites/sprite.svg#arrow"></use>
                </svg>
            </div>
        </div>
    </div>
    <div class="catalog-division container my-content">
        <div class="title-wrap">
            <div class="h1 title-section">Каталог</div>
            <div class="more">
                <span>Дивитись повністю</span>
                <svg class="icon">
                    <use xlink:href="/images/sprites/sprite.svg#arrow"></use>
                </svg>
            </div>
        </div>
        <div class="catalog-section-mesh">
            @for ($i = 1; $i <= 9; $i++)
                <div class="catalog-section-card">
                    <a class="catalog-section-card__link" href="#"></a>
                    <div class="catalog-section-card__image">
                        <img src="https://picsum.photos/400/400" alt="#">"
                    </div>
                    <div class="catalog-section-card__info">
                        <div class="catalog-section-card__title">
                            {{ fake()->sentence(2) }}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="target-division my-content">
        <div class="target-image">
            <img src="https://picsum.photos/800/515" alt="#">
        </div>
        <div class="container">
            <div class="h1 title-section">цільове <span>спрямування</span></div>
            <div class="target-mesh">
                @for ($i = 1; $i <= 12; $i++)
                    <a href="#" class="target-card">
                        {{ fake()->sentence(2) }}
                    </a>
                @endfor
            </div>
        </div>
    </div>

    <div class="benefits-division container my-content">
        <div class="h1 title-section">Працювати з <span>Dirom</span>
            <div class="label">– це отримувати чесний та відповідальний сервіс</div>
        </div>
        <div class="benefits-mesh">
            @for ($i = 1; $i <= 4; $i++)
                <div class="benefit-card">
                    <div class="benefit-card__image">
                        <img src="https://picsum.photos/355/450" alt="#">
                    </div>
                    <div class="benefit-card__info">
                        <div class="benefit-card__title">
                            {{ fake()->sentence(5) }}
                        </div>
                        <div class="benefit-card__text">
                            {{ fake()->sentence(10) }}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="company-division my-content">
        <div class="container">
            <div class="company-wrap">
                <div class="company-image-3"><img src="https://picsum.photos/603/603" alt="#"></div>
                <div class="company-image-2"><img src="https://picsum.photos/602/602" alt="#"></div>
                <div class="company-inner">
                    <div class="h1 company-title"><span>Про</span> компанію</div>
                    <div class="company-text">{{ fake()->sentence(35) }}</div>
                    <div class="company-text-alt">{{ fake()->sentence(48) }}</div>
                    <a href="#" class="more">
                        <span>Дізнатися більше</span>
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
                <div class="company-image-1"><img src="https://picsum.photos/601/601" alt="#"></div>
            </div>
        </div>
    </div>

    <div class="manufacturers-division container my-content">
        <div class="title-wrap">
            <div class="h1 title-division">Виробники</div>
            <div class="manufacturers-slider-nav nav-slider">
            </div>
        </div>
        <div class="manufacturers-slider manufacturers-mesh">
            @for ($i = 1; $i <= 3; $i++)
                <div class="manufacturer-card">
                    <div class="manufacturer-card__image">
                        <img src="https://picsum.photos/200/55" alt="#">
                    </div>
                </div>
                {{--  другой формат можна удалить --}}
                <div class="manufacturer-card">
                    <div class="manufacturer-card__image">
                        <img src="https://picsum.photos/106/106" alt="#">
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="clients-division my-content">
        <div class="container">
            <div class="clients-main">
                <h1 class="clients-title title-division">Наші<br> <span>клієнти</span></h1>
                <div class="clients-text">{{ fake()->sentence(50) }}</div>
            </div>
            <div class="clients-inner tabs">
                <ul class="clients-list tab-list">
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-1">архітектори</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-2">маляри і архітектори</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-3">дизайнери</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-4">бідівельні компанії</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-11">архітектори</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-22">маляри і архітектори</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-33">дизайнери</a></li>
                    <li class="clients-tab"><a class="clients-tab__link" href="#tab-44">бідівельні компанії</a></li>
                </ul>
                <div id="tab-1" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                </div>
                <div id="tab-2" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/410/410" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/410/410" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/410/410" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/410/410" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/410/410" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/410/410" alt="#">
                    </div>
                </div>
                <div id="tab-3" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/420/420" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/420/420" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/420/420" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/420/420" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/420/420" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/420/420" alt="#">
                    </div>
                </div>
                <div id="tab-4" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/405/405" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/405/405" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/405/405" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/405/405" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/405/405" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/405/405" alt="#">
                    </div>
                </div>
                <div id="tab-11" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/415/415" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/415/415" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/415/415" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/415/415" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/415/415" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/415/415" alt="#">
                    </div>
                </div>
                <div id="tab-22" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/425/425" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/425/425" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/425/425" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/425/425" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/425/425" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/425/425" alt="#">
                    </div>
                </div>
                <div id="tab-33" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/430/430" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/430/430" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/430/430" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/430/430" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/430/430" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/430/430" alt="#">
                    </div>
                </div>
                <div id="tab-44" class="clients-mesh">
                    <div class="clients-image">
                        <img src="https://picsum.photos/435/435" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/435/435" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/435/435" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/435/435" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/435/435" alt="#">
                    </div>
                    <div class="clients-image">
                        <img src="https://picsum.photos/435/435" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-division container my-content">
        <div class="title-wrap">
            <div class="h1 title-division">Виробники</div>
            <div class="tabs-navigation">
                <span data-category="all" class="tabs-item active">Всі</span>
                <span data-category="category_1" class="tabs-item">Категорія 1</span>
                <span data-category="category_2" class="tabs-item">Категорія 2</span>
                <span data-category="category_3" class="tabs-item">Категорія 3</span>
            </div>
            <div class="news-slider-nav nav-slider">
            </div>
        </div>
        <div class="news-slider news-mesh">
            <div class="new-card" data-category="category_1">
                <a href="#" class="new-card__link"></a>
                <div class="new-card__image">
                    <img src="https://picsum.photos/353/300" alt="#">
                    <div class="new-card__labels">
                        <div class="new-card__label">Категорія 1</div>
                    </div>
                </div>
                <div class="new-card__info">
                    <div class="new-card__date">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#date"></use>
                        </svg>
                        <span>18.05.2010</span>
                    </div>
                    <div class="new-card__title">
                        {{ fake()->sentence(20) }}
                    </div>
                    <div class="new-card__text">
                        {{ fake()->sentence(20) }}
                    </div>
                </div>
            </div>
            <div class="new-card" data-category="category_2">
                <a href="#" class="new-card__link"></a>
                <div class="new-card__image">
                    <img src="https://picsum.photos/353/300" alt="#">
                    <div class="new-card__labels">
                        <div class="new-card__label">Категорія 2</div>
                    </div>
                </div>
                <div class="new-card__info">
                    <div class="new-card__date">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#date"></use>
                        </svg>
                        <span>18.05.2010</span>
                    </div>
                    <div class="new-card__title">
                        {{ fake()->sentence(20) }}
                    </div>
                    <div class="new-card__text">
                        {{ fake()->sentence(20) }}
                    </div>
                </div>
            </div>
            <div class="new-card" data-category="category_3">
                <a href="#" class="new-card__link"></a>
                <div class="new-card__image">
                    <img src="https://picsum.photos/353/300" alt="#">
                    <div class="new-card__labels">
                        <div class="new-card__label">Категорія 3</div>
                    </div>
                </div>
                <div class="new-card__info">
                    <div class="new-card__date">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#date"></use>
                        </svg>
                        <span>18.05.2010</span>
                    </div>
                    <div class="new-card__title">
                        {{ fake()->sentence(20) }}
                    </div>
                    <div class="new-card__text">
                        {{ fake()->sentence(20) }}
                    </div>
                </div>
            </div>
            @for ($i = 1; $i <= 10; $i++)
                <div class="new-card" data-category="category_1">
                    <a href="#" class="new-card__link"></a>
                    <div class="new-card__image">
                        <img src="https://picsum.photos/353/300" alt="#">
                        <div class="new-card__labels">
                            <div class="new-card__label">Категорія 1</div>
                        </div>
                    </div>
                    <div class="new-card__info">
                        <div class="new-card__date">
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#date"></use>
                            </svg>
                            <span>18.05.2010</span>
                        </div>
                        <div class="new-card__title">
                            {{ fake()->sentence(20) }}
                        </div>
                        <div class="new-card__text">
                            {{ fake()->sentence(20) }}
                        </div>
                    </div>
                </div>
                <div class="new-card" data-category="category_2">
                    <a href="#" class="new-card__link"></a>
                    <div class="new-card__image">
                        <img src="https://picsum.photos/353/300" alt="#">
                        <div class="new-card__labels">
                            <div class="new-card__label">Категорія 2</div>
                        </div>
                    </div>
                    <div class="new-card__info">
                        <div class="new-card__date">
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#date"></use>
                            </svg>
                            <span>18.05.2010</span>
                        </div>
                        <div class="new-card__title">
                            {{ fake()->sentence(20) }}
                        </div>
                        <div class="new-card__text">
                            {{ fake()->sentence(20) }}
                        </div>
                    </div>
                </div>
                <div class="new-card">
                    <a href="#" class="new-card__link"></a>
                    <div class="new-card__image">
                        <img src="https://picsum.photos/353/300" alt="#">
                        <div class="new-card__labels">
                            <div class="new-card__label">Категорія</div>
                        </div>
                    </div>
                    <div class="new-card__info">
                        <div class="new-card__date">
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#date"></use>
                            </svg>
                            <span>18.05.2010</span>
                        </div>
                        <div class="new-card__title">
                            {{ fake()->sentence(20) }}
                        </div>
                        <div class="new-card__text">
                            {{ fake()->sentence(20) }}
                        </div>
                    </div>
                </div>
                <div class="new-card" data-category="category_3">
                    <a href="#" class="new-card__link"></a>
                    <div class="new-card__image">
                        <img src="https://picsum.photos/353/300" alt="#">
                        <div class="new-card__labels">
                            <div class="new-card__label">Категорія 3</div>
                        </div>
                    </div>
                    <div class="new-card__info">
                        <div class="new-card__date">
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#date"></use>
                            </svg>
                            <span>18.05.2010</span>
                        </div>
                        <div class="new-card__title">
                            {{ fake()->sentence(20) }}
                        </div>
                        <div class="new-card__text">
                            {{ fake()->sentence(20) }}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="contacts-division container my-content">
        <div class="contacts-inner">
            <div class="contacts-info">
                <h1 class="contacts-info__title title-section">Контакти</h1>
                <div class="contacts-info__text">Залишились питання? Залиште заявку на сайті або у соцмережах і наш
                    менеджер
                    передзвонить вам.
                </div>
                <div class="contacts-info__row">
                    <div class="contacts-info__cell">
                        <div class="contacts-info__social-label social-label">Соціальні мережі:</div>
                        <div class="contacts-info__social-list social-list">
                            <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#facebook"></use>
                                </svg>
                            </a>
                            <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#linkedin"></use>
                                </svg>
                            </a>
                            <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#instagram"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="contacts-info__cell">
                        <div class="contacts-info__social-label social-label">Месенджери:</div>
                        <div class="contacts-info__social-list social-list">
                            <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#viber"></use>
                                </svg>
                            </a>
                            <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#telegram"></use>
                                </svg>
                            </a>
                            <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#whatsapp"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contacts-info__alt-title">Оптовим постачальникам</div>
                <div class="contacts-info__alt-text">Для комерційної співпраці зателефонуйте за номером нижче</div>
                <a class="contacts-info__alt-phone" href="tel:(093) 223 27 66">
                    <svg class="icon">
                        <use xlink:href="/images/sprites/sprite.svg#phone"></use>
                    </svg>
                    <span>(093) 223 27 66</span>
                </a>
                <div class="contacts-info__button button">Зворотній зв’язок</div>
            </div>
            <div class="contacts-mesh">
                <div class="contacts-card">
                    <div class="contacts-card__map">
                        <img src="https://picsum.photos/450/300" alt="#">
                    </div>
                    <div class="contacts-card__info">
                        <div class="contacts-card__title"></div>
                        <div class="contacts-card__line">
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>м. Київ, вул. Шевченка, буд. 44, офіс 67</span>
                            </a>
                        </div>
                        <div class="contacts-card__line">
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>099 947 5645</span>
                            </a>
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>099 947 5645</span>
                            </a>
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>099 947 5645</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contacts-card">
                    <div class="contacts-card__map">
                        <img src="https://picsum.photos/450/300" alt="#">
                    </div>
                    <div class="contacts-card__info">
                        <div class="contacts-card__title"></div>
                        <div class="contacts-card__line">
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>м. Київ, вул. Шевченка, буд. 44, офіс 67</span>
                            </a>
                        </div>
                        <div class="contacts-card__line">
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>099 947 5645</span>
                            </a>
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>099 947 5645</span>
                            </a>
                            <a class="contacts-card__item"
                               href="https://www.google.com/maps/search/м. Київ, вул. Шевченка, буд. 44, офіс 67"
                               target="_blank">
                                <svg class="icon">
                                    <use xlink:href="/images/sprites/sprite.svg#address"></use>
                                </svg>
                                <span>099 947 5645</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="seo-division container my-content">
        <div class="seo-text ckeditor">
            <h1>Більше про <span>компанію</span></h1>
            <ul>
                <li>{{ fake()->text() }}</li>
                <li>{{ fake()->text() }}</li>
                <li>{{ fake()->text() }}</li>
            </ul>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
        </div>
    </div>
@endsection


