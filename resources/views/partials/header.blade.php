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
                    <a href="index.php"><img src="assets/img/logo.png" alt="SENIMMO"></a>
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
            <a href="index.php"><img src="assets/img/logo.png" alt="SENIMMO"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <!--                    <li class="menu-item-has-children active">-->
                <li class="active">
                    <a href="index.php">Accueil</a>
                    <!--                        <ul class="sub-menu th-submenu th-open" style="">-->
                    <!--                            <li><a href="index.php">Home Real Estate</a></li>-->
                    <!--                            <li><a href="home-2.html">Home Propriétés</a></li>-->
                    <!--                            <li><a href="index.php">Home Map</a></li>-->
                    <!--                        </ul>-->
                </li>
                <li>
                    <a href="about.php">A Propos</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Propriétés</a>
                    <ul class="sub-menu">
                        <li><a href="property.php">Properties</a></li>
                        <li><a href="property-details.php">Properties Details</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#">Agences</a>
                    <!--                        <ul class="sub-menu">-->
                    <!--                            <li><a href="agency.html">Agencies </a></li>-->
                    <!--                            <li><a href="agency-details.html">Agency Details</a></li>-->
                    <!--                        </ul>-->
                </li>
                <li class="">
                    <a href="service.php">Services</a>
                    <!--<ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">Agents Page</a></li>
                        <li><a href="team-details.html">Agent Details</a></li>
                        <li><a href="gallery.html">Gallery Page</a></li>
                        <li><a href="service.php">Service Page</a></li>
                        <li><a href="service-right-sidebar.php">Service with sidebar</a></li>
                        <li><a href="service-details.php">Service Details</a></li>
                        <li><a href="pricing.html">Pricing Plan</a></li>
                        <li><a href="neighborhood-guide.html">Neighborhood Guide</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>-->
                </li>
                <li class="">
                    <a href="blog.php">Blog</a>
                    <!--                        <ul class="sub-menu">-->
                    <!--                            <li><a href="blog.html">Blog Grid</a></li>-->
                    <!--                            <li><a href="blog-grid-right-sidebar.html">Blog Grid With Right Sidebar</a></li>-->
                    <!--                            <li><a href="blog-grid-left-sidebar.html">Blog Grid With Left Sidebar</a></li>-->
                    <!--                            <li><a href="blog-details.html">Blog Details</a></li>-->
                    <!--                        </ul>-->
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
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
                                    <a href="about.php">A Propos</a>
                                </li>
                                <li class="">
                                    <a href="property.php">Propriétés</a>
                                    <!--                                        <ul class="sub-menu">-->
                                    <!--                                            <li><a href="property.php">Properties</a></li>-->
                                    <!--                                            <li><a href="property-details.html">Properties Details</a></li>-->
                                    <!--                                        </ul>-->
                                </li>
                                <li class="">
                                    <a href="agency.php">Agences</a>
                                    <!--                                        <ul class="sub-menu">-->
                                    <!--                                            <li><a href="agency.html">Agencies </a></li>-->
                                    <!--                                            <li><a href="agency-details.html">Agency Details</a></li>-->
                                    <!--                                        </ul>-->
                                </li>
                                <li class="">
                                    <a href="service.php">Services</a>
                                    <!--                                        <ul class="sub-menu">-->
                                    <!--                                            <li class="menu-item-has-children">-->
                                    <!--                                                <a href="#">Shop</a>-->
                                    <!--                                                <ul class="sub-menu">-->
                                    <!--                                                    <li><a href="shop.html">Shop</a></li>-->
                                    <!--                                                    <li><a href="shop-details.html">Shop Details</a></li>-->
                                    <!--                                                    <li><a href="cart.html">Cart Page</a></li>-->
                                    <!--                                                    <li><a href="checkout.html">Checkout</a></li>-->
                                    <!--                                                    <li><a href="wishlist.html">Wishlist</a></li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </li>-->
                                    <!--                                            <li><a href="team.html">Agents Page</a></li>-->
                                    <!--                                            <li><a href="team-details.html">Agent Details</a></li>-->
                                    <!--                                            <li><a href="gallery.html">Gallery Page</a></li>-->
                                    <!--                                            <li><a href="service.html">Service Page</a></li>-->
                                    <!--                                            <li><a href="service-right-sidebar.html">Service with sidebar</a></li>-->
                                    <!--                                            <li><a href="service-details.html">Service Details</a></li>-->
                                    <!--                                            <li><a href="pricing.html">Pricing Plan</a></li>-->
                                    <!--                                            <li><a href="neighborhood-guide.html">Neighborhood Guide</a></li>-->
                                    <!--                                            <li><a href="faq.html">Faq Page</a></li>-->
                                    <!--                                            <li><a href="error.html">Error Page</a></li>-->
                                    <!--                                        </ul>-->
                                </li>
                                <li class="">
                                    <a href="blog.php">Blog</a>
                                    <!--                                        <ul class="sub-menu">-->
                                    <!--                                            <li><a href="blog.html">Blog Grid</a></li>-->
                                    <!--                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid With Right Sidebar</a></li>-->
                                    <!--                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid With Left Sidebar</a></li>-->
                                    <!--                                            <li><a href="blog-details.html">Blog Details</a></li>-->
                                    <!--                                        </ul>-->
                                </li>
                                <li>
                                    <a href="contact.php">Contactez-nous</a>
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
