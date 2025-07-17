@extends('layouts.app')

@section('title', 'Toutes les Agences - SENIMMO')
@section('description', 'Découvrez toutes nos agences partenaires.')

@push('styles')

@endpush


@section('content')

    <!--==============================
    Breadcumb
    ============================== -->

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('web/assets/img/blog/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Agences</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-1.html">Acccueil</a></li>
                    <li>Agences</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="th-blog-wrapper space-top overflow-hidden space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-xxl-8 col-lg-7">
                    <div class="row gy-30 justify-content-center">
                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_1.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-1.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Luxury Home</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_2.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-2.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Luxury Aparment</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_3.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-3.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Luxury Home</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_4.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-4.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Luxury Home</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_5.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-5.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Elegant Home</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_6.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-6.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Building</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                             <p>Hotline:</p>
                                             <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                         </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_7.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-7.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Cottage Home</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 fadeinup wow">
                            <div class="agencies-card">
                                <div class="agencies-img">
                                    <a href="agency-details.php">
                                        <img src="{{ asset('web/assets/img/agencies/agencies_1_8.jpg') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="agencies-content">
                                    <div class="brand-icon">
                                        <img src="{{ asset('web/assets/img/icon/agencies-icon1-8.svg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title"><a href="agency-details.php">Luxury Villa</a></h3>
                                    <div class="box-text">
                                        <div class="icon"><img src="{{ asset('web/assets/img/icon/popular-location.svg') }}" alt="icon"></div> 39581 Rohan Estates, New York
                                    </div>
                                    <ul class="agencies-list">
                                        <li>
                                            <p>Listing:</p>
                                            <p>125</p>
                                        </li>
                                        <!--<li>
                                            <p>Hotline:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>-->
                                        <li>
                                            <p>Phone:</p>
                                            <p><a href="tel:+0023456789">+(00) 23456 789</a></p>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <p><a href="mailto:informail12@gmail.com">informail12@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <p>Catégorie :</p>
                                            <p>Appartement</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agencies-bottom">
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fa-solid fa-envelope"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fa-solid fa-globe"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fa-solid fa-phone-volume"></i></a>
                                    </div>
                                    <a href="agency-details.php" class="th-btn style3 radius"> Lire Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="th-pagination pt-2 mt-5">
                            <ul>
                                <li><a href="agency-details.php"><i class="far fa-arrow-left"></i></a></li>
                                <li><a href="agency-details.php">1</a></li>
                                <li><a href="agency-details.php">2</a></li>
                                <li><a href="agency-details.php">3</a></li>
                                <li><a class="next-page" href="agency-details.php">Suivant  <i class="far fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @include('partials.sidebar-right')
            </div>
        </div>
    </section>

@endsection
