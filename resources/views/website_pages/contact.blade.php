@extends('website_pages.app')

@section('content')
<div class="Contact">
    <div class="container">
        <div class="contact-content text-center">
            <div class="contact-content__title w-100 {{ session('mood')=='{dark}'?'dark':'light' }}-color-h change-color-h">
                HAVE SOME QUESTIONS?
            </div>
            <div class="location-content mt-3 {{ session('mood')=='{dark}'?'dark':'light' }}-color-h change-color-h">
                <span class="{{ session('mood')=='{dark}'?'dark':'light' }}-color-h change-color-h"><i class="fas fa-globe mr-3 globe-icon {{ session('mood')=='{dark}'?'dark':'light' }}-color-h change-color-h"></i></span> <span class="mr-5 {{ session('mood')=='{dark}'?'dark':'light' }}-color-h change-color-h">LOCATION</span> Assuit : Assuit University
            </div>
        </div>
        <div class="contact-operations">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center mb-5 contact-img">
                    <img src="{{ asset('website_folder/imag/letter.svg')}}" alt="" style="width: 320px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center mb-5">
                    <form action="" class="form-gtoup" style="padding-top: 4rem;">
                        <input type="text" class="form-control mb-4 contact-input" placeholder="First Name">
                        <input type="text" class="form-control mb-4 contact-input" placeholder="Last Name">
                        <input type="email" class="form-control mb-4 contact-input" placeholder="Your Email">
                        <textarea name="" id="" class="textarea-contact" placeholder="Your Question"></textarea>
                        <input type="submit" name="" id="" class="form-control submit-contact-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>

<!---- Social Icon ---->
<div class="main-slider__social">
    <ul class="ul">
        <li class=" li twitter">
            <a href="#">
                Twitter
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class=" li facebook">
            <a href="#">
                Facebook
                <i class="fab fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li class=" li google">
            <a href="#">
                Google-Plus
                <i class="fab fa-google-plus" aria-hidden="true"></i>
            </a>
        </li>
        <li class="li insta">
            <a href="#">
                Instagram
                <i class="fab fa-instagram" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>

</div>
</div>
@endsection
