<!doctype html>
<html class="no-js home-2" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SENIMMOBILIER - Agence de gestion immobilier</title>
    <meta name="author" content="SENIMMOBILIER">
    <meta name="description" content="SENIMMOBILIER - Agence de gestion immobilier">
    <meta name="keywords" content="SENIMMOBILIER, agence,immobilier">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="{{asset('web/assets/img/favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('web/assets/img/favicon/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('web/assets/img/favicon/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('web/assets/img/favicon/apple-touch-icon.png')}}" />
    <meta name="apple-mobile-web-app-title" content="SenImmo" />
    <link rel="manifest" href="{{asset('web/assets/img/favicon/site.webmanifest')}}" />

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('web/assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('web/assets/css/magnific-popup.min.css')}}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{asset('web/assets/css/swiper-bundle.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">

    @stack('styles')

</head>

<body class="home-2">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!--********************************
       Code Start From Here
******************************** -->

<!--==============================
 Preloader
==============================-->
<div class="preloader ">
    <button class="th-btn preloaderCls">Annuler le chargement </button>
    <div id="preloader" class="preloader-inner">
        <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading">
                    S </span>
            <span data-text-preloader="E" class="letters-loading">
                    E </span>
            <span data-text-preloader="N" class="letters-loading">
                    N </span>
            <span data-text-preloader="I" class="letters-loading">
                    I </span>
            <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
            <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
            <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
        </div>
    </div>
</div>

{{--    <!--==============================
    Sidemenu
    ============================== -->
<div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_1_1.png" alt="Cart Image">Bosco Apple Fruit</a>
                        <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"></span>940 000</span>
                            </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_1_2.png" alt="Cart Image">Green Cauliflower</a>
                        <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"></span>899 000</span>
                            </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_1_3.png" alt="Cart Image">Mandarin orange</a>
                        <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"></span>756 000</span>
                            </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_1_4.png" alt="Cart Image">Shallot Red onion</a>
                        <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"></span>723 000</span>
                            </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_1_5.png" alt="Cart Image">Sour Red Cherry</a>
                        <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"></span>1080 000</span>
                            </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"></span>4398 000</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn wc-forward">View cart</a>
                    <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="{{ url('/') }}"><img src="assets/img/logo.png" alt="SENIMMO"></a>
                </div>
                <p class="about-text mb-4">Pillar is a luxury to the resilience, adaptability, Spacious modern villa living room with centrally placed swimming pool blending indooroutdoor.</p>

                <p class="footer-info">
                    <i class="fas fa-phone"></i>
                    <a href="tel:(+221)777000202" class="info-box_link">(+221) 77 700 02 02</a>
                </p>
                <p class="footer-info">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:commercial@senimmo.sn" class="info-box_link">commercial@senimmo.sn</a>
                </p>
                <p class="footer-info">
                    <i class="fas fa-location-dot"></i>
                    <span>West 2nd lane, Inner circular road, New York City</span>
                </p>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.php"><img src="assets/img/blog/featured-listing-sidebar-1-1.jpg" alt="Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.php"><i class="fa-solid fa-calendar-days"></i> 10 Dec, 2025</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.php">The Ever-Evolving Land cape of</a></h4>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.php"><img src="assets/img/blog/featured-listing-sidebar-1-3.jpg" alt="Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.php"><i class="fa-solid fa-calendar-days"></i> 10 Dec, 2025</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.php">The Ever-Evolving Land cape of</a></h4>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.php"><img src="assets/img/blog/featured-listing-sidebar-1-3.jpg" alt="Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.php"><i class="fa-solid fa-calendar-days"></i> 10 Dec, 2025</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.php">The Ever-Evolving Land cape of</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget newsletter-widget  ">
            <h3 class="widget_title">Newsletter</h3>
            <p class="footer-text">Sign up to receive the latest articles</p>
            <form class="newsletter-form">
                <input class="form-control" type="email" placeholder="Enter Email" required="">
                <button type="submit" class="th-btn bg-theme radius w-100 mb-3">Subscribe Now</button>
            </form>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>--}}

<!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}"><img src="assets/img/logo.png" alt="SENIMMO"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <!--                    <li class="menu-item-has-children active">-->
                <li class="active">
                    <a href="{{ url('/') }}">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">A Propos</a>
                </li>
                <li class="">
                    <a href="{{ route('properties.index') }}">Propriétés</a>
                </li>
                <li class="">
                    <a href="#">Agences</a>
                </li>
                <li class="">
                    <a href="service.php">Services</a>
                </li>
                <li class="">
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contactez-nous</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Header Area
==============================-->
<header class="th-header header-default">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-solid fa-envelope"></i> <a href="mailto:infomailexample@mail.com">commercial@senimmo.com</a></li>
                            <li><i class="fa-solid fa-phone"></i> <a href="tel:(+221)777000202">(+221) 77 700 02 02</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </li>
                            <li class="lang-wrapper">
                                <div class="lang-menu">
                                    <div class="icon">
                                        <img src="{{asset('web/assets/img/icon/french.png')}}" alt="icon">
                                    </div>
                                    <select class="form-select nice-select">
                                        <option selected="">Français</option>
                                        <option>Anglais</option>
                                        <option>Espagnol</option>
                                        <option>Portugais</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="{{asset('web/assets/img/logo.png')}}" alt="SENIMMO"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <!--<li class="menu-item-has-children active">-->
                                <li class="active">
                                    <a href="{{ url('/') }}">Accueil</a>
                                    <!--                                        <ul class="mega-menu mega-menu-content allow-natural-scroll">-->
                                    <!--                                            <li>-->
                                    <!--                                                <div class="container">-->
                                    <!--                                                    <div class="row gy-4">-->
                                    <!--                                                        <div class="col-lg-4">-->
                                    <!--                                                            <div class="mega-menu-box">-->
                                    <!--                                                                <div class="mega-menu-img">-->
                                    <!--                                                                    <img src="assets/img/pages/index.jpg" alt="Home One">-->
                                    <!--                                                                    <div class="btn-wrap">-->
                                    <!--                                                                        <a href="{{ url('/') }}" class="th-btn radius">View Demo</a>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                                <h3 class="mega-menu-title"><a href="{{ url('/') }}"> <span class="text-theme">01.</span> Home Real Estate </a></h3>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                        <div class="col-lg-4">-->
                                    <!--                                                            <div class="mega-menu-box">-->
                                    <!--                                                                <div class="mega-menu-img">-->
                                    <!--                                                                    <img src="assets/img/pages/home-2.jpg" alt="Home Two">-->
                                    <!--                                                                    <div class="btn-wrap">-->
                                    <!--                                                                        <a href="home-2.html" class="th-btn radius">View Demo</a>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                                <h3 class="mega-menu-title"><a href="home-2.html"> <span class="text-theme">02.</span> Home Propriétés</a></h3>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                        <div class="col-lg-4">-->
                                    <!--                                                            <div class="mega-menu-box">-->
                                    <!--                                                                <div class="mega-menu-img">-->
                                    <!--                                                                    <img src="assets/img/pages/home-3.jpg" alt="Home Three">-->
                                    <!--                                                                    <div class="btn-wrap">-->
                                    <!--                                                                        <a href="{{ url('/') }}" class="th-btn radius">View Demo</a>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                                <h3 class="mega-menu-title"><a href="{{ url('/') }}"> <span class="text-theme">03.</span> Home Map</a></h3>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </li>-->
                                    <!--                                        </ul>-->
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">A Propos</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('properties.index') }}">Propriétés</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('agencies.index') }}">Agences</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('services.index') }}">Services</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('blogs.index') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contactez-nous</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="contact.php" class="th-btn radius bg-black"><i class="fa-regular fa-house-chimney me-2"></i> Ajouter une annonce </a>
                            <a href="{{ route('login') }}" class="th-btn radius bg-auto"><i class="fa-regular fa-lock-alt me-2"></i> Se connecter </a>

                            <!--<button type="button" class="sidemenu-bar sideMenuInfo">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestion Immobilière SENIMMO') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


    @stack('styles')
