@extends('app')

@section('content')
    <div class="slider {{ session('mood')=='{dark}'?'dark-mood':'light-mood' }} change" id="about">
        <div class="slider__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 slider__content-con mb-0">
                        <div class="h1-con light-color-h change-color-h">
                            Pro Traders for forex services
                        </div>
                        <div class="def-con light-color-p change-color-p" style="margin-bottom: 7rem;">
                            A group specialized in providing the best forex services in the Arab world,
                            educational courses, free recommendations, free strategies and indicators,
                            and analyzes
                        </div>

                    </div>
                    <div class="col-lg-6 position-relative pt-5">
                        <iframe class="w-100" style="height: 300px;" src="https://www.youtube.com/embed/NQzxIUMeaq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!---- Social Icon ---->
        <div class="main-slider__social">
            <ul class="ul">
                <li class=" li facebook">
                    <a target="_blank" href="https://www.facebook.com/Pro-Traders-Group-1443621565875011/">
                        Facebook
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class=" li telegram">
                    <a target="_blank" href="https://t.me/AmirNady">
                        Telegram
                        <i class="fab fa-telegram" aria-hidden="true"></i>
                    </a>
                </li>
                <li target="_blank" class="li youtube">
                    <a href="https://www.youtube.com/c/AmirNady">
                        Youtube
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
                <li target="_blank" class="li whatsapp">
                    <a href="https://wa.me/201001196902">
                        Whatsap
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="light-mood why-we change {{ session('mood')=='{dark}'?'dark-mood':'light-mood' }} " id="services">
        <div class="title">
            <h1 class="light-color-h change-color-h">Lets show what pro traders provide for you </h1>
        </div>

        <div class="search-section {{ session('mood')=='{dark}'?'dark-mood':'light-mood' }} change" style="margin-top: 10rem !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <div class="card card-x p-4">
                            <img src="{{ asset('images/main_picture_fonders4-01.svg') }}" alt="">
                            <h1 class="text-center">
                                The best forex companies
                            </h1>
                            <h4 class="pl-5">
                                <ol class="theBest">
                                    <li> asd ff</li>
                                    <li> asd ff</li>
                                    <li> asd ff</li>
                                    <li> asd ff</li>
                                </ol>
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <div class="card card-x p-4 text-center">
                            <img src="{{ asset('images/main_picture_fonders_details4-01.svg') }}" alt="">
                            <h1>Open a live trading account - demo</h1>
                            <p class="pl-3">
                                the service providers healthcare companies and the market
                                in general over the social media platforms Based on our last
                                work experience in medical insurance field.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <div class="card card-x p-4 text-center">
                            <img src="{{ asset('images/developers-white2-01.svg') }}" alt="">
                            <h1>Trading strategies</h1>
                            <p class="pl-3">
                                the service providers healthcare companies and the market
                                in general over the social media platforms Based on our last
                                work experience in medical insurance field.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <div class="card card-x p-4 text-center">
                            <img src="{{ asset('images/presentation.png') }}" alt="" class="w-100">
                            <h1> Free Forex Indicators</h1>
                            <p class="pl-3">
                                the service providers healthcare companies and the market
                                in general over the social media platforms Based on our last
                                work experience in medical insurance field.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <div class="card card-x p-4 text-center">
                            <img src="{{ asset('images/mob.png') }}" alt="" class="w-100">
                            <h1>Learn Forex</h1>
                            <p class="pl-3">
                                the service providers healthcare companies and the market
                                in general over the social media platforms Based on our last
                                work experience in medical insurance field.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <div class="card card-x p-4 text-center">
                            <img src="{{ asset('images/main_picture_fonders4-01.svg') }}" alt="">
                            <h1>
                                Customer experiences and opinions
                            </h1>
                            <p class="pl-3">
                                the service providers healthcare companies and the market
                                in general over the social media platforms Based on our last
                                work experience in medical insurance field.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses {{ session('mood')=='{dark}'?'dark-mood':'light-mood' }} change" style="margin-top: 15rem;" id="vedios">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="images/forex.mp4"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vedio-sub light-color-p change-color-p">
                        For the first time in the Arab world, trading will take place
                        Liquidity can enter strong and directional deals
                        Right market with high success rate ↖️👌 <br>
                        <div class="mt-3">
                            ♻️ Site Features :-
                        </div>
                        <div class="pl-2 mt-3">
                        ✅ The site tells you the liquidity of currency pairs, whether buying or selling, stronger and weaker currency in real time and with accurate digital analysis <br>
                        ✅ 24 hours support ⏰ <br>
                        ✅ Through all this, your deals enter the right market direction
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
