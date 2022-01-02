<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href={{ asset('css/app.css') }}>
<script src={{ asset('js/app.js')}}></script>
    </head>
    <body >
<main>


    <nav class="m-nav">
        <div class="px-4 md:px-0 md:container">
            <div class="m-nav__wrapper">
        <div class="m-nav__logo mr-5">Logo</div>
        <div class="m-nav__bar">
        <ul class="m-nav__list mr-auto">
            <li class="m-nav__item"><a href="" class="m-nav__link">home</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">Goal</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">functions</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">pricing</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">contact me</a></li>

        </ul><div class="m-nav__buttons"><x-button class="mr-3" variant="primary" size="md">sign up</x-button><x-button variant="outline" size="md">login</x-button></div></div>
    <button class="menu">
        <div class="menu__item"></div>
        <div class="menu__item"></div>
        <div class="menu__item"></div>
    </button>
</div></div>
    </nav>

</main>
    </body>
</html>
