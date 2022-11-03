<footer class="footer bg-dark-overlay" style="background-image: url(img/footer/1.jpg);">
    <div class="container-fluid">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="widget widget-about-us">
                        <!-- Logo -->
                        <a href="{{asset('frontend')}}/index.html" class="logo-container flex-child">
                            <img class="logo" src="{{asset('frontend')}}/img/logo_white.png" srcse{{asset('frontend')}}/t="img/logo_white.png 1x, img/logo_white@2x.png 2x" alt="logo">
                        </a>
                    </div>
                </div> <!-- end logo -->

                <div class="col-lg-2 col-md-3">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-2 col-md-3">
                    <div class="widget">
                        <div class="socials">
                            <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end container -->

    <div class="footer__bottom">
        <div class="container-fluid text-right text-md-center">
            <span class="copyright">
                &copy; 2022 Sedona, {{$site->phone}}
            </span>
        </div>
    </div> <!-- end footer bottom -->
</footer>
