<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container-fluid nav__container nav__container--side-padding">
            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="{{route('homepage')}}" class="logo-container flex-child">
                        <img class="logo" src="{{asset('frontend')}}/img/logo.png" srcse{{asset('frontend')}}/t="img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
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
                            <a href="{{asset('frontend')}}/index.html" aria-haspopup="true">Home</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="{{asset('frontend')}}/index.html">Home 1</a></li>
                                <li><a href="{{asset('frontend')}}/index-2.html">Home 2</a></li>
                                <li><a href="{{asset('frontend')}}/index-3.html">Home 3</a></li>
                                <li><a href="{{asset('frontend')}}/index-4.html">Home 4</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Pages</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="{{asset('frontend')}}/about.html">About</a></li>
                                <li><a href="{{asset('frontend')}}/services.html">Services</a></li>
                                <li><a href="{{asset('frontend')}}/single-service.html">Single Service</a></li>
                                <li><a href="{{asset('frontend')}}/contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Works</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="{{asset('frontend')}}/portfolio.html">Portfolio</a></li>
                                <li><a href="{{asset('frontend')}}/portfolio-gallery.html">Portfolio Gallery</a></li>
                                <li><a href="{{asset('frontend')}}/portfolio-single.html">Portfolio Single</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Features</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="{{asset('frontend')}}/icons.html">Icons</a></li>
                                <li><a href="{{asset('frontend')}}/elements.html">Elements</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="{{asset('frontend')}}/blog.html" aria-haspopup="true">Blog</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="{{asset('frontend')}}/blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="{{asset('frontend')}}/blog.html">Blog Standard</a></li>
                                <li><a href="{{asset('frontend')}}/single-post.html">Single Post</a></li>
                            </ul>
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
