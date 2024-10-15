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

<footer class="footer"></footer>
</body>
</html>
