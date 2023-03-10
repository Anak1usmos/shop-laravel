<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ОБЕЛИСК - магазин электронных ключей</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">
</head>
<body>

<header class="header">
    <div class="logo">
        <a href="{{route('main')}}"><img src="\image\photo1.png" alt="ОБЕЛИСК"></a>
    </div>
    <nav class="menu">
        <ul>
            <li><a href="<?php echo url ('about'); ?>" class="ob">ОБЕЛИСК</a></li>
            <li><a href="/catalog/" class="ob2">КАТАЛОГ</a></li>
            <li><a href="/support/" class="ob3">ПОДДЕРЖКА</a></li>

            @guest
            <li><a href="{{ route ('login') }}" class="ob5">ВХОД</a></li>
            @endguest
            @auth
            <li><a href="{{ route ('home') }}" class="ob6">АККАУНТ</a></li>
            <li><a href="{{ route ('logout') }}" class="ob6">ВЫХОД</a></li>
            @endauth
            <li><a href="{{ route ('cart') }}" class="ob6">КОРЗИНА<span id="lex322">({{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}})</span></a></li>
        </ul>
    </nav>
    <div class="backet">
        <a href="{{ route ('cart') }}"><img src="\image\photo3.png" alt="КОРЗИНА"></a>
    </div>

</header>
<main class="rexd">
    @yield('content')
</main>

<footer class="footer">
    <div class="textik7">
        <p>Все права защищены.Полное или частичное копирование материалов сайта без согласия с администрацией сайта запрещено.<br> ОБЕЛИСК Ⓒ 2021</p>
    </div>
</footer>
</body>
</html>
