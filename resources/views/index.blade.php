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


    <nav class="nav">
        <div class="px-4 md:px-0 md:container">
            <div class="nav__wrapper">
        <a href="#" class="nav__logo mr-7"><img src={{ asset('img/logo.svg') }} alt="" class="max-w-full h-auto"></a>

        <ul class="nav__list mr-auto hidden lg:flex">
            <li class="nav__item"><a href="#main" class="nav__link">home</a></li>
            <li class="nav__item"><a href="#servizi" class="nav__link">servizi</a></li>
            <li class="nav__item"><a href="#" class="nav__link">chi siamo</a></li>
            <li class="nav__item"><a href="#" class="nav__link">prezzi</a></li>
            <li class="nav__item"><a href="#" class="nav__link">contattaci</a></li>

        </ul><div class="nav__buttons  hidden lg:block"><x-button class="mr-3" variant="primary" size="md">sign up</x-button><x-button variant="outline" size="md">login</x-button></div>
    <button class="menu">
        <div class="menu__item"></div>
        <div class="menu__item"></div>
        <div class="menu__item"></div>
    </button>
<div class="nav__slider"></div>
</div></div>
    </nav>

    <div class="m-nav">
        <div class="px-4 md:px-0 md:container">
        <div class="m-nav__header">
            <a href="#" class="nav__logo mr-7"><img src={{ asset('img/logo.svg') }} alt="" class="max-w-full h-auto"></a>
            <button class="menu">
                <div class="menu__item"></div>
                <div class="menu__item"></div>
                <div class="menu__item"></div>
            </button>
        </div>
        <ul class="m-nav__list mb-7">
            <li class="m-nav__item"><a href="#main" class="m-nav__link">home</a></li>
            <li class="m-nav__item"><a href="#servizi" class="m-nav__link">servizi</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">chi siamo</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">prezzi</a></li>
            <li class="m-nav__item"><a href="" class="m-nav__link">contattaci</a></li>
        </ul>
        <div class="m-nav__buttons"><x-button class="mr-3" variant="primary" size="md">sign up</x-button><x-button variant="outline" size="md">login</x-button></div>
        </div>
    </div>
    <header class="main" id="main">
     <div class="md:container px-4">
            <div class="flex flex-wrap">
                <div class="lg:hidden w-full lg:w-1/2 flex justify-center items-start">

                    <img src={{ asset('img/hero.png') }} alt="" class="max-w-full h-auto">


</div>
                <div class="w-full lg:w-1/2">
                    <h1 class="text-8xl font-bold mb-4 text--primary break-all">
                       Ballet
                    </h1>
                    <p class="text-xl text-gray-700 mb-5">
                        Nato da due ragazzi intraprendenti, "Ballet" e' una piattaforma di gestione delle attivita' sportive e artistiche. Che mira a semplificare la gestione delle attivita' delle scuole di danza.
                    </p>
                    <div class="main__buttons">
                        <x-button class="mr-3" variant="primary" size="lg">join us now</x-button><x-button variant="outline" size="lg">learn more</x-button>
                    </div>
                </div>
                <div class="hidden flex-1 lg:flex justify-center items-start">

                                            <img src={{ asset('img/hero.png') }} alt="" class="max-w-full h-auto">


                </div>
            </div>
     </div>

    </header>
    <div class="servizi" id="servizi">
        <div class="md:container px-4">

                    <h2 class="text-3xl font-bold mb-4 ">
                        Servizi
                    </h2>
                    <p class="text-base  mb-5">
                        Offriamo una serie di servizi per agevolare la gestione della tua scuola di danza. Tra cui:
                    </p>

<div class="servizi__wrapper flex flex-wrap justify-center lg:justify-start">
    <div class="servizi__item flex-1">
        <div class="servizi__content">
            <div class="servizi__icon"> <img src={{ asset('icons/bar-chart.svg') }} alt="" class="max-w-full h-auto"></div>
            <h3 class="text-2xl font-semibold">Gestione del personale e degli studenti</h3>
            <p class="servizi__text">
                Teniamo traccia del bilancio della scuola, delle transazioni scuola-studente/scuola-personale,mandando anche un preavviso in caso di ritardo del pagamento.

            </p>
        </div>
    </div>
    <div class="servizi__item flex-1">
        <div class="servizi__content">
            <div class="servizi__icon">
                <img src={{ asset('icons/planner.svg') }} alt="" class="max-w-full h-auto">
            </div>
            <h3 class="text-2xl font-semibold">Segnalazione di eventi imminenti</h3>
            <p class="servizi__text">
               Segnaliamo eventi come transazioni, saggi, open day, riunioni ecc...
            </p>
        </div>
    </div>
    <div class="servizi__item flex-1">
        <div class="servizi__content">
            <div class="servizi__icon">
                <img src={{ asset('icons/agile.svg') }} alt="" class="max-w-full h-auto">
            </div>
            <h3 class="text-2xl font-semibold">Semplificazione degli iter burocratici</h3>
            <p class="servizi__text">
                Semplifichiamo tutti i processi burocratici quotidiani delle scuole di ballo grazie a pdf precompilati con dati pronti alla stampa.
            </p>
        </div>
    </div>
    <div class="servizi__item flex-1">
        <div class="servizi__content">
            <div class="servizi__icon">
                <img src={{ asset('icons/communication.svg') }} alt="" class="max-w-full h-auto">
            </div>
            <h3 class="text-2xl font-semibold">Facilitiamo la comunicazione</h3>
            <p class="servizi__text">
                Agevoliamo la comunicazione tra scuola-studente-personale. Per tanto ad ogni studente sara' fornito un calendario programmazione attivita'.
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
    <section class="chi">
        <div class="md:container px-4">
            <h2 class="text-3xl font-bold mb-4 ">
                Chi siamo
            </h2>
            <p class="text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptate reprehenderit inventore ducimus. Inventore harum, cum esse nostrum doloremque incidunt.
            </p>
