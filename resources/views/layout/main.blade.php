@extends('app')
@section('class', 'main-page-page')

@section('content')
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


