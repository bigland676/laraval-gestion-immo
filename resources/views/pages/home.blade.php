@extends('layouts.app')

@section('title', 'Trouvez la Maison idéale en un clic - SENIMMO')
@section('description', 'SENIMMO vous aide à trouver la maison de vos rêves. Propriétés populaires, agents experts, maisons haut standing.')

@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!--==============================
    Hero Area
    ==============================-->
    <div class="th-hero-wrapper bg-smoke hero-3" id="hero">
        <div class="shape-mockup d-none d-xl-block" data-top="0" data-right="0">
            <img src="{{asset('web/assets/img/hero/hero-3-right-shape.png')}}" alt="img">
        </div>
        <!--        <div class="shape-mockup spin d-none d-xxl-block" data-left="3%" data-bottom="5%">-->
        <!--            <img src="assets/img/shape/hero-3-left-shape.png" alt="img">-->
        <!--        </div>-->
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-6 col-lg-12">
                    <div class="hero-style3">
                        <div class="title-area text-left mb-50">
                            <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> Bienvenue chez SENIMMO </p>
                            <h1 class="hero-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Trouvez la <span class="title2 text-theme"> Maison </span> idéale en un clic. </h1>
                        </div>
                        <div class="hero-3-search-wrap">
                            <ul class="nav nav-tabs custom fadeinup wow" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy" type="button" role="tab" aria-controls="buy" aria-selected="true">
                                        Achat
                                    </button>
                                </li>
                                <li class="nav-item disabled" role="presentation">
                                    <button class="nav-link" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="false">
                                        Vente
                                    </button>
                                </li>
                                <li class="nav-item disabled" role="presentation">
                                    <button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent" type="button" role="tab" aria-controls="rent" aria-selected="false">
                                        Location
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content fadeinup wow" id="myTabContent">
                                <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                    <div class="hero-search-wrapper">
                                        <form action="{{ route('properties.search') }}" method="GET" class="search-form">
                                            <div class="hero-search-group-wrapper search-fields">
                                                {{--<div class="form-group">
                                                    <label for="Keyword111">Mot clé</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="Keyword111" id="Keyword111" placeholder="Vous cherchez?">
                                                    </div>
                                                </div>--}}

                                                <div class="form-group">
                                                    <label for="type">Type Transaction</label>
                                                    <select name="type" id="type" class="form-select nice-select">
                                                        <option value="" disabled selected hidden>Type propriété</option>
                                                        <option value="vente">Vente</option>
                                                        <option value="location">Location</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="type">Type de propriété</label>
                                                    <select name="category" class="form-select nice-select">
                                                        <option value="">Catégorie</option>
                                                        <option value="maison">Maison</option>
                                                        <option value="appartement">Appartement</option>
                                                        <option value="terrain">Terrain</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Location11">Emplacement</label>
                                                    {{--<div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="Location11" id="Location11" placeholder="où ?">
                                                    </div>--}}
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" name="location" class="form-control" placeholder="Localisation">
                                                    </div>
                                                </div>
                                                {{--<div class="form-group">
                                                    <label for="pricing1">Prix</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="price1" id="pricing1" placeholder="0 FCFA - 100 000 FCFA">
                                                    </div>
                                                </div>--}}
                                                <div class="advance-btn-wrapper">
                                                    <div class="advance-search-btn advance-search-active">
                                                        <div class="th-btn radius style3 bg-smoke search-btn-item">
                                                            Avancé <i class="fa-solid fa-sliders-up"></i>
                                                        </div>
                                                    </div>
                                                    <button class="th-btn radius bg-theme" type="submit">
                                                        <i class="far fa-search me-2"></i> Rechercher
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                                    <div class="hero-search-wrapper">
                                        <form action="/submit-form">
                                            <div class="hero-search-group-wrapper">
                                                {{--<div class="form-group">
                                                    <label for="Keyword122">Keyword</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="Keyword122" id="Keyword122" placeholder="Looking For?">
                                                    </div>
                                                </div>--}}

                                                <div class="form-group">
                                                    <label for="Location4442">Location</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="name" id="Location4442" placeholder="Find a location">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pricing12">Pricing</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="pricing12" id="pricing12" placeholder="0 FCFA - 100 000 000 FCFA">
                                                    </div>
                                                </div>
                                                <div class="advance-btn-wrapper">
                                                    <div class="advance-search-btn advance-search-active">
                                                        <div class="th-btn radius style3 bg-smoke search-btn-item">
                                                            Advanced <i class="fa-solid fa-sliders-up"></i>
                                                        </div>
                                                    </div>
                                                    <button class="th-btn radius bg-theme">
                                                        <i class="far fa-search me-2"></i> Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                    <div class="hero-search-wrapper">
                                        <form action="/submit-form">
                                            <div class="hero-search-group-wrapper">
                                                <div class="form-group">
                                                    <label for="Keyword133">Keyword</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="Keyword133" id="Keyword133" placeholder="Looking For?">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location333">Location</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="name" id="Location333" placeholder="Find a location">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pricing13">Pricing</label>
                                                    <div class="style-border style-radius col-12">
                                                        <input type="text" class="form-control" name="price3" id="pricing13" placeholder="0 FCFA - 100 000 000 FCFA">
                                                    </div>
                                                </div>
                                                <div class="advance-btn-wrapper">
                                                    <div class="advance-search-btn advance-search-active">
                                                        <div class="th-btn radius style3 bg-smoke search-btn-item">
                                                            Advanced <i class="fa-solid fa-sliders-up"></i>
                                                        </div>
                                                    </div>
                                                    <button class="th-btn radius bg-theme">
                                                        <i class="far fa-search me-2"></i> Search
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <!-- Hero 3 Advance Search   -->
                                <div class="advance-search-wrapper stye-2 hero-3-ad-search">
                                    <div class="form-group">
                                        <label for="property_type1">Type de propriété</label>
                                        <select name="property_type1" id="property_type1" class="form-select nice-select">
                                            <option value="" disabled selected hidden>Type de propriété</option>
                                            <option value="apartment">Appartement</option>
                                            <option value="house">Maison</option>
                                            <option value="villa">Villa</option>
                                            <option value="villa">Terrain</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="max_bedrooms1">Nombre maximal de chambres</label>
                                        <select name="max_bedrooms1" id="max_bedrooms1" class="form-select nice-select">
                                            <option value="" disabled selected hidden>Chambres Max</option>
                                            <option value="1">1 Chambre</option>
                                            <option value="2">2 Chambres</option>
                                            <option value="3">3 Chambres</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="location1">Région</label>
                                        <select name="location1" id="location1" class="form-select nice-select">
                                            <option value="" disabled selected hidden> Région</option>
                                            <option value="dakar">Dakar</option>
                                            <option value="thies">Thiès</option>
                                            <option value="ziguinchor">Ziguinchor</option>
                                        </select>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="hero-3-counter-wrap fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
                            <div class="hero-3-counter-item">
                                <h2 class="counter">
                                    <span class="counter-number">{{ count(\App\Models\Property::all()) }}</span>
                                    +
                                </h2>
                                <span class="box-text">Projects réalisés</span>
                            </div>
                            <div class="hero-3-counter-item">
                                <h2 class="counter">
                                    <span class="counter-number">2</span>
                                    M +
                                </h2>
                                <span class="box-text">Visiteurs mensuels</span>
                            </div>
                            <div class="hero-3-counter-item">
                                <h2 class="counter">
                                    <span class="counter-number">850</span>
                                    +
                                </h2>
                                <span class="box-text">Propriétés prêtes</span>
                            </div>
                            <div class="hero-3-counter-item">
                                <h2 class="counter">
                                    <span class="counter-number">98</span>
                                    %
                                </h2>
                                <span class="box-text">Clients satisfaits</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="map-wrapper fadeinup wow">
                        <img src="{{asset('web/assets/img/hero/hero-3-right.jpg')}}" alt="img">
                        <ul class="map-marker-wrap">
                            <li class="map-icon map-icon1"><img src="{{asset('web/assets/img/icon/map-marker.svg')}}" alt="Icon"></li>
                            <li class="map-icon map-icon2"><img src="{{asset('web/assets/img/icon/map-marker.svg')}}" alt="Icon"></li>
                            <li class="map-icon map-icon3"><img src="{{asset('web/assets/img/icon/map-marker.svg')}}" alt="Icon"></li>
                            <li class="map-icon map-icon4"><img src="{{asset('web/assets/img/icon/map-marker.svg')}}" alt="Icon"></li>
                        </ul>

                        <div class="map-popular-list map-popular-list1">
                            <div class="popular-list-1">
                                <div class="thumb-wrapper">
                                    <img src="{{asset('web/assets/img/popular/popular-1-3.jpg')}}" alt="Image">
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="price">
                                        <h6 class="box-title">335 800 000</h6>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/popular-location.svg')}}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bed.svg')}}" alt="icon"></div>
                                            Lits 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bath.svg')}}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/sqft.svg')}}" alt="icon"></div>
                                            300 m2
                                        </li>
                                    </ul>
                                </div>
                                <div class="arrow-bottom"></div>
                            </div>
                        </div>

                        <div class="map-popular-list map-popular-list2">
                            <div class="popular-list-1">
                                <div class="thumb-wrapper">
                                    <img src="{{asset('web/assets/img/popular/popular-1-3.jpg')}}" alt="Image">
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="price">
                                        <h6 class="box-title">335 800 000</h6>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/popular-location.svg')}}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bed.svg')}}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bath.svg')}}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/sqft.svg')}}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                </div>
                                <div class="arrow-bottom"></div>
                            </div>
                        </div>

                        <div class="map-popular-list map-popular-list3">
                            <div class="popular-list-1">
                                <div class="thumb-wrapper">
                                    <img src="{{asset('web/assets/img/popular/popular-1-3.jpg')}}" alt="Image">
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="price">
                                        <h6 class="box-title">335 800 000</h6>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/popular-location.svg')}}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bed.svg')}}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bath.svg')}}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/sqft.svg')}}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                </div>
                                <div class="arrow-bottom"></div>
                            </div>
                        </div>

                        <div class="map-popular-list map-popular-list4 show">
                            <div class="popular-list-1">
                                <div class="thumb-wrapper">
                                    <img src="{{asset('web/assets/img/popular/popular-1-3.jpg')}}" alt="Image">
                                    <div class="actions">
                                        <a href="wishlist.html" class="icon-btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="price">
                                        <h6 class="box-title">335 800 000</h6>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <div class="media-body">
                                        <h3 class="box-title"> <a href="property-details.php">Contemporary Loft</a></h3>
                                        <div class="box-text">
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/popular-location.svg')}}" alt="icon"></div> 39581 Rohan Estates, New York
                                        </div>
                                    </div>

                                    <ul class="property-featured">
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bed.svg')}}" alt="icon"></div>
                                            Lit 4
                                        </li>

                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bath.svg')}}" alt="icon"></div>
                                            Sdb 2
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/sqft.svg')}}" alt="icon"></div>
                                            1500 m2
                                        </li>
                                    </ul>
                                </div>
                                <div class="arrow-bottom"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
    Category Area
    ==============================-->
    <section class="category-sec-2 position-relative space bg-white space-extra-bottom">
        <div class="container">
            <div class="title-area text-center mb-50">
                <h3 class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> CATEGORIES</h3>
                <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Choisissez Votre Type de propriété</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider" id="categorySlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}, "1300":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_1.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">Apartment</a></h3>
                                <p class="box-subtitle">12 Property</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_2.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">House</a></h3>
                                <p class="box-subtitle">10 Property</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_3.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">Land/Plot</a></h3>
                                <p class="box-subtitle">02 Property</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_4.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">Townhouse</a></h3>
                                <p class="box-subtitle">05 Property</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_5.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">Penthouse</a></h3>
                                <p class="box-subtitle">02 Property</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_6.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">Cottage</a></h3>
                                <p class="box-subtitle">11 Property</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="category-card style-2">
                                <div class="box-icon">
                                    <img src="{{asset('web/assets/img/icon/category_card_1.svg')}}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="property.php">Kawasaki</a></h3>
                                <p class="box-subtitle">14 Property</p>
                            </div>
                        </div>

                    </div>
                    <div class="slider-pagination style-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Feature Area
    ==============================-->
    <section class="popular-sec-1 space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="title-area text-center mb-2">
                        <p class="sub-title mt-2 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> Propriétés populaires</p>
                        <h2 class="sec-title mb-4 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Meilleures ventes de propriétés</h2>
                        <div class="filter-menu style-2 indicator-active filter-menu-active mt-2 justify-content-center fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <button data-filter="*" class="th-btn tab-btn active" type="button">Tout</button>
                            {{--<button data-filter=".cat2" class="th-btn tab-btn" type="button">Commerce</button>
                            <button data-filter=".cat3" class="th-btn tab-btn" type="button">Terrain</button>
                            <button data-filter=".cat4" class="th-btn tab-btn" type="button">Villa</button>--}}
                            @forelse($popularProperties as $property)
                            <button data-filter=".{{$property->category}}" class="th-btn tab-btn" type="button">{{$property->category}}</button>
                            @empty

                            @endforelse

                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-30 justify-content-center filter-active">

                @forelse($popularProperties as $property)
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 filter-item {{$property->category}}">
                        <div class="popular-list-1">
                            <div class="thumb-wrapper">
                                <div class="th-slider" data-slider-options='{"loop":false, "autoplay": false,"autoHeight": true, "effect":"fade"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a class="popular-popup-image" href="{{asset('web/assets/img/popular/popular-1-1.jpg')}}"><img src="{{asset('web/assets/img/popular/popular-1-1.jpg')}}" alt="Image"></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="popular-popup-image" href="{{asset('web/assets/img/popular/popular-1-2.jpg')}}"><img src="{{asset('web/assets/img/popular/popular-1-2.jpg')}}" alt="Image"></a>
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
                                            <span class="action-text">Add To Favorite</span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </a>
                                        <a href="{{asset('web/assets/img/popular/popular-1-1.jpg')}}" class="icon-btn popular-popup-image">
                                            <span class="action-text">View all img</span>
                                            <i class="fa-solid fa-camera"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-badge">
                                    <img src="{{asset('web/assets/img/icon/sell_rent_icon.svg')}}" alt="icon">
                                    <p>{{ $property->type }}</p>
                                </div>
                            </div>
                            <div class="property-content">
                                <div class="media-body">
                                    <h3 class="box-title " style="font-size: 20px;"> <a href="{{ route('properties.show', $property->slug) }}">{{ $property->title }}</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{asset('web/assets/img/icon/popular-location.svg')}}" alt="icon"></div> {{ $property->location }}
                                    </div>
                                </div>

                                <ul class="property-featured">
                                    <li>
                                        @if($property->bedrooms)
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bed.svg')}}" alt="icon"></div>
                                            Lit {{ $property->bedrooms }}
                                        @endif
                                    </li>

                                    <li>
                                        @if($property->bathrooms)
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/bath.svg')}}" alt="icon"></div>
                                            Sdb {{ $property->bathrooms }}
                                        @endif
                                    </li>
                                    <li>
                                        @if($property->area)
                                            <div class="icon"><img src="{{asset('web/assets/img/icon/sqft.svg')}}" alt="icon"></div>
                                            {{ $property->area }}m²
                                        @endif
                                    </li>
                                </ul>
                                <div class="property-bottom">
                                    <h6 class="box-title" style="font-size: 18px;">{{ number_format($property->price, 0, ',', ' ') }} FCFA
                                        @if($property->type === 'location')
                                            <span class="period">/mois</span>
                                        @endif
                                    </h6>
                                    <a class="th-btn sm style3 radius" href="{{ route('properties.show', $property->slug) }}">Voir Plus </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="col-lg-4 col-md-6 mb-4">
                        <div class="property-card">
                            <div class="property-image">
                                <img src="{{ asset('storage/' . $property->main_image) }}" alt="{{ $property->title }}">
                                <div class="property-overlay">
                                    <a href="{{ route('properties.show', $property->slug) }}" class="view-details">
                                        <i class="fas fa-eye"></i> Voir détails
                                    </a>
                                </div>
                                <div class="property-badge">
                                    <span class="badge badge-{{ $property->type }}">{{ ucfirst($property->type) }}</span>
                                </div>
                            </div>
                            <div class="property-content">
                                <h4 class="property-title">
                                    <a href="{{ route('properties.show', $property->slug) }}">{{ $property->title }}</a>
                                </h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> {{ $property->location }}
                                </div>
                                <div class="property-features">
                                    @if($property->bedrooms)
                                        <span class="feature"><i class="fas fa-bed"></i> {{ $property->bedrooms }}</span>
                                    @endif
                                    @if($property->bathrooms)
                                        <span class="feature"><i class="fas fa-bath"></i> {{ $property->bathrooms }}</span>
                                    @endif
                                    @if($property->area)
                                        <span class="feature"><i class="fas fa-ruler"></i> {{ $property->area }}m²</span>
                                    @endif
                                </div>
                                <div class="property-price">
                                    {{ number_format($property->price, 0, ',', ' ') }} FCFA
                                    @if($property->type === 'location')
                                        <span class="period">/mois</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>--}}
                @empty
                    <div class="col-12 text-center">
                        <p>Aucune propriété disponible pour le moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!--==============================
    Why choose Area
    ==============================-->
    <div class="why-sec-2 bg-smoke space" id="why-sec" data-bg-src="{{asset('web/assets/img/shape/what-we-do-3-bg.png')}}">

    </div>

    @include('partials.teams')

    <!--==============================
    Gallery Area
    ==============================-->
    <div class="gallery-sec-3 overflow-hidden bg-smoke space overflow-hidden">
        <!--        <div class="shape-mockup animation-infinite " style="left: 0; bottom: 0;" data-bg-src="assets/img/shape/property-values-3-shape.png"></div>-->
        <div class="container">
            <div class="row justify-content-lg-between text-center text-lg-start gy-4 justify-content-center align-items-center mb-40">
                <div class="col-lg-7">
                    <div class="title-area text-left mb-2">
                        <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> Maisons Haut Standing</p>
                        <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s"> Explorez nos meilleurs Villas.</h2>
                        <p class="box-text fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">Trouvez la maison de vos rêves</p>
                    </div>
                </div>
                <div class="col-lg-auto text-center text-lg-start fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <a class="th-btn style3 radius" href="{{ route('properties.index') }}">Voir tout</a>
                </div>
            </div>

            <div class="row gy-4 justify-content-center align-items-center">
                <div class="col-lg-6 ">
                    <div class="gallery-card style-2">
                        <div class="gallery-img">
                            <img src="{{asset('web/assets/img/property-values/property-values-3-1.jpg')}}" alt="gallery image">
                            <div class="gallery-content">
                                <div class="gallery-content-wrapper">
                                    <div class="left-content">
                                        <p class="box-text">42 Propriétés</p>
                                        <h2 class="box-title"><a href="property-details.php">Dakar, SENEGAL </a></h2>
                                    </div>
                                    <div class="link">
                                        <a href="property-details.php"><i class="far fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="property-values-2-item ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery-card style-2">
                                    <div class="gallery-img">
                                        <img src="{{asset('web/assets/img/property-values/property-values-3-2.jpg')}}" alt="gallery image">
                                        <div class="gallery-content">
                                            <div class="gallery-content-wrapper">
                                                <div class="left-content">
                                                    <p class="box-text">34 Propriétés</p>
                                                    <h2 class="box-title"><a href="property-details.php">Thiès, SENEGAL </a></h2>
                                                </div>
                                                <div class="link">
                                                    <a href="property-details.php"><i class="far fa-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="gallery-card style-2">
                                    <div class="gallery-img">
                                        <img src="{{asset('web/assets/img/property-values/property-values-3-3.jpg')}}" alt="gallery image">
                                        <div class="gallery-content">
                                            <div class="gallery-content-wrapper">
                                                <div class="left-content">
                                                    <p class="box-text">55 Propriétés</p>
                                                    <h2 class="box-title"><a href="property-details.php">Ziguinchor, SENEGAL </a></h2>
                                                </div>
                                                <div class="link">
                                                    <a href="property-details.php"><i class="far fa-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="gallery-card style-2">
                                    <div class="gallery-img">
                                        <img src="{{asset('web/assets/img/property-values/property-values-3-4.jpg')}}" alt="gallery image">
                                        <div class="gallery-content">
                                            <div class="gallery-content-wrapper">
                                                <div class="left-content">
                                                    <p class="box-text">25 Propriétés</p>
                                                    <h2 class="box-title"><a href="property-details.php">Saint-Louis, SENEGAL </a></h2>
                                                </div>
                                                <div class="link">
                                                    <a href="property-details.php"><i class="far fa-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Gallery Area
    ==============================-->
    <div class="gallery-sec-4" id="gallery">
        <div class="gallery-video-wrap">
            <div class="video-box1">
                {{--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>--}}
                <a href="{{asset('web/assets/img/hero/hero-2-video.mp4')}}" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
            </div>
        </div>

        <div class="swiper th-slider gallery-slider4" id="gallerySlider4" data-slider-options='{"effect":"fade", "loop":true, "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                @forelse($popularProperties as $property)
                    <div class="swiper-slide">
                        <div class="gallery-4-inner" data-bg-src="{{asset('web/assets/img/hero/hero_bg_1_1.jpg')}}">
                            <div class="container">
                                <div class="row gy-4 align-items-center">
                                    <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                                        <div class="gallery-4-wrap pe-xl-5 me-xl-2" data-ani="slideinup" data-ani-delay="0.2s">
                                            <div class="popular-list-1 style-3">
                                                <div class="property-content">
                                                    <div class="title-area text-left mb-50">
                                                        <p class="sub-title"> <span class="double-line"></span> Propriétés Populaires</p>
                                                        <h2 class="sec-title"> Propriétés de luxe</h2>
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="box-title"> <a href="{{ route('properties.show', $property->slug) }}">{{$property->title}}</a></h3>
                                                        <div class="box-text">
                                                            <div class="icon"><img src="{{asset('web/assets/img/icon/popular-location.svg')}}" alt="icon"></div> {{$property->location}}
                                                        </div>
                                                    </div>

                                                    <ul class="property-featured">
                                                        <li>
                                                            @if($property->bedrooms)
                                                                <div class="icon"><img src="{{asset('web/assets/img/icon/bed.svg')}}" alt="icon"></div>
                                                                Lit {{ $property->bedrooms }}
                                                            @endif
                                                        </li>

                                                        <li>
                                                            @if($property->bathrooms)
                                                                <div class="icon"><img src="{{asset('web/assets/img/icon/bath.svg')}}" alt="icon"></div>
                                                                Sdb {{ $property->bathrooms }}
                                                            @endif
                                                        </li>
                                                        <li>
                                                            @if($property->area)
                                                                <div class="icon"><img src="{{asset('web/assets/img/icon/sqft.svg')}}" alt="icon"></div>
                                                                {{ $property->area }}m²
                                                            @endif
                                                        </li>
                                                    </ul>
                                                    <div class="property-bottom">
                                                        <h6 class="box-title" style="font-size: 18px;">{{ number_format($property->price, 0, ',', ' ') }} FCFA
                                                            @if($property->type === 'location')
                                                                <span class="period">/mois</span>
                                                            @endif
                                                        </h6>
                                                        <a class="th-btn sm style3 radius bg-theme text-white" href="{{ route('properties.show', $property->slug) }}">Voir Plus </a>
                                                    </div>
                                                    <div class="agent-wrap">
                                                        <div class="thumb">
                                                            <img src="{{asset('web/assets/img/gallery/property-agent.jpg')}}" alt="img">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="box-title">{{ $property->agent->name }}</h4>
                                                            <p class="box-text">{{ $property->agent->title }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse

            </div>
            <div class="slider-pagination-wrapper">
                <button data-slider-prev="#gallerySlider4" class="slider-arrow default slider-prev style-2"> < </button>
                <div class="slider-pagination2"></div>
                <div class="line"></div>
                <button data-slider-next="#gallerySlider4" class="slider-arrow default style-2"> > </button>
            </div>
        </div>
    </div>
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class="testi-card-area-3 space overflow-hidden">
        <div class="container">
            <div class="row gy-40 gx-100 justify-content-center align-items-end">
                <div class="col-lg-4">
                    <div class="testi-3-rating me-xxl-5">
                        <div class="rating-count">
                            <h2>4.9</h2>
                            <div class="star-shape spin">
                                <img src="{{asset('web/assets/img/shape/download-circle.png')}}" alt="img">
                            </div>
                        </div>

                        <div class="reviews-star">
                            <div class="th-social">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h4 class="review-title"><span class="number">Trust-score on <span class="counter-number"> 189</span>+</span> reviews</h4>
                        </div>
                        <a class="th-btn tab-btn style3 radius" href="testimonials.html">Voir les notes</a>

                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="testi-3-title-wrap pe-xxl-5 ps-xxl-5">
                        <div class="title-area text-left">
                            <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s"> <span class="double-line"></span>Témoignages</p>
                            <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">Ce que nos clients disent de SENIMMO</h2>
                        </div>
                    </div>

                    <div class="testi-card-slide pe-xl-5 ps-xl-5">
                        <div class="swiper has-shadow th-slider" id="testiSlide3" data-slider-options='{"autoplay":"false", "centeredSlides":true,"paginationType": "progressbar","loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-block style-2 style-3" dir="ltr">
                                        <div class="top-wrap">
                                            <div class="quote">
                                                <img src="{{asset('web/assets/img/icon/testi-2quote.svg')}}" alt="quote">
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p class="box-text mb-40">“Adinventitias sequi cerno cedo vapulus adhaero decretum suppono iure voluptate. Trans triumphus toties sed cogito carbo valetudo aequus ciminatio conventus. Voluptates decimus vorago suadeo. Culpo carmen adnuo. Verecundia capio denego. Tracto caterva cavus denique culpa vigor tergum possimus.”</p>
                                            <p class="box-text">“Aer arceo umerus asperiores templum desidero caritas. Velum adipisci verumtamen comparo ascisco ceno vitiosus aeneus tenetur bibo.”</p>
                                        </div>
                                        <div class="bottom-wrap">
                                            <div class="team-img">
                                                <img src="{{asset('web/assets/img/testimonial/testi-2-1.jpg')}}" alt="Team">
                                            </div>
                                            <div class="content">
                                                <h3 class="box-title">Georgia Schaden</h3>
                                                <p class="text">Property owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-block style-2 style-3" dir="ltr">
                                        <div class="top-wrap">
                                            <div class="quote">
                                                <img src="{{asset('web/assets/img/icon/testi-2quote.svg')}}" alt="quote">
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p class="box-text mb-40">“Tenax comitatus ambulo regnum eligo, conturbo vis caelum cohors. Infit ustulo adoptio collum, speciosus lumen soluta. Condico spiculum ratio, sopor conventus adversus fiducia. Arma arcesso altaria impleo pax laboriosus. Tracto caterva cavus denique culpa vigor tergum possimus. ”</p>
                                            <p class="box-text">“Aer arceo umerus asperiores templum desidero caritas. Trepide asporto momentum, Tracto caterva cavus denique culpa vigor virgo”</p>
                                        </div>
                                        <div class="bottom-wrap">
                                            <div class="team-img">
                                                <img src="{{asset('web/assets/img/testimonial/testi-2-2.jpg')}}" alt="Team">
                                            </div>
                                            <div class="content">
                                                <h3 class="box-title">Walter Deckow</h3>
                                                <p class="text">Property owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-block style-2 style-3" dir="ltr">
                                        <div class="top-wrap">
                                            <div class="quote">
                                                <img src="{{asset('web/assets/img/icon/testi-2quote.svg')}}" alt="quote">
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p class="box-text mb-40">“Contendo votum traho clamo statim suffragium numquam teneo. Altus iudicium versor, perpetuus velum pax vestigium carpo. Candidus firmamentum celo, voluptas optio demitto sonitus. Obduro casus adinventio vestigium amplitudo sumo.vestigium carpo. Candidus firmamentum celo, voluptas”</p>
                                            <p class="box-text">“Concido laboriosam varietas amplector, aureus stella sursum approbo. Gravitas turbo decet, perpetuus auxilium comes virga.”</p>
                                        </div>
                                        <div class="bottom-wrap">
                                            <div class="team-img">
                                                <img src="{{asset('web/assets/img/testimonial/testi-2-1.jpg')}}" alt="Team">
                                            </div>
                                            <div class="content">
                                                <h3 class="box-title">Carlos Bauch</h3>
                                                <p class="text">Property owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-block style-2 style-3" dir="ltr">
                                        <div class="top-wrap">
                                            <div class="quote">
                                                <img src="{{asset('web/assets/img/icon/testi-2quote.svg')}}" alt="quote">
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p class="box-text mb-40">“Tenax comitatus ambulo regnum eligo, conturbo vis caelum cohors. Infit ustulo adoptio collum, speciosus lumen soluta. Condico spiculum ratio, sopor conventus adversus fiducia. Arma arcesso altaria impleo pax laboriosus. Trepide asporto momentum, virgo sollemne aurora amo cedo umquam cedo.”</p>
                                            <p class="box-text">“Cedo umquam cedo summisse damnum reiciendis veritas flamma. Tempus appono validus translatio, Exemplum adnuo radius caecus exsisto.”</p>
                                        </div>
                                        <div class="bottom-wrap">
                                            <div class="team-img">
                                                <img src="{{asset('web/assets/img/testimonial/testi-2-2.jpg')}}" alt="Team">
                                            </div>
                                            <div class="content">
                                                <h3 class="box-title">Julia Era</h3>
                                                <p class="text">Property owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-slider-prev="#testiSlide3" class="slider-arrow  testi-3 slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide1" class="slider-arrow  testi-3 slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Faq Area
    ==============================-->
    <div class="space bg-smoke" data-bg-src="{{asset('web/assets/img/shape/what-we-do-3-bg.png')}}">

    </div>

    <!--==============================
    Download Area  3
    ==============================-->
    <div class="download-sec-3 space-top">
        <div class="download-3-bg-inner" data-bg-src="{{asset('web/assets/img/bg/download-bg-3.jpg')}}">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5 col-xl-5 col-xxl-6">
                        <div class="download-3-left">
                            <div class="map-icon-box">
                                <a href="property.php">
                                    <img src="{{asset('web/assets/img/download/download-3-map.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="content-box">
                                <img src="{{asset('web/assets/img/download/download-3-icon.png')}}" alt="img">
                                <h4 class="box-title">Trouvez rapidement un bien</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-7 col-xxl-6">
                        <div class="download-get-in-touch">
                            <form action="mail.php" method="POST" class="ajax-contact">
                                <div class="title-area text-left mb-70">
                                    <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> Nous rencontrez </p>
                                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s"> Prener rendez-vous avec un agent</h2>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6">
                                        <label for="name">Nom*</label>
                                        <input type="text" class="form-control" name="nom" id="name" placeholder="Votre Nom">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6">
                                        <label for="email">Email*</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6">
                                        <label for="date">Date*</label>
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6">
                                        <label for="desired_time">Heure*</label>
                                        <input type="text" class="form-control" name="desired_time" id="desired_time" placeholder="Heure souhaite">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Message</label>
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Ecrire ici..."></textarea>
                                    </div>
                                    <div class="form-btn col-12 text-end">
                                        <button class="th-btn bg-theme radius">Envoyer</button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Faq Area
    ==============================-->
    <div class="space bg-smoke" data-bg-src="{{asset('web/assets/img/shape/what-we-do-3-bg.png')}}">
    </div>

    <!--==============================
    Brand Area
    ==============================-->
    <div class="brand-area-1 overflow-hidden ">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="swiper th-slider" id="brand-slider-1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{asset('web/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<!-- Hero Section -->
    <section class="hero-banner">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center">
                        <h1 class="hero-title">Trouvez la Maison idéale en un clic</h1>
                        <p class="hero-subtitle">Découvrez notre sélection de propriétés exceptionnelles avec l'accompagnement d'agents experts</p>

                        <!-- Search Form -->
                        <div class="property-search-widget">
                            <form action="{{ route('properties.search') }}" method="GET" class="search-form">
                                <div class="search-fields">
                                    <div class="field-group">
                                        <select name="type" class="form-control">
                                            <option value="">Type</option>
                                            <option value="vente">Vente</option>
                                            <option value="location">Location</option>
                                        </select>
                                    </div>
                                    <div class="field-group">
                                        <input type="text" name="location" class="form-control" placeholder="Localisation">
                                    </div>
                                    <div class="field-group">
                                        <select name="category" class="form-control">
                                            <option value="">Catégorie</option>
                                            <option value="maison">Maison</option>
                                            <option value="appartement">Appartement</option>
                                            <option value="terrain">Terrain</option>
                                        </select>
                                    </div>
                                    <div class="field-group">
                                        <button type="submit" class="btn btn-primary search-btn">
                                            <i class="fas fa-search"></i> Rechercher
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-background">
            <img src="{{ asset('images/hero-bg.jpg') }}" alt="Hero Background">
        </div>
    </section>

    <!-- Featured Agent Section -->
    @if($featuredAgent)
        <section class="featured-agent-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="agent-photo">
                            <img src="{{ asset('storage/' . $featuredAgent->photo) }}" alt="{{ $featuredAgent->name }}" class="img-fluid rounded-circle">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="agent-info">
                            <h2 class="agent-name">{{ $featuredAgent->name }}</h2>
                            <p class="agent-title">{{ $featuredAgent->title ?? 'Agent' }}</p>
                            <p class="agent-description">{{ $featuredAgent->description }}</p>
                            <div class="agent-contact">
                                <a href="tel:{{ $featuredAgent->phone }}" class="btn btn-outline-primary me-3">
                                    <i class="fas fa-phone"></i> {{ $featuredAgent->phone }}
                                </a>
                                <a href="mailto:{{ $featuredAgent->email }}" class="btn btn-outline-primary">
                                    <i class="fas fa-envelope"></i> Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Welcome Section -->
    <section class="welcome-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="welcome-content">
                        <h2 class="section-title">Bienvenue chez SENIMMO</h2>
                        <p class="section-description">
                            Votre partenaire de confiance pour tous vos projets immobiliers au Sénégal.
                            Nous vous accompagnons dans la recherche de votre bien idéal avec professionnalisme et expertise.
                        </p>
                        <div class="welcome-features">
                            <div class="feature-item">
                                <i class="fas fa-home feature-icon"></i>
                                <div class="feature-content">
                                    <h5>Propriétés de qualité</h5>
                                    <p>Sélection rigoureuse de biens exceptionnels</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-users feature-icon"></i>
                                <div class="feature-content">
                                    <h5>Agents experts</h5>
                                    <p>Équipe professionnelle à votre service</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-handshake feature-icon"></i>
                                <div class="feature-content">
                                    <h5>Service personnalisé</h5>
                                    <p>Accompagnement sur mesure</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="welcome-image">
                        <img src="{{ asset('images/welcome-senimmo.jpg') }}" alt="Bienvenue chez SENIMMO" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Properties Section -->
    <section class="popular-properties py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Propriétés populaires</h2>
                <p class="section-subtitle">Découvrez notre sélection de biens les plus demandés</p>
            </div>

            <div class="properties-grid">
                <div class="row">
                    @forelse($popularProperties as $property)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="property-card">
                                <div class="property-image">
                                    <img src="{{ asset('storage/' . $property->main_image) }}" alt="{{ $property->title }}">
                                    <div class="property-overlay">
                                        <a href="{{ route('properties.show', $property->slug) }}" class="view-details">
                                            <i class="fas fa-eye"></i> Voir détails
                                        </a>
                                    </div>
                                    <div class="property-badge">
                                        <span class="badge badge-{{ $property->type }}">{{ ucfirst($property->type) }}</span>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <h4 class="property-title">
                                        <a href="{{ route('properties.show', $property->slug) }}">{{ $property->title }}</a>
                                    </h4>
                                    <div class="property-location">
                                        <i class="fas fa-map-marker-alt"></i> {{ $property->location }}
                                    </div>
                                    <div class="property-features">
                                        @if($property->bedrooms)
                                            <span class="feature"><i class="fas fa-bed"></i> {{ $property->bedrooms }}</span>
                                        @endif
                                        @if($property->bathrooms)
                                            <span class="feature"><i class="fas fa-bath"></i> {{ $property->bathrooms }}</span>
                                        @endif
                                        @if($property->area)
                                            <span class="feature"><i class="fas fa-ruler"></i> {{ $property->area }}m²</span>
                                        @endif
                                    </div>
                                    <div class="property-price">
                                        {{ number_format($property->price, 0, ',', ' ') }} FCFA
                                        @if($property->type === 'location')
                                            <span class="period">/mois</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Aucune propriété disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('properties.index') }}" class="btn btn-outline-primary">
                    Voir toutes les propriétés
                </a>
            </div>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="team-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Membres de l'équipe</h2>
                <p class="section-subtitle">
                    Les agents SENIMMO sont là pour vous aider avec tous vos objectifs d'achat, de location et de vente.
                    Trouvez la maison de vos rêves avec un expert en qui vous pouvez avoir confiance.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Contactez-nous</a>
            </div>

            <div class="team-grid">
                <div class="row">
                    @forelse($teamMembers as $agent)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="team-card">
                                <div class="team-photo">
                                    <img src="{{ asset('storage/' . $agent->photo) }}" alt="{{ $agent->name }}">
                                    <div class="team-overlay">
                                        <div class="social-links">
                                            @if($agent->facebook)
                                                <a href="{{ $agent->facebook }}" class="social-link">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            @endif
                                            @if($agent->twitter)
                                                <a href="{{ $agent->twitter }}" class="social-link">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            @endif
                                            @if($agent->linkedin)
                                                <a href="{{ $agent->linkedin }}" class="social-link">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">{{ $agent->name }}</h4>
                                    <p class="team-role">{{ $agent->title ?? 'Agent immobilier' }}</p>
                                    <div class="team-contact">
                                        <p><i class="fas fa-phone"></i> {{ $agent->phone }}</p>
                                        <p><i class="fas fa-envelope"></i> {{ $agent->email }}</p>
                                    </div>
                                    <a href="{{ route('agents.show', $agent->slug) }}" class="btn btn-sm btn-outline-primary">
                                        Voir profil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Aucun agent disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Properties Section -->
    <section class="premium-properties py-5 bg-dark text-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title text-white">Maisons Haut Standing</h2>
                <p class="section-subtitle text-light">Trouvez la maison de vos rêves</p>
            </div>

            <div class="premium-slider">
                <div class="row">
                    @forelse($premiumProperties as $property)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="premium-card">
                                <div class="premium-image">
                                    <img src="{{ asset('storage/' . $property->main_image) }}" alt="{{ $property->title }}">
                                    <div class="premium-overlay">
                                        <div class="premium-badges">
                                            <span class="badge badge-premium">Haut Standing</span>
                                            @if($property->is_featured)
                                                <span class="badge badge-featured">Coup de cœur</span>
                                            @endif
                                        </div>
                                        <a href="{{ route('properties.show', $property->slug) }}" class="premium-view">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="premium-content">
                                    <h4 class="premium-title">{{ $property->title }}</h4>
                                    <div class="premium-location">
                                        <i class="fas fa-map-marker-alt"></i> {{ $property->location }}
                                    </div>
                                    <div class="premium-price">
                                        {{ number_format($property->price, 0, ',', ' ') }} FCFA
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-light">Aucune maison haut standing disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Témoignages</h2>
                <p class="section-subtitle">Ce que disent nos clients satisfaits</p>
            </div>

            <div class="testimonials-slider">
                <div class="row">
                    @forelse($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <div class="testimonial-quote">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <p class="testimonial-text">{{ $testimonial->content }}</p>
                                    <div class="testimonial-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= ($testimonial->rating ?? 5) ? 'active' : '' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="testimonial-author">
                                    <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="{{ $testimonial->name }}">
                                    <div class="author-info">
                                        <h5 class="author-name">{{ $testimonial->name }}</h5>
                                        <p class="author-role">{{ $testimonial->profession ?? 'Client' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Aucun témoignage disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3>Prêt à trouver votre propriété idéale ?</h3>
                    <p>Contactez nos experts dès maintenant pour un accompagnement personnalisé</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>--}}

@endsection

@push('scripts')
    <script src="{{ asset('js/property-search.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation on scroll
            const observeElements = document.querySelectorAll('.property-card, .team-card, .testimonial-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, {
                threshold: 0.1
            });

            observeElements.forEach(el => {
                observer.observe(el);
            });

            // Property search form enhancement
            initPropertySearch();
        });
    </script>
@endpush