</head>--}}
{{--<body>
<div id="app">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-building me-2"></i>
                {{ config('app.name', 'ImmobilierPro') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('properties.index') }}">Propriétés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-circle me-1"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">
                                            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                        </a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile') }}">
                                            <i class="fas fa-user me-2"></i>Profil
                                        </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item me-2">
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-gradient btn-sm" href="{{ route('register') }}">S'inscrire</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5>{{ config('app.name', 'ImmobilierPro') }}</h5>
                    <p class="text-muted">
                        Votre partenaire immobilier de confiance depuis plus de 15 ans.
                        Nous vous accompagnons dans tous vos projets immobiliers.
                    </p>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ route('properties.index') }}">Propriétés</a></li>
                        <li><a href="{{ route('about') }}">À propos</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Vente de biens</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Estimation gratuite</a></li>
                        <li><a href="#">Gestion locative</a></li>
                        <li><a href="#">Conseil en investissement</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>123 Avenue des Champs-Élysées, Paris</li>
                        <li><i class="fas fa-phone me-2"></i>+33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope me-2"></i>contact@immobilierpro.com</li>
                    </ul>
                </div>
            </div>

            <hr class="my-4">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'ImmobilierPro') }}. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-decoration-none me-3">Mentions légales</a>
                    <a href="#" class="text-decoration-none me-3">Politique de confidentialité</a>
                    <a href="#" class="text-decoration-none">CGV</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        offset: 100,
        once: true
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        }
    });

    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            if (alert.classList.contains('alert-dismissible')) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        });
    }, 5000);
