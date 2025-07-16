@extends('layouts.app')

@section('title', 'Toutes les Propriétés - SENIMMO')
@section('description', 'Découvrez toutes nos propriétés disponibles à la vente et à la location au Sénégal.')

@push('styles')
{{--    <style>
        .properties-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 60px 0;
        }

        .filter-sidebar {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .property-grid .property-card {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .property-grid .property-card:hover {
            transform: translateY(-5px);
        }

        .sort-controls {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .results-count {
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>--}}
@endpush

@section('content')

    <!--==============================
    Breadcumb
    ============================== -->

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('web/assets/img/blog/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Propriétés</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li>Propriétés</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="th-sort-bar property-style">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <h4 class="box-title text-start fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s">Liste des propriétés</h4>
                    </div>

                    <div class="col-md-auto">
                        <div class="sorting-filter-wrap fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="nav" role=tablist>
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fa-solid fa-list"></i></a>
                                <a href="#" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"> <i class="fa-light fa-grid-2"></i></a>
                            </div>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Trie par défaut</option>
                                    <option value="popularity">Trier par popularité</option>
                                    <option value="rating">Trier par note moyenne</option>
                                    <option value="date">Trier par le plus récent</option>
                                    <option value="price">Trier par prix : du plus bas au plus élevé</option>
                                    <option value="price-desc">Trier par prix : du plus élevé au plus bas</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                    <div class="row gy-40">

                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter aux favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Charming Beach House</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">179 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">335,800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Cozy Cottage</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">250 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Modern Beach House</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">189 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Cozy Mountain Cabin</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">179 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Modern Apartment</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">132 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-8.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-8.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Seaside Villa 5078</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">245 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-8.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-8.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Ranch Style Home</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">415 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-10.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-10.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Charming Beach House</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">179 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-10.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-10.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-11.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-11.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">179 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-11.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-11.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-12.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-12.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Cozy Cottage</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">132 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 fadeinup wow">
                            <div class="popular-list-1 grid-style">
                                <div class="thumb-wrapper">
                                    <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-12.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-12.jpg') }}" alt="Image"></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}" alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="icon-wrap">
                                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="actions-style-2-wrapper">
                                        <div class="actions style-2">
                                            <a href="#" class="icon-btn">
                                                <span class="action-text">Ajouter au favoris</span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </a>
                                            <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                <span class="action-text">Voir Tout</span>
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-badge">
                                        <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                        <p>For Sale</p>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Modern Beach House</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                    <div class="property-bottom">
                                        <h6 class="box-title">245 800 000</h6>
                                        <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="th-pagination text-center pt-4">
                            <ul>
                                <li><a href="blog.php"><i class="far fa-arrow-left"></i></a></li>
                                <li><a href="blog.php">1</a></li>
                                <li><a href="blog.php">2</a></li>
                                <li><a href="blog.php">3</a></li>
                                <li><a class="next-page" href="blog.php">Suivant <i class="far fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                    <div class="row gy-40 justify-content-center">

                        <div class="col-xl-8 col-lg-12">
                            <div class="row gy-30">
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Charming Beach House</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">179 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-2.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">335 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-3.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Cozy Cottage</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">250 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-4.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Modern Beach House</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">189 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-5.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Cozy Mountain Cabin</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">179 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-6.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Modern Apartment</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">132 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-7.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Seaside Villa 5078</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">245 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 fadeinup wow">
                                    <div class="popular-list-1 list-style">
                                        <div class="thumb-wrapper">
                                            <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-9.jpg') }}" alt="Image"></a>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <a class="popular-popup-image" href="{{ asset('web/assets/img/popular/popular-1-10.jpg') }}"><img src="{{ asset('web/assets/img/popular/popular-1-10.jpg') }}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="icon-wrap">
                                                    <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                                                    <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <div class="actions-style-2-wrapper">
                                                <div class="actions style-2">
                                                    <a href="#" class="icon-btn">
                                                        <span class="action-text">Ajouter au favoris</span>
                                                        <i class="fa-solid fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{ asset('web/assets/img/popular/popular-1-1.jpg') }}" class="icon-btn popular-popup-image">
                                                        <span class="action-text">Voir Tout</span>
                                                        <i class="fa-solid fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="popular-badge">
                                                <img src="{{ asset('web/assets/img/icon/sell_rent_icon.svg') }}" alt="icon">
                                                <p>For Sale</p>
                                            </div>
                                        </div>
                                        <div class="property-content">
                                            <div class="media-body">
                                                <h3 class="box-title"> <a href="property-details.php">Ranch Style Home</a></h3>
                                                <div class="box-text">
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                                </div>
                                            </div>

                                            <ul class="property-featured">
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bed.svg') }}" alt="icon"></div>
                                                    Lit 4
                                                </li>

                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/bath.svg') }}" alt="icon"></div>
                                                    Sdb 2
                                                </li>
                                                <li>
                                                    <div class="icon"><img src="{{ asset('web/assets/img/icon/sqft.svg') }}" alt="icon"></div>
                                                    1500 m2
                                                </li>
                                            </ul>
                                            <div class="property-bottom">
                                                <h6 class="box-title">415 800 000</h6>
                                                <a class="th-btn sm style3 pill" href="property-details.php">En savoir plus </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="th-pagination text-center pt-4">
                                    <ul>
                                        <li><a href="blog.php"><i class="far fa-arrow-left"></i></a></li>
                                        <li><a href="blog.php">1</a></li>
                                        <li><a href="blog.php">2</a></li>
                                        <li><a href="blog.php">3</a></li>
                                        <li><a class="next-page" href="blog.php">Suivant <i class="far fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @include('partials.sidebar-right')

</div>
</div>
</div>
</div>
</section>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
// Auto-submit form when filters change
const filterForm = document.getElementById('filterForm');
const selects = filterForm.querySelectorAll('select');
const checkboxes = filterForm.querySelectorAll('input[type="checkbox"]');

selects.forEach(select => {
select.addEventListener('change', function() {
filterForm.submit();
});
});

checkboxes.forEach(checkbox => {
checkbox.addEventListener('change', function() {
setTimeout(() => {
    filterForm.submit();
}, 300);
});
});

// Input location avec debounce
const locationInput = filterForm.querySelector('input[name="location"]');
let locationTimeout;

locationInput.addEventListener('input', function() {
clearTimeout(locationTimeout);
locationTimeout = setTimeout(() => {
filterForm.submit();
}, 1000);
});
});
</script>
@endpush
