<!--==============================
    Team Area
    ==============================-->
<section class="team-area-1 space overflow-hidden">
    <!--        <div class="shape-mockup jump d-none d-lg-block" style="top: 6%; right: 4%;">-->
    <!--            <img src="assets/img/shape/team-2-shape.png" alt="img">-->
    <!--        </div>-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center mt-1">
                    <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"> <span class="double-line"></span>Membres de l'équipe</p>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Rencontrez nos agents SENIMMO</h2>
                </div>
            </div>
        </div>

        <div class="slider-area mb-20">
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}, "autoHeight": "true"}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    {{--<div class="swiper-slide">
                        <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                            <div class="team-img">
                                <img src="{{asset('web/assets/img/team/team_2_1.png')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="left-contet">
                                    <h3 class="box-title"><a href="team-details.html">Vickie Wisozk</a></h3>
                                    <span class="team-desig">Real Estate Manager</span>
                                </div>
                                <div class="team-social">
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    @forelse(\App\Models\Agent::all() as $agent)
                        <div class="swiper-slide">
                            <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                                <div class="team-img">
                                    <img src="{{asset('web/assets/img/team/team_2_1.png')}}" alt="{{$agent->name}}">
                                    {{--<img src="{{asset('web/assets/img/team/team_'.$agent->id.'.png')}}" alt="{{$agent->name}}">--}}
                                </div>
                                <div class="team-content">
                                    <div class="left-contet">
                                        <h3 class="box-title"><a href="{{ route('agents.show', $agent->slug) }}">{{$agent->name}}</a></h3>
                                        <span class="team-desig">{{$agent->title}}</span>
                                    </div>
                                    <div class="team-social">
                                        <div class="th-social">
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Aucune propriété disponible pour le moment.</p>
                        </div>
                    @endforelse
                    {{--<!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                            <div class="team-img">
                                <img src="{{asset('web/assets/img/team/team_2_2.png')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="left-contet">
                                    <h3 class="box-title"><a href="team-details.html">Renee Strosin</a></h3>
                                    <span class="team-desig">Property Developer</span>
                                </div>
                                <div class="team-social">
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                            <div class="team-img">
                                <img src="{{asset('web/assets/img/team/team_2_3.png')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="left-contet">
                                    <h3 class="box-title"><a href="team-details.html">Zulia Era</a></h3>
                                    <span class="team-desig">Listing Coordinator</span>
                                </div>
                                <div class="team-social">
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                            <div class="team-img">
                                <img src="{{asset('web/assets/img/team/team_2_4.png')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="left-contet">
                                    <h3 class="box-title"><a href="team-details.html">Bernice Roberts</a></h3>
                                    <span class="team-desig">Leasing Consultant</span>
                                </div>
                                <div class="team-social">
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                            <div class="team-img">
                                <img src="{{asset('web/assets/img/team/team_2_5.png')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="left-contet">
                                    <h3 class="box-title"><a href="team-details.html">Martha Leffler</a></h3>
                                    <span class="team-desig">Real Estate Manager</span>
                                </div>
                                <div class="team-social">
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="team-card style-2" data-bg-src="{{asset('web/assets/img/shape/team-2-bg-shape.png')}}">
                            <div class="team-img">
                                <img src="{{asset('web/assets/img/team/team_2_6.png')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="left-contet">
                                    <h3 class="box-title"><a href="team-details.html">Thomas Kirlin</a></h3>
                                    <span class="team-desig">Listing Coordinator</span>
                                </div>
                                <div class="team-social">
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                </div>
            </div>

            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>

        <div class="row gy-40 justify-content-center">
            <div class="col-xl-8">
                <p class="chat-text-wrap text-center pe-xl-5 ps-xl-5 mb-0">Les agents Explore Property sont là pour vous aider avec tous vos objectifs d'achat, de location et de vente. Trouvez la maison de vos rêves avec un expert en qui vous pouvez avoir confiance. <a class="text-theme" href="../web/contact.php">Contactez-nous</a></p>
            </div>
        </div>
    </div>
</section>
