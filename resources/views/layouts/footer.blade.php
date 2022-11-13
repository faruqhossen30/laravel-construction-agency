<footer class="footer bg-dark-overlay" style="background-image: url(img/footer/1.jpg);">
    <div class="container-fluid">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-md-4">
                    <div class="widget widget-about-us">
                        <!-- Logo -->
                        <a href="{{route('homepage')}}" class="logo-container flex-child">
                            <img class="logo" src="{{ asset('/') }}/logo.png"
                                srcse{{ asset('frontend') }}/t="img/logo_white.png 1x, img/logo_white@2x.png 2x"
                                alt="logo">
                        </a>
                    </div>
                    <hr class="py-2">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <a href="{{ $site->twitter }}" class="social social-twitter" aria-label="twitter"
                                title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="{{ $site->facebook }}" class="social social-facebook" aria-label="facebook"
                                title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                            <a href="{{ $site->youtube }}" class="social social-youtube" aria-label="youtube"
                                title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                            <a href="{{ $site->instagram }}" class="social social-instagram" aria-label="instagram"
                                title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                        </ul>
                    </div>
                </div> <!-- end logo -->

                <div class="col-md-4">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="{{route('homepage')}}">Home</a></li>
                            <li><a href="{{route('aboutus')}}">About Us</a></li>
                            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <p style="font-size: 22px;bold; ">Business Hours</p>
                    <div class="timesection d-block">
                        <div class="sun-time d-flex ">
                            <p>Mon : </p>
                            <p class="text-dark" style="margin-left:5px;">7:00 AM – 6:00 PM</p>
                        </div>
                        <div class="sun-time d-flex ">
                            <p>Thu : </p>
                            <p class="text-dark" style="margin-left:5px;">7:00 AM – 6:00 PM</p>
                        </div>
                        <div class="sun-time d-flex ">
                            <p>Wed : </p>
                            <p class="text-dark" style="margin-left:5px;">7:00 AM – 6:00 PM</p>
                        </div>
                        <div class="sun-time d-flex ">
                            <p>Thus : </p>
                            <p class="text-dark" style="margin-left:5px;">7:00 AM – 6:00 PM</p>
                        </div>
                        <div class="sun-time d-flex ">
                            <p>Fri : </p>
                            <p class="text-dark" style="margin-left:5px;">7:00 AM – 6:00 PM</p>
                        </div>
                        <div class="sun-time d-flex ">
                            <p>Sat : </p>
                            <p class="text-dark" style="margin-left:5px;">7:00 AM – 6:00 PM</p>
                        </div>
                        <div class="sun-time d-flex ">
                            <p>Sun : </p>
                            <p class="text-dark" style="margin-left:5px;">Closed</p>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div> <!-- end container -->

    <div class="footer__bottom">
        <div class="container-fluid text-right text-md-center">
            <span class="copyright">
                &copy; 2022 Brooklyn Construction
            </span>
        </div>
    </div> <!-- end footer bottom -->
</footer>