</script>

@stack('scripts')
</body>
</html>--}}

    <!--==============================
	Main Content Area
    ==============================-->
    @yield('content')
    <!--==============================
	Main Content End
    ==============================-->


<!--==============================
	Footer Area
    ==============================-->
<footer class="footer-wrapper footer-default footer-layout3">
    <div class="widget-area">
        <div class="container">
            <div class="footer-all-widget-wrapper">
                <div class="footer-all-widget-item">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <!--<div class="about-logo">
                                <a href="{{ url('/') }}"><img src="assets/img/logo-white.svg" alt="SENIMMO"></a>
                            </div>-->
                            <p class="about-text">SENIMMO <br>Votre partenaire immobilier de confiance depuis plus de 15 ans. Nous vous accompagnons dans tous vos projets immobiliers..</p>

                            <div class="footer-info-wrap">
                                <div class="footer-info">
                                    <i class="fas fa-phone"></i>
                                    <p class="info-box_link"><a href="tel:(+221)777000202">(+221) 77 700 02 02</a></p>
                                </div>
                                <div class="footer-info">
                                    <i class="fas fa-envelope"></i>
                                    <p class="info-box_link"> <a href="mailto:commercial@senimmo.sn">commercial@senimmo.sn</a></p>

                                </div>
                                <div class="footer-info">
                                    <i class="fas fa-location-dot"></i>
                                    <p class="info-box_link"><span>West 2nd lane, Inner circular road, New York City</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-all-widget-item">
                    <div class="footer-right-wrap">
                        <div class="footer-item-wrap">
                            <div class="footer-item">
                                <div class="widget widget_nav_menu footer-widget">
                                    <h3 class="widget_title">Navigation</h3>
                                    <div class="menu-all-pages-container">
                                        <ul class="menu">
                                            <li><a href="{{ url('/') }}">Accueil</a></li>
                                            <li><a href="{{ route('about') }}">A Propos</a></li>
                                            <li><a href="{{ route('properties.index') }}">Propriétés</a></li>
                                            <li><a href="{{ route('agencies.index') }}">Agences</a></li>
                                            <li><a href="{{ route('services.index') }}">Services</a></li>
                                            <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                                            <li><a href="{{ route('contact') }}">Contactez-Nous</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-item">
                                <div class="widget widget_nav_menu footer-widget">
                                    {{--<h3 class="widget_title">Liens rapides</h3>
                                    <div class="menu-all-pages-container">
                                        <ul class="menu">
                                            <li><a href="../../web/service.php">Strategy Services</a></li>
                                            <li><a href="../../web/service.php">Management</a></li>
                                            <li><a href="../../web/service.php">Privacy & Policy</a></li>
                                            <li><a href="../../web/service.php">Sitemap</a></li>
                                            <li><a href="../../web/service.php">Term & Conditions</a></li>
                                        </ul>
                                    </div>--}}
                                </div>
                            </div>
                            <div class="footer-item">
                                <div class="widget widget_nav_menu footer-widget">
                                    <h3 class="widget_title">Services</h3>
                                    <div class="menu-all-pages-container">
                                        <ul class="menu">
                                            <li><a href="#">Vente de bien</a></li>
                                            <li><a href="#">Location</a></li>
                                            <li><a href="#">Estimation gratuite</a></li>
                                            <li><a href="#">Gestion locative</a></li>
                                            <li><a href="#">Conseil en Investissement</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-item">
                                <div class="widget newsletter-widget footer-widget">
                                    <h3 class="widget_title">Newsletter</h3>
                                    <p class="footer-text">S'inscrire pour recevoir nos derniers articles</p>
                                    <form class="newsletter-form">
                                        <input class="form-control" type="email" placeholder="Entrer votre Email" required="">
                                        <button type="submit" class="th-btn bg-theme radius w-100 mb-3">Souscrire</button>
                                        <div class="form-group">
                                            <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                            <label for="reviewcheck">J'ai lu et accepté les termes & conditions<span class="checkmark"></span></label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--<div class="footer-right-bottom-wrap">
                            <div class="footer-right-bottom-item">
                                <div class="footer-right-bottom-item__thumb help">
                                    <img src="assets/img/icon/footer-default-icon-1-1.png" alt="img">
                                </div>
                                <div class="footer-right-bottom-item__content">
                                    <h4 class="box-title"><a href="contact.html">Need to Home buy or sell?</a></h4>
                                </div>
                            </div>
                            <div class="footer-right-bottom-item scan">
                                <div class="footer-right-bottom-item__thumb">
                                    <img src="assets/img/icon/footer-default-icon-1-2.png" alt="img">
                                </div>
                                <div class="footer-right-bottom-item__content">
                                    <p>Download on the</p>
                                    <h4 class="box-title"><a href="https://www.apple.com/app-store/">App Store</a></h4>
                                </div>
                                <div class="footer-right-bottom-item__right">
                                    <img src="assets/img/icon/footer-default-icon-1-2-scan.png" alt="img">
                                </div>
                            </div>
                            <div class="footer-right-bottom-item scan">
                                <div class="footer-right-bottom-item__thumb">
                                    <img src="assets/img/icon/footer-default-icon-1-3.png" alt="img">
                                </div>
                                <div class="footer-right-bottom-item__content">
                                    <p>GET IT ON</p>
                                    <h4 class="box-title"><a href="https://play.google.com/store/apps">Google Play</a></h4>
                                </div>
                                <div class="footer-right-bottom-item__right">
                                    <img src="assets/img/icon/footer-default-icon-1-2-scan.png" alt="img">
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <!--            <div class="footer-bottom-top-shape animation-infinite" data-bg-src="assets/img/icon/footer-bottom-top-shape.png"></div>-->
        <div class="container">
            <div class="row gy-3 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-3">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a href="../../web/{{ url('/') }}">SENIMMO</a>. Tous droits réservés.</p>
                </div>
                <div class="col-auto text-center">
                    <p class="copyright-text"><a href="#" class="text-white text-decoration-underline">Politique de confidentialité</a> - <a href="#" class="text-white text-decoration-underline">Mentions légale</a></p>
                </div>
                <div class="col-auto">
                    <div class="footer-default-copy-right">
                        <p>Médias sociaux:</p>
                        <div class="th-social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--********************************
        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<!--==============================