<div class="chi__wrapper flex flex-wrap">
    <div class="chi__item">
        <div class="chi__content">
            <div class="chi__icon">
                <img src={{ asset('img/trust.svg') }} alt="" class="max-w-full h-auto">
            </div>
            <div class="chi__para">
            <h3 class="text-2xl font-semibold">
                Oriabure Trust
            </h3>
            <p class="chi__text">
               junior fullstack web developer, operante nel settore ormai da un anno.

            </p></div>
        </div>
    </div>
    <div class="chi__item">
        <div class="chi__content">
            <div class="chi__icon">
                <img src={{ asset('img/ale.svg') }} alt="" class="max-w-full h-auto">
            </div>
            <div class="chi__para">
            <h3 class="text-2xl font-semibold">
                Alessio Grilli
            </h3>
            <p class="chi__text">
                junior fullstack web developer, operante nel settore ormai da un anno.
            </p></div>
        </div>
    </div>
</div>
        </div>
    </section>
    <section class="prezzi">
        <div class="md:container px-4">
            <h2 class="text-3xl font-bold mb-4">
                Prezzi
            </h2>
            <div class="prezzi__wrapper">
                <div class="prezzi__header mb-5 lg:mb-10 flex items-center justify-center">
                    <span class="px-4">Mensile</span>
                    <button class="switch">
    <div class="switch__wrapper"><div class="switch__item"></div></div>

</button><span class="px-4">Annuale  <span class="text-green-500 text-sm">(-20%)</span></span>
                </div>
                <div class="prezzi__content flex flex-wrap justify-center lg:justify-start">
                    <div class="prezzi__container flex-1">
                    <div class="prezzi__item">
                        <h3 class="text-xl font-semibold mb-3">
                            Gratis
                        </h3>
                        <p class="text-base mb-5">
                            Ideale per piccole scuole di ballo.
                        </p>
<p class=" mb-5"> <span class="text-4xl font-bold">0</span>,00&euro;/mese</p>
<x-button variant='outline' size='md' class="mb-5 relative translate-x-1/2">Comincia ora</x-button>
<hr class="text-gray-200 mb-5"/>

<ul class="prezzi__list"><li class="prezzi__list-item"><span class="text-green-500">&check;</span> monitoraggio degli studenti/personale</li>
<li class="prezzi__list-item"><span class="text-green-500">&check;</span> facilitazione della communicazione</li></ul>


                    </div>
                    </div>
                    <div class="prezzi__container flex-1">
                        <div class="prezzi__item lg:scale-y-110">
                            <h3 class="text-xl font-semibold mb-3">
                                Standard
                            </h3>
                            <p class="text-base mb-5">
                                Ideale per piccole o medie scuole di ballo.
                            </p>
    <p class=" mb-5"> <span class="text-4xl font-bold">15</span>,00&euro;/mese</p>
    <x-button variant='primary' size='md' class="mb-5 relative translate-x-1/2">Comincia ora</x-button>
    <hr class="text-gray-200 mb-5"/>

    <ul class="prezzi__list"><li class="prezzi__list-item"><span class="text-green-500">&check;</span> monitoraggio degli studenti/personale</li>
    <li class="prezzi__list-item"><span class="text-green-500">&check;</span> facilitazione della communicazione</li>
    <li class="prezzi__list-item"><span class="text-green-500">&check;</span> segnalazione di eventi imminenti</li></ul>


                        </div>
                        </div>
                        <div class="prezzi__container flex-1">
                            <div class="prezzi__item">
                                <h3 class="text-xl font-semibold mb-3">
                                    Premium
                                </h3>
                                <p class="text-base mb-5">
                                    Ideale per grandi scuole di ballo.
                                </p>
        <p class=" mb-5"> <span class="text-4xl font-bold">100</span>,00&euro;/mese</p>
        <x-button variant='outline' size='md' class="mb-5 relative translate-x-1/2">Comincia ora</x-button>
        <hr class="text-gray-200 mb-5"/>

        <ul class="prezzi__list"><li class="prezzi__list-item"><span class="text-green-500">&check;</span> monitoraggio degli studenti/personale</li>
        <li class="prezzi__list-item"><span class="text-green-500">&check;</span> facilitazione della communicazione</li><li class="prezzi__list-item"><span class="text-green-500">&check;</span> segnalazione di eventi imminenti</li><li class="prezzi__list-item"><span class="text-green-500">&check;</span> Semplificazione degli iter burocratici</li></ul>


                            </div>
                            </div>
                </div>
                </div>
            </div>

    </section>
</main>
    </body>
</html>
