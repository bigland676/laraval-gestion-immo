@extends('layouts.app')

@section('title', 'À propos - SENIMMO')
@section('description', 'Découvrez SENIMMO, votre partenaire de confiance pour tous vos projets immobiliers au Sénégal. Notre expertise à votre service.')

@push('styles')
    {{--<style>
        .about-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .about-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/about-bg.jpg') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .about-header .container {
            position: relative;
            z-index: 2;
        }

        .about-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }

        .about-card:hover {
            transform: translateY(-5px);
        }

        .section-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 2rem;
        }

        .stats-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
            display: block;
        }

        .stat-label {
            color: #666;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #007bff;
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px 40px;
            margin-bottom: 40px;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
        }

        .timeline-content {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
        }

        .timeline-date {
            background: #007bff;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: #007bff;
            border-radius: 50%;
            top: 30px;
        }

        .timeline-item:nth-child(odd)::before {
            right: -10px;
        }

        .timeline-item:nth-child(even)::before {
            left: -10px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .value-item {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-top: 4px solid #007bff;
        }

        .value-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.5rem;
        }

        .team-preview {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .cta-section {
            background: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 20px;
            }

            .timeline-item {
                width: 100%;
                left: 0 !important;
                text-align: left;
                padding-left: 60px;
            }

            .timeline-item::before {
                left: 10px !important;
            }
        }
    </style>--}}
@endpush

