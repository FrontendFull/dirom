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

</header>

<main class="main">
    @yield('content')
</main>

<footer class="footer"></footer>
</body>
</html>
