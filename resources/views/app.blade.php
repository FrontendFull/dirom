<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/scss/app.scss')
    <!-- JS -->
    @vite('resources/js/app.js')

</head>
<body class="@yield('class')">
<header class="header">
    <div class="container">
        <div class="header-inner">
            <div class="header-left">
                <div class="catalog-trigger icon-link">
                    <svg class="icon">
                        <use xlink:href="/images/sprites/sprite.svg#catalog"></use>
                    </svg>
                    <span>Каталог  товарів</span>
                </div>
            </div>
            <a class="logo" href="/">
                <img src="/images/logo.svg" alt="Logo">
            </a>
            <div class="header-right">
                <div class="button-icon">
                    <svg class="icon">
                        <use xlink:href="/images/sprites/sprite.svg#search"></use>
                    </svg>
                </div>
                <div class="button-icon">
                    <svg class="icon">
                        <use xlink:href="/images/sprites/sprite.svg#user"></use>
                    </svg>
                </div>
                <div class="button-icon">
                    <svg class="icon">
                        <use xlink:href="/images/sprites/sprite.svg#cart"></use>
                    </svg>
                </div>
                <div class="menu-trigger icon-link">
                    <svg class="icon">
                        <use xlink:href="/images/sprites/sprite.svg#menu"></use>
                    </svg>
                    <span>Меню</span>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="main">
    @yield('content')
</main>

<footer class="footer">
    <div class="footer-top container">
        <div class="footer-column">
            <a class="logo" href="/">
                <img src="/images/logo.svg" alt="Logo">
            </a>
            <a class="dia" href="#" target="_blank">
                <img src="/images/dia.svg" alt="Logo">
            </a>
        </div>
        <div class="footer-column">
            <div class="footer-title">Компанія</div>
            <ul class="footer-nav nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Про компанію</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Вакансії</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Новини</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Відгуки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакти</a>
                </li>
            </ul>
        </div>
        <div class="footer-column">
            <div class="footer-title">Покупцям</div>
            <ul class="footer-nav nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Публічна оферта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Обмін і повернення</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Програма лояльності</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Оплата та доставка</a>
                </li>
            </ul>
            <div class="footer-registration">
            <div class="footer-title-alt">Зареєструватися для<br> оптових покупок</div>
                <div class="button">зареєструватися</div>
            </div>
        </div>
        <div class="footer-column">
            <div class="footer-title">КОНТАКТИ</div>
            <div class="footer-contacts">
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
                       href="tel:099 947 5645"
                       target="_blank">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#phone"></use>
                        </svg>
                        <span>099 947 5645</span>
                    </a>
                </div>
                <div class="contacts-card__line">
                    <a class="contacts-card__item"
                       href="mailto:lorem@gmail.com"
                       target="_blank">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#email"></use>
                        </svg>
                        <span>lorem@gmail.com</span>
                    </a>
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
            </div>
        </div>
    </div>
    <div class="footer-bottom container">
        <a href="#">Політика конфіденційності</a>
        <a href="#">Правила сайту</a>
        <a href="https://megasite.ua/" target="_blank">Сайт розробили: megasite.</a>
    </div>
</footer>
</body>
</html>