@section('content')

    <!--==============================
    Breadcumb
    ============================== -->

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('web/assets/img/bg/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">À propos de nous</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li>À propos de nous</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <div class="about-1-wrapper space overflow-hidden" id="about-sec">
        <div class="shape-mockup " data-bottom="0" data-left="0">
            <img src="{{ asset('web/assets/img/icon/about-2-shape.png') }}" alt="img">
        </div>
        <!--<div class="shape-mockup jump d-none d-lg-block" data-bottom="11%" data-left="5%">
            <img src="{{ asset('web/assets/img/icon/about-inner-shape.png') }}" alt="img">
        </div>-->
        <div class="container">
            <div class="row gy-40 gx-70 justify-content-center">
                <div class="col-xl-7">
                    <div class="img-box1 about-1 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="about-logo-wrap-2">
                            <div class="logo-icon-wrap">
                                <div class="logo-icon">
                                    <img src="{{ asset('web/assets/img/icon/logo-circle-icon.png') }}" alt="img">
                                </div>
                                <!--<div class="logo-icon-wrap__text">
                                    <span class="logo-animation">PILLAR REAL ESTATE HOME * REAL ESTATE</span>
                                </div>-->
                            </div>
                        </div>
                        <div class="about-left">
                            <div class="img-box">
                                <img src="{{ asset('web/assets/img/about/about-1-left-1.jpg') }}" alt="Image">
                            </div>
                            <div class="img-box small">
                                <img src="{{ asset('web/assets/img/about/about-1-left-2.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="about-middle">
                            <img class="tilt-active" src="{{ asset('web/assets/img/about/about-1-middle.jpg') }}" alt="Image">
                        </div>
                        <div class="about-right">
                            <div class="img-box small">
                                <img src="{{ asset('web/assets/img/about/about-1-right-1.jpg') }}" alt="Image">
                            </div>
                            <div class="img-box big">
                                <img src="{{ asset('web/assets/img/about/about-1-right-2.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area text-left mb-50">
                        <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> À propos de nous</p>
                        <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Découvrez Notre Propriété De Luxe, Avec Des Équipements Complets</h2>
                        <p class="sec-text fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">Scannez simplement le code QR à droite avec l'appareil photo de votre téléphone, puis cliquez sur l'invite pour ouvrir la page de téléchargement de l'application.</p>
                    </div>
                    <div class="row gy-4 gx-60 mb-4">
                        <div class="col-lg-6 col-md-6 fadeinup wow">
                            <div class="about-1-item">
                                <div class="icon">
                                    <img src="{{ asset('web/assets/img/icon/about-1-1.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3 class="box-title">Services de qualité</h3>
                                    <p class="box-text">Traite des problèmes dans le système d'échappement, en s'assurant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 fadeinup wow">
                            <div class="about-1-item">
                                <div class="icon">
                                    <img src="{{ asset('web/assets/img/icon/about-1-2.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3 class="box-title">Commentaires des clients</h3>
                                    <p class="box-text">S'assurer que le système d'échappement traite correctement les problèmes.</p>
                                    <p class="box-text"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 fadeinup wow">
                            <div class="about-1-item">
                                <div class="icon">
                                    <img src="{{ asset('web/assets/img/icon/about-1-3.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3 class="box-title">Effets de l'espace</h3>
                                    <p class="box-text">S'assurer que les problèmes dans le système sont traités.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 fadeinup wow">
                            <div class="about-1-item">
                                <div class="icon">
                                    <img src="{{ asset('web/assets/img/icon/about-1-4.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3 class="box-title">Responsabilité personnelle</h3>
                                    <p class="box-text">Le système d'échappement traite de tous les problèmes d'efficacité. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-bottom-wrap fadeinup wow">
                                <a href="about.html" class="th-btn bg-black pill">
                                    En Savoir +
                                </a>
                                <div class="about1-call-wrapper">
                                    <div class="icon"><i class="fa-regular fa-phone"></i></div>
                                    <div class="content">
                                        <p>Consultation gratuite</p>
                                        <a href="tel:(+221)777000202" class="link">(+221) 77 700 02 02</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Why choose Area
==============================-->
    <div class="why-sec-2 bg-smoke space" id="why-sec" data-bg-src="{{ asset('web/assets/img/shape/what-we-do-3-bg.png') }}">
        <div class="container">
            <div class="row justify-content-lg-between gy-4 justify-content-center align-items-center mb-40">
                <div class="col-lg-6">
                    <div class="title-area text-left mb-2">
                        <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span> Caractéristiques Signature</p>
                        <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s"> Voyez comment on peut vous aider</h2>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <a href="property.php" class="th-btn style3 radius fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s">Tous les Services</a>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 fadeinup wow">
                    <div class="why-card-1 style-2 style-4">
                        <h4 class="count">01</h4>
                        <div class="why-card-1__icon">
                            <img src="{{ asset('web/assets/img/icon/why-icon-1-1.svg') }}" alt="image">
                        </div>
                        <div class="why-card-1__content">
                            <h3 class="box-title"><a href="service.php">Bien à louer</a></h3>
                            <p class="box-text"> Velox surgo clarus confido carus video lumen virtus spes decerno..</p>
                        </div>
                        <div class="why-card-1__bottom">
                            <a class="th-btn style3 radius bg-white" href="property-details.php">Trouvez une maison</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 fadeinup wow">
                    <div class="why-card-1 style-2 style-4">
                        <h4 class="count">02</h4>
                        <div class="why-card-1__icon">
                            <img src="{{ asset('web/assets/img/icon/why-icon-1-2.svg') }}" alt="image">
                        </div>
                        <div class="why-card-1__content">
                            <h3 class="box-title"><a href="service.php">Fabrication de qualité</a></h3>
                            <p class="box-text"> Altus cedo tantillus video patrocinor valeo vestrum credo virtus.</p>
                        </div>
                        <div class="why-card-1__bottom">
                            <a class="th-btn style3 radius bg-white" href="property-details.php">Vendre une maison</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 fadeinup wow">
                    <div class="why-card-1 style-2 style-4">
                        <h4 class="count">03</h4>
                        <div class="why-card-1__icon">
                            <img src="{{ asset('web/assets/img/icon/why-icon-1-3.svg') }}" alt="image">
                        </div>
                        <div class="why-card-1__content">
                            <h3 class="box-title"><a href="service.php">Ecologique</a></h3>
                            <p class="box-text"> Technology is revolutionizing the other legal Technology the legal </p>
                        </div>
                        <div class="why-card-1__bottom">
                            <a class="th-btn style3 radius bg-white" href="property-details.php">Louer une maison</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 fadeinup wow">
                    <div class="why-card-1 style-2 style-4">
                        <h4 class="count">04</h4>
                        <div class="why-card-1__icon">
                            <img src="{{ asset('web/assets/img/icon/why-icon-1-4.svg') }}" alt="image">
                        </div>
                        <div class="why-card-1__content">
                            <h3 class="box-title"><a href="service.php">Respect environnement</a></h3>
                            <p class="box-text"> Confido carus video lumen Velox surgo ok virtus spes decerno.</p>
                        </div>
                        <div class="why-card-1__bottom">
                            <a class="th-btn style3 radius bg-white" href="property-details.php">Find a Home</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==============================
    Team Area
    ==============================-->
    @include('partials.teams')

    <!--==============================
    Counter Area
    ==============================-->
    <div class="counter-sec1 space overflow-hidden" data-bg-src="{{ asset('web/assets/img/bg/counter-1-bg.jpg') }}">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card fadeinup wow">
                    <div class="box-icon">
                        <img src="{{ asset('web/assets/img/icon/counter_1_1.svg') }}" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 1950 </span><span class="plus-simple">+</span></h4>
                        <p class="box-text">Transfert de projet</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card fadeinup wow">
                    <div class="box-icon">
                        <img src="{{ asset('web/assets/img/icon/counter_1_1.svg') }}" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 2 </span><span class="plus-simple">m</span></h4>
                        <p class="box-text">Visiteurs mensuels</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card fadeinup wow">
                    <div class="box-icon">
                        <img src="{{ asset('web/assets/img/icon/counter_1_1.svg') }}" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 850 </span><span class="plus-simple">+</span></h4>
                        <p class="box-text">Propriété prête</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card fadeinup wow">
                    <div class="box-icon">
                        <img src="{{ asset('web/assets/img/icon/counter_1_1.svg') }}" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 98 </span><span class="plus-simple">%</span></h4>
                        <p class="box-text">Des clients satisfaits</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>


    <!--==============================
    Faq Area
    ==============================-->
    <div class="space bg-smoke" data-bg-src="{{ asset('web/assets/img/shape/what-we-do-3-bg.png') }}">
        <!--<div class="shape-mockup" style="bottom: 0; left: 0%;">
            <img src="{{ asset('web/assets/img/shape/faq-2-shape.png') }}" alt="img">
        </div>

        <div class="shape-mockup movingX d-none d-lg-block" style="top: 18%; right: 7%;">
            <img src="{{ asset('web/assets/img/shape/faq-2-right.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6 col-xxl-5">
                    <div class="title-area text-center pe-xl-5 ps-xl-5 me-xxl-5 ms-xxl-5">
                        <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s"> <span class="double-line"></span>Frequently Ask Questions</p>
                        <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">What would you like to know about pillar?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-4">
                <div class="col-lg-10">
                    <div class="accordion-1 accordion" id="faqAccordion">


                        <div class="accordion-card style-2 active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span class="serial-numb">1. </span> What is Pillar real estate?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span class="serial-numb">2. </span> How to work pillar all services?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"><span class="serial-numb">3. </span> What resources are available for interfaith dialogue?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"><span class="serial-numb">4. </span> What programs are available for developer?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5"><span class="serial-numb">5. </span> How can I contribute to the local real estate?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>-->
    </div>

    <!--==============================
    Download Area  3
    ==============================-->
    <div class="download-sec-3 space-top">
        <div class="download-3-bg-inner" data-bg-src="{{ asset('web/assets/img/bg/download-bg-3.jpg') }}">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5 col-xl-5 col-xxl-6">
                        <div class="download-3-left">
                            <div class="map-icon-box">
                                <a href="property.php">
                                    <img src="{{ asset('web/assets/img/download/download-3-map.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="content-box">
                                <img src="{{ asset('web/assets/img/download/download-3-icon.png') }}" alt="img">
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
                                        <input type="text" class="form-control" name="desired_time" id="desired_time" placeholder="Desired Time">
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
    <div class="space bg-smoke" data-bg-src="{{ asset('web/assets/img/shape/what-we-do-3-bg.png') }}">
        <!--<div class="shape-mockup" style="bottom: 0; left: 0%;">
            <img src="{{ asset('web/assets/img/shape/faq-2-shape.png') }}" alt="img">
        </div>

        <div class="shape-mockup movingX d-none d-lg-block" style="top: 18%; right: 7%;">
            <img src="{{ asset('web/assets/img/shape/faq-2-right.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6 col-xxl-5">
                    <div class="title-area text-center pe-xl-5 ps-xl-5 me-xxl-5 ms-xxl-5">
                        <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s"> <span class="double-line"></span>Frequently Ask Questions</p>
                        <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">What would you like to know about pillar?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-4">
                <div class="col-lg-10">
                    <div class="accordion-1 accordion" id="faqAccordion">


                        <div class="accordion-card style-2 active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span class="serial-numb">1. </span> What is Pillar real estate?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span class="serial-numb">2. </span> How to work pillar all services?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"><span class="serial-numb">3. </span> What resources are available for interfaith dialogue?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"><span class="serial-numb">4. </span> What programs are available for developer?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style-2 ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5"><span class="serial-numb">5. </span> How can I contribute to the local real estate?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> Most Islamic centers offer charity programs, counseling, and financial assistance for those in need. Non-Muslims are welcome to visit mosques. They should dress modestly and remove their shoes upon entering. You can attend community events, volunteer at the mosque, join study circles, or participate in outreach programs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>-->
    </div>

    <!--==============================
    Brand Area
    ==============================-->
    <div class="brand-area-1 overflow-hidden ">
        <!--<div class="shape-mockup spin z-index-1 d-none d-xxl-block z-index-5" style="top: 5%; right: 0%;">
            <img src="{{ asset('web/assets/img/shape/download-circle.png') }}" alt="img">
        </div>-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="swiper th-slider" id="brand-slider-1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.php">
                                        <img src="{{ asset('web/assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Counter animation
            const counters = document.querySelectorAll('.stat-number');
            const observerOptions = {
                threshold: 0.5
            };

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });

            function animateCounter(element) {
                const target = element.textContent.replace(/\D/g, '');
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }

                    const suffix = element.textContent.replace(/\d/g, '');
                    element.textContent = Math.floor(current) + suffix;
                }, 16);
            }

            // Smooth animations on scroll
            const observeElements = document.querySelectorAll('.about-card, .stat-card, .timeline-item, .value-item');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
                    }
                });
            }, {
                threshold: 0.1
            });

            observeElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
@endpush
