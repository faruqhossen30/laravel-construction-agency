<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container-fluid nav__container nav__container--side-padding">
            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="{{route('homepage')}}" class="logo-container flex-child">
                        <img class="logo" style="height: 60px" src="{{asset('/')}}/logo.png" srcse{{asset('frontend')}}/t="img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
                    </a>

                    <!-- Mobile toggle -->
                    <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                    </button>
                </div>

                <!-- Navbar -->
                <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                    <ul class="nav__menu">
                        <li class="nav__dropdown active">
                            <a href="{{route('homepage')}}" aria-haspopup="true">Home</a>
                        </li>
                        <li class="nav__dropdown active">
                            <a href="{{route('homepage')}}" aria-haspopup="true">About Us</a>
                        </li>
                        <li class="nav__dropdown active">
                            <a href="{{route('homepage')}}" aria-haspopup="true">Contact Now</a>
                        </li>

                    </ul> <!-- end menu -->
                    <div class="nav__phone nav__phone--mobile d-lg-none">
                        <span class="nav__phone-text">Call us:</span>
                        <a href="{{asset('frontend')}}/tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>
                    </div>

                    <div class="nav__socials nav__socials--mobile d-lg-none">
                        <div class="socials">
                            <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                        </div>
                    </div>
                </nav> <!-- end nav-wrap -->

                <div class="nav__phone nav--align-right d-none d-lg-block">
                    <span class="nav__phone-text">Call us:</span>
                    <a href="{{asset('frontend')}}/tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>
                </div>

                <div class="nav__socials d-none d-lg-block">
                    <div class="socials">
                        <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                        <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                        <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                    </div>
                </div>

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