All Js File
============================== -->
<!-- Jquery -->
<script src="{{asset('web/assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
<!-- Swiper Js -->
<script src="{{asset('web/assets/js/swiper-bundle.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('web/assets/js/bootstrap.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('web/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Counter Up -->
<script src="{{asset('web/assets/js/jquery.counterup.min.js')}}"></script>
<!-- Tilt JS -->
<script src="{{asset('web/assets/js/tilt.jquery.min.js')}}"></script>
<!-- Isotope Filter -->
<script src="{{asset('web/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('web/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('web/assets/js/jquery-ui.min.js')}}"></script>
<!-- Lenis -->
<script src="{{asset('web/assets/js/lenis.min.js')}}"></script>

<!-- 360 degree Js start -->
<script src="{{asset('web/assets/js/360.min.js')}}"></script>
<script src="{{asset('web/assets/js/panolens.min.js')}}"></script>
<!-- 360 degree Js end -->

<!-- Wow Js -->
<script src="{{asset('web/assets/js/wow.min.js')}}"></script>
<!-- nice select -->
<script src="{{asset('web/assets/js/nice-select.min.js')}}"></script>

<!-- Main Js File -->
<script src="{{asset('web/assets/js/main.js')}}"></script>

@stack('scripts')

</body>

</html>

