<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ISLAND OF PROJECTS, Projet COVID 19, Top Projets, Nos Statistiques, Les Startup qui nous font confiance">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">



    @if (Route::current()->getName() == 'detail')
        <link rel="stylesheet" href="{{ asset('css/Details-Projets.css') }}" media="screen">
    @else
        <link rel="stylesheet" href="{{ asset('css/Acceuil.css') }}" media="screen">
    @endif

    @if (Route::current()->getName() == 'soumettre')
        <link rel="stylesheet" href="{{ asset('css/Soumettre-son-projet.css') }}" media="screen">
    @endif
    @if (Route::current()->getName() == 'voir')
        <link rel="stylesheet" href="{{ asset('css/Voir-sur-la-carte.css') }}" media="screen">
    @endif
    @if(Route::current()->getName() == 'carte')
        <link rel="stylesheet" href="{{ asset('css/Voir-sur-la-carte.css') }}" media="screen">
    @endif
    @if (Route::current()->getName() == 'editer')
        <link rel="stylesheet" href="{{ asset('css/Editer-son-profil.css') }}" media="screen">
    @endif
    @if (Route::current()->getName() == 'categorie')
        <link rel="stylesheet" href="{{ asset('css/categories.css') }}" media="screen">
    @endif
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>


    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="u-clearfix u-header u-white u-header" id="sec-0606"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
                <a href="#" class="u-image u-logo u-image-1" data-image-width="2084" data-image-height="984">
                    <img src="{{ asset('images/LOGOISLANDOFPROJECTS1-01.png') }}" class="u-logo-image u-logo-image-1" data-image-width="182.4617">
                </a>
                <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0;">
                        <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 9px 34px; font-size: calc(1em + 18px);">
                            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                                    </symbol>
                                </defs></svg>
                        </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('Acceuil') }}" style="padding: 10px 20px;">PROJET / IDEES</a>
                            </li>

                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('carte') }}" style="padding: 10px 20px;">VOIR SUR LA CARTE</a>
                                <div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ route('carte') }}">COVID 19</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ route('carte') }}">Autres</a>
                                        </li></ul>
                                </div>
                                @if(Auth()->user())
                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('editer') }}" style="padding: 10px 20px;">{{ auth()->user()->name }}</a>
                                @if (auth()->user()->file)
                            </li><li class="u-nav-item"><img src="{{ asset('uploadprofile/'.auth()->user()->file) }}" height="70" width="90" class=" rounded-circle u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('editer') }}" style="padding: 10px 20px;">
                                @else
                            </li><li class="u-nav-item"><img src="{{ asset('images/avatar.jpg') }}" height="70" width="90" class=" rounded-circle u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('editer') }}" style="padding: 10px 20px;">
                                @endif

                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('DECONNEXION') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                    @csrf
                                </form>
                                @endif
                                @guest
                            @if (Route::has('register'))
                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('login') }}" style="padding: 10px 20px;">SE CONNECTER</a>
                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('register') }}" style="padding: 10px 20px;">S'INSCRIRE</a>
                        @endif
                        @endguest
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('Acceuil') }}" style="padding: 10px 20px;">PROJET / IDEES</a>


                                </li>

                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('carte') }}" style="padding: 10px 20px;">VOIR SUR LA CARTE</a>
                                    <div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('carte') }}">COVID 19</a>
                                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('carte') }}">Autres</a>
                                            </li></ul>
                                    </div>
                                    @if(Auth()->user())
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"  href="{{ route('editer') }}" style="padding: 10px 20px;">{{ auth()->user()->name }}</a>
                                    @if (auth()->user()->file)
                                </li><li class="u-nav-item"><img alt="{{ auth()->user()->name }}"  src="{{ asset('uploadprofile/'.auth()->user()->file) }}" height="70" width="90" class="rounded-circle " href="{{ route('editer') }}" style="padding: 10px 20px;">
                                @else
                                </li><li class="u-nav-item"><img alt="{{ auth()->user()->name }}" src="{{ asset('images/avatar.jpg') }}" height="70" width="90" class="rounded-circle " href="{{ route('editer') }}" style="padding: 10px 20px;">
                                    @endif
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('DECONNEXION') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                    @endif
                                    @guest
                                        @if (Route::has('register'))
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('login') }}" style="padding: 10px 20px;">SE CONNECTER</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('register') }}" style="padding: 10px 20px;">S'INSCRIRE</a>
                                    @endif
                                    @endguest
                                </li></ul>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div></header>


        <main>
            @yield('content')
        </main>
    </div>







    <footer class="u-align-center u-clearfix u-footer u-grey-70" id="sec-0052"><div class="u-clearfix u-sheet u-sheet-1">
            <a href="#" class="u-image u-logo u-image-1" data-image-width="1600" data-image-height="755">
                <img src="{{ asset('images/LOGOISLANDOFPROJECTS1-01.png') }}" class="u-logo-image u-logo-image-1" data-image-width="225.4547">
            </a>
            <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1"><!--position-->
                                <div data-position="" class="u-position u-position-1"><!--block-->
                                    <div class="u-block">
                                        <div class="u-block-container u-clearfix"><!--block_header-->
                                            <h5 class="u-block-header u-text u-text-1"><!--block_header_content--><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                                            <div class="u-block-content u-text u-text-2"><!--block_content_content-->Island of project est un reservoir<br>de projet. qui offre d'une part aux investiseurs<br>une vue sur une ensemble de tres riche<br>&nbsp;et d'autre part&nbsp;<br>offre une visibilite aux divers projet a travers le monde entier<!--/block_content_content-->
                                            </div><!--/block_content-->
                                        </div>
                                    </div><!--/block-->
                                </div><!--/position-->
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                            <div class="u-container-layout u-valign-top-xs u-container-layout-2">
                                <p class="u-align-center u-text u-text-3">
                                    <a href="Acceuil.html">Projet/Idees</a>
                                </p>
                                <p class="u-align-center u-text u-text-4">
                                    <a href="Inscription.html">S'incrire</a>
                                </p>
                                <p class="u-align-center u-text u-text-5">
                                    <a href="Connexion.html">Se Connecter</a>
                                </p>
                                <span class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-spacing-10 u-text-palette-1-base u-icon-1">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3313"></use></svg>
                    <svg version="1.1" id="svg-3313" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" class="u-svg-content"><path style="fill:#1081E0;" d="M38.853,5.324L38.853,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C6.751,11.72,6.031,23.763,11.459,31L26,52l14.541-21C45.969,23.763,45.249,11.72,38.853,5.324z M26.177,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S29.491,24,26.177,24z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                  </span>
                                <p class="u-align-center u-text u-text-6">Melen Yaounde&nbsp;<br>Cameroun
                                </p>
                                <span class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-spacing-10 u-text-palette-1-base u-icon-2">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 59.998 59.998" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-282b"></use></svg>
                    <svg version="1.1" id="svg-282b" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59.998 59.998" style="enable-background:new 0 0 59.998 59.998;" xml:space="preserve" class="u-svg-content"><path style="fill:#E7ECED;" d="M42.594,58.999H17.404c-1.881,0-3.405-1.525-3.405-3.405V4.404c0-1.881,1.525-3.405,3.405-3.405
	h25.189c1.881,0,3.405,1.525,3.405,3.405v51.189C45.999,57.474,44.474,58.999,42.594,58.999z"></path><circle style="fill:#FFFFFF;" cx="29.999" cy="53.999" r="3"></circle><path style="fill:#424A60;" d="M29.999,4.999h-4c-0.553,0-1-0.447-1-1s0.447-1,1-1h4c0.553,0,1,0.447,1,1S30.552,4.999,29.999,4.999
	z"></path><path style="fill:#424A60;" d="M33.999,4.999h-1c-0.553,0-1-0.447-1-1s0.447-1,1-1h1c0.553,0,1,0.447,1,1S34.552,4.999,33.999,4.999
	z"></path><path style="fill:#7383BF;" d="M55.904,21.241c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414
	c3.736-3.736,3.736-9.815,0-13.552c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0c4.516,4.516,4.516,11.864,0,16.38
	C56.416,21.144,56.16,21.241,55.904,21.241z"></path><path style="fill:#7383BF;" d="M51.693,19.241c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414
	c1.237-1.236,1.918-2.884,1.918-4.638s-0.681-3.401-1.918-4.639c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0
	c1.615,1.614,2.504,3.765,2.504,6.053s-0.889,4.438-2.504,6.052C52.205,19.144,51.949,19.241,51.693,19.241z"></path><path style="fill:#7383BF;" d="M4.094,21.241c-0.256,0-0.512-0.098-0.707-0.293c-4.516-4.516-4.516-11.864,0-16.38
	c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414c-3.736,3.736-3.736,9.815,0,13.552c0.391,0.391,0.391,1.023,0,1.414
	C4.605,21.144,4.35,21.241,4.094,21.241z"></path><path style="fill:#7383BF;" d="M8.305,18.966c-0.256,0-0.512-0.098-0.707-0.293c-1.615-1.614-2.504-3.765-2.504-6.053
	s0.889-4.438,2.504-6.052c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414c-1.237,1.236-1.918,2.884-1.918,4.638
	s0.681,3.401,1.918,4.639c0.391,0.391,0.391,1.023,0,1.414C8.816,18.868,8.561,18.966,8.305,18.966z"></path><rect x="13.999" y="6.999" style="fill:#424A60;" width="32" height="42"></rect><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                  </span>
                                <p class="u-align-center u-text u-text-7">+237 694715248</p>
                            </div>
                        </div>
                        <div class="u-align-right u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
                            <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-container-layout-3">
                                <p class="u-align-center-sm u-align-center-xs u-text u-text-8">Qui sommes nous ?</p>
                                <p class="u-align-center-sm u-align-center-xs u-text u-text-9">Emplois &amp; Stage</p>
                                <p class="u-align-center-sm u-align-center-xs u-text u-text-10">Equipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-11">Copyright 2020 Island of Project</p>
            <p class="u-align-center u-text u-text-12">&nbsp;MOOVVISION&nbsp; TECHNOLOGIES</p>
            <div class="u-social-icons u-spacing-20 u-social-icons-1">
                <a class="u-social-url" target="_blank" href="">
            <span class="u-icon u-icon-circle u-social-facebook u-social-type-color u-icon-3">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-21c4"></use></svg>
              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-21c4" class="u-svg-content"><circle fill="#3B5998" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg>
            </span>
                </a>
                <a class="u-social-url" target="_blank" href="#">
            <span class="u-icon u-icon-circle u-social-type-color u-social-youtube u-icon-4">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1c8d"></use></svg>
              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-1c8d" class="u-svg-content"><circle fill="#D22215" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg>
            </span>
                </a>
                <a class="u-social-url" target="_blank" href="#">
            <span class="u-icon u-icon-circle u-social-google u-social-type-color u-icon-5">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c5ae"></use></svg>
              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-c5ae" class="u-svg-content"><circle fill="#DC4E41" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M60.8,76.3c-6.6,8.6-19,11.1-29,7.7c-10.6-3.5-18.4-14.2-18.2-25.5C13,44.6,25.3,31.8,39.1,31.6
            c7.1-0.6,14,2.1,19.3,6.6c-2.2,2.4-4.4,4.8-6.9,7.1c-4.8-2.9-10.4-5-15.9-3.1c-8.8,2.6-14.3,13-10.9,21.8
            c2.7,9.1,13.7,14.1,22.5,10.2c4.5-1.6,7.5-5.7,8.7-10.2c-5.1-0.1-10.2,0-15.5-0.2c0-3,0-6.1,0-9.2c8.6,0,17.1,0,25.7,0
            C66.7,62.3,65.5,70.4,60.8,76.3z M98.3,62.5c-2.6,0-5.1,0-7.7,0c0,2.6,0,5.1,0,7.7c-2.6,0-5.1,0-7.7,0c0-2.6,0-5.1,0-7.7
            c-2.6,0-5.1,0-7.7,0c0-2.6,0-5.1,0-7.7c2.6,0,5.1,0,7.7,0c0-2.6,0-5.1,0.1-7.7c2.6,0,5.1,0,7.7,0c0,2.6,0,5.1,0,7.7
            c2.6,0,5.1,0,7.7,0C98.3,57.3,98.3,59.9,98.3,62.5z"></path></svg>
            </span>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>
