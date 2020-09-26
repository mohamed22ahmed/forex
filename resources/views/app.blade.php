<html lang="{{ @session('lang') }}" dir="{{ @session('lang')=='ar' ? 'rtl' : 'ltr' }}">
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>

	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">

	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Pro Traders</title>
        <link
             rel = "icon"
            href ="{{ asset('images/forex-logo-white.jpg') }}"
            type = "image/x-icon">
        <link rel="shortcut icon" href="{{ asset('images/forex-logo-white.jpg') }}">
        <!--call bootstrap-->
	    <link rel="stylesheet"href="{{ asset('css/bootstrap.css') }}"/>
        <!--Page Style-->
        <link rel="stylesheet"href="{{ asset('css/main.css') }}"/>

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


       <!--Animate.css-->
       <link rel="stylesheet"href="{{ asset('css/animate.min.css') }}"/>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	   <!--Internet Explorer-->
	    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('js/respond.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <script> window.default_locale_lang = "{{ config('app.locale') }}"; </script>
       <!---->

       <style>
           .navbar-toggler:not(:disabled):not(.disabled) {
                cursor: pointer;
                background: #FFF;
            }
           .li-cat {
            cursor: pointer;
            top: 0px;
            overflow: visible;
            padding-bottom: 0px;
            font-family: Roboto;
            font-size: 14px;
            color: rgb(136, 136, 136);
            line-height: 1.2;
            padding-top: 1px;
            border-radius: 0px;
           }
           .dropdown-toggle::after {
                display: none;
            }
            .nav-item:last-of-type {
                padding: 0 20px;
                margin-left: 5px;
                background: -webkit-linear-gradient(left, #9473dd 0%, #1ac9e4 100%);
                border-radius: 20px;
                -o-border-radius: 20px;
                -ms-border-radius: 20px;
                -moz-border-radius: 20px;
                -webkit-border-radius: 20px;
            }
            .footer__title {
                color: #FFF;
            }
            #footer a , #footer li {
                color: #999 !important;
            }


       </style>
    </head>
	<body class="{{ session('mood')=='{dark}'?'dark-mood':'light-mood' }} change">
        @if(Session('lang')=='ar')
            {{ App::setLocale('ar') }}
        @endif
        <!--- Header Section-->
        <div class="Nav wow fadeInUp">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light-mood nav-scroll  fixed-top  py-4  mb-5 pl-5 pr-5">
                    <div class="container">
                        <img src="images/final white-01.png" style=" width: 100px ; height: 80px;" >
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto"></ul>
                            <ul class="navbar-nav mr-auto"></ul>
                            <ul class="navbar-nav">
                                <li class="nav-item pr-5">
                                    <!--- Nav Contact style in contact.scss --->
                                    <a class="nav-link nav-contact" href="/">Home</a>
                                </li>
                                <li class="nav-item pr-5">
                                    <a class="nav-link nav-contact" href="#about">About Us</a>
                                </li>
                                <li class="nav-item pr-5">
                                    <a class="nav-link nav-contact" href="#services">Services</a>
                                </li>
                                <li class="nav-item pr-5">
                                    <a class="nav-link nav-contact" href="/contact">Contact</a>
                                </li>
                                <li class="nav-item dropdown dropdown-move position-relative pr-5">
                                    <a class="nav-link dropdown-toggle nav-contact" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Mode
                                    </a>
                                    <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                                    <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item nav-light light" href="/mood/{light}">Light</a>
                                      <a class="dropdown-item nav-light dark" href="/mood/{dark}">Dark</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-move position-relative pr-5">
                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                        <i  @if(config('app.locale', 'en')=='en') class="flag-icon flag-icon-us"  @else class="flag-icon flag-icon-sa" @endif ></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right p-0">
                                        <a href="/lang/en"  class="{{ @session('lang')=='en'? 'dropdown-item active':'dropdown-item'}}">
                                        <i class="flag-icon flag-icon-us mr-2"></i> English
                                        </a>
                                        <a href="/lang/ar"  class="{{ @session('lang')=='ar'? 'dropdown-item active':'dropdown-item'}}">
                                        <i class="flag-icon flag-icon-sa mr-2"></i> اللغة العربية
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item shadow-sm "><a class="nav-link nav-contact p-3" style="color: #FFF !important;" href="../form/index.html">Get Start</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')

        <footer class="footer" id="footer" style="background-color:#192057 !important ; color: #FFF !important;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer__title">Links</div>
                        <ul class="unstyled-list">
                            <li> <a href="/">Home</a></li>
                            <li> <a href="/contact">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="footer__title">Contact us</div>
                        <ul class="unstyled-list">
                            <li><i class="fab fa-whatsap mr-3 text-primary"></i>  (+02) 01001196902 </li>
                            <li><i class="fas fa-mail-bulk mr-3 text-primary"></i> Telegram: https://t.me/AmirNady </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>



        <script src="http://4soft-eg.net/front/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="http://4soft-eg.net/front/js/gmaps.js"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="{{ asset('js/wow.min.js') }}"></script>
        <script>new WOW().init();</script>
        <script src="{{ asset('js/jQuery3.3.1.min.js') }}"></script>
        <!---Slider Laibiray-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('js/sliderComponents.js') }}"></script>
        <script src="{{ asset('js/e.js') }}"></script>
	</body>



</html>

