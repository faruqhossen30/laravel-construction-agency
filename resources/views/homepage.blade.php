@extends('layouts.app')
@section('content')
    <!-- Revolution Slider -->
    <div class="rev_slider_wrapper">
        <div class="rev_slider" id="slider-1" data-version="5.0">
            <ul>
                <!-- SLIDE 1 -->
                <li data-fstransition="fade" data-transition="fade" data-easein="default" data-easeout="default"
                    data-slotamount="1" data-masterspeed="1200" data-delay="8000" data-title="Modern Living Room">
                    <!-- MAIN IMAGE -->
                    <img src="/img/1.jpg" alt="" data-bgrepeat="no-repeat"
                        data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">

                    <!-- HERO TITLE -->
                    <div class="tp-caption hero-text" data-x="30" data-y="center" data-voffset="[-140,-120,-100,-180]"
                        data-fontsize="[72,62,52,46]" data-lineheight="[72,62,52,46]" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
									"delay":1000,
									"speed":900,
									"frame":"0",
									"from":"y:150px;opacity:0;",
									"ease":"Power3.easeOut",
									"to":"o:1;"
									},{
									"delay":"wait",
									"speed":1000,
									"frame":"999",
									"to":"opacity:0;","ease":"Power3.easeOut"
								}]'
                        data-splitout="none">Brooklyn Construction<span class="hero-dot">.</span>
                    </div>

                    <!-- HERO SUBTITLE -->
                    <div class="tp-caption small-text" data-x="30" data-y="center" data-voffset="[-40,-30,-20,0]"
                        data-fontsize="[21,21,21,21]" data-lineheight="34" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
									"delay":1100,
									"speed":900,
									"frame":"0",
									"from":"y:150px;opacity:0;",
									"ease":"Power3.easeOut",
									"to":"o:1;"
									},{
									"delay":"wait",
									"speed":1000,
									"frame":"999",
									"to":"opacity:0;","ease":"Power3.easeOut"
								}]'>
                                Fully Insured. Free Estimates
                                Home Improvement Contractor
                    </div>

                    <!-- BUTTON -->
                    <div class="tp-caption" data-x="30" data-y="center" data-voffset="[60,60,60,100]"
                        data-lineheight="55" data-hoffset="0"
                        data-frames='[{
										"delay":1200,
										"speed":900,
										"frame":"0",
										"from":"y:150px;opacity:0;",
										"ease":"Power3.easeOut",
										"to":"o:1;"
										},{
										"delay":"wait",
										"speed":1000,
										"frame":"999",
										"to":"opacity:0;","ease":"Power3.easeOut"
									}]'>
                        <a href='{{route('contactpage')}}' class='btn btn--lg btn--color'>Make Apoinment</a>
                    </div>

                </li> <!-- end slide 1 -->

                <!-- SLIDE 2 -->
                <li data-fstransition="fade" data-transition="fade" data-easein="default" data-easeout="default"
                    data-slotamount="1" data-masterspeed="1200" data-delay="8000" data-title="Astralian Museum">
                    <!-- MAIN IMAGE -->
                    <img src="/img/chandler-denise-Lgaw-BnaAAI-unsplash (1).jpg" alt="" data-bgrepeat="no-repeat"
                        data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">

                    <!-- HERO TITLE -->
                    <div class="tp-caption hero-text" data-x="30" data-y="center" data-voffset="[-140,-120,-100,-180]"
                        data-fontsize="[72,62,52,46]" data-lineheight="[72,62,52,46]" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
									"delay":1000,
									"speed":900,
									"frame":"0",
									"from":"y:150px;opacity:0;",
									"ease":"Power3.easeOut",
									"to":"o:1;"
									},{
									"delay":"wait",
									"speed":1000,
									"frame":"999",
									"to":"opacity:0;","ease":"Power3.easeOut"
								}]'
                        data-splitout="none">Brooklyn Construction<span class="hero-dot">.</span>
                    </div>

                    <!-- HERO SUBTITLE -->
                    <div class="tp-caption small-text" data-x="30" data-y="center" data-voffset="[-40,-30,-20,0]"
                        data-fontsize="[21,21,21,21]" data-lineheight="34" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
									"delay":1100,
									"speed":900,
									"frame":"0",
									"from":"y:150px;opacity:0;",
									"ease":"Power3.easeOut",
									"to":"o:1;"
									},{
									"delay":"wait",
									"speed":1000,
									"frame":"999",
									"to":"opacity:0;","ease":"Power3.easeOut"
								}]'>
                                Fully Insured. Free Estimates
                                Home Improvement Contractor
                    </div>

                    <!-- BUTTON -->
                    <div class="tp-caption" data-x="30" data-y="center" data-voffset="[60,60,60,100]"
                        data-lineheight="55" data-hoffset="0"
                        data-frames='[{
										"delay":1200,
										"speed":900,
										"frame":"0",
										"from":"y:150px;opacity:0;",
										"ease":"Power3.easeOut",
										"to":"o:1;"
										},{
										"delay":"wait",
										"speed":1000,
										"frame":"999",
										"to":"opacity:0;","ease":"Power3.easeOut"
									}]'>
                        <a href='{{route('contactpage')}}' class='btn btn--lg btn--color'>Make Apoinment</a>
                    </div>

                </li> <!-- end slide 1 -->

                <!-- SLIDE 3 -->
                {{-- <li data-fstransition="fade" data-transition="fade" data-easein="default" data-easeout="default"
                    data-slotamount="1" data-masterspeed="1200" data-delay="8000" data-title="Horizon Urban">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('frontend') }}/img/revolution/home-1/3.jpg" alt="" data-bgrepeat="no-repeat"
                        data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">

                    <!-- HERO TITLE -->
                    <div class="tp-caption hero-text" data-x="30" data-y="center"
                        data-voffset="[-140,-120,-100,-180]" data-fontsize="[72,62,52,46]"
                        data-lineheight="[72,62,52,46]" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
									"delay":1000,
									"speed":900,
									"frame":"0",
									"from":"y:150px;opacity:0;",
									"ease":"Power3.easeOut",
									"to":"o:1;"
									},{
									"delay":"wait",
									"speed":1000,
									"frame":"999",
									"to":"opacity:0;","ease":"Power3.easeOut"
								}]'
                        data-splitout="none">Horizon Urban<span class="hero-dot">.</span>
                    </div>

                    <!-- HERO SUBTITLE -->
                    <div class="tp-caption small-text" data-x="30" data-y="center" data-voffset="[-40,-30,-20,0]"
                        data-fontsize="[21,21,21,21]" data-lineheight="34" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
									"delay":1100,
									"speed":900,
									"frame":"0",
									"from":"y:150px;opacity:0;",
									"ease":"Power3.easeOut",
									"to":"o:1;"
									},{
									"delay":"wait",
									"speed":1000,
									"frame":"999",
									"to":"opacity:0;","ease":"Power3.easeOut"
								}]'>
                        The Sedona Theatre is Ireland's largest fixed-seat theatre.<br>It's located in Grand Canal Square,
                        Dublin.
                    </div>

                    <!-- BUTTON -->
                    <div class="tp-caption" data-x="30" data-y="center" data-voffset="[60,60,60,100]"
                        data-lineheight="55" data-hoffset="0"
                        data-frames='[{
										"delay":1200,
										"speed":900,
										"frame":"0",
										"from":"y:150px;opacity:0;",
										"ease":"Power3.easeOut",
										"to":"o:1;"
										},{
										"delay":"wait",
										"speed":1000,
										"frame":"999",
										"to":"opacity:0;","ease":"Power3.easeOut"
									}]'>
                        <a href='{{route('contactpage')}}' class='btn btn--lg btn--color'>Make Apoinment</a>
                    </div>

                </li> <!-- end slide 1 --> --}}

            </ul>
        </div>
    </div>

    <!-- Intro -->
    <section class="section-wrap intro pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="intro__title">About Us</h2>
                    <p>
                        An innovative and creative product of its Silicon Valley roots, Brooklyn Construction, Inc. utilizes its general contracting experience and design/build capabilities to meet the needs of each unique project. Ranked as the largest general contractor in Silicon Valley for the majority of the past two decades, this veteran-owned company maintains a notable regional presence in the West. Our team handles projects of all sizes and types for a wide range of owners, developers and end users.
                    </p>
                    <div class="row mb-lg-48">
                        <div class="col-sm-4">
                            <div class="feature">
                                <i class="icon-Hotel-3 feature__icon"></i>
                                <h4 class="feature__title">Architecture</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature">
                                <i class="icon-Ruler-Tool feature__icon"></i>
                                <h4 class="feature__title">Interior Design</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature">
                                <i class="icon-Trowel-and-Brick feature__icon"></i>
                                <h4 class="feature__title">Construction</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('/') }}img/tolu-olubode-PlBsJ5MybGc-unsplash.jpg" class="img-full-width" alt="">
                </div>
            </div>
        </div>
    </section> <!-- end intro -->


    <!-- Portfolio -->
    <section class="section-wrap pt-72 pb-72 pb-lg-40">
        <div class="container">
            <div class="title-row">
                <h2 class="section-title">Discover Recent Works</h2>
            </div>

            <!-- Filter -->
            <div class="masonry-filter">
                <a href="#" class="filter active" data-filter="*">All</a>
                @foreach ($categories as $category)
                    <a href="#" class="filter" data-filter=".{{$category->slug}}">{{$category->name}}</a>
                @endforeach
                {{-- <a href="#" class="filter" data-filter=".residential">Residential</a>
                <a href="#" class="filter" data-filter=".commercial">Commercial</a>
                <a href="#" class="filter" data-filter=".interior">Interior</a>
                <a href="#" class="filter" data-filter=".landscape">Landscape</a> --}}
            </div> <!-- end filter -->

            <div class="row masonry-grid">

                @foreach ($galleries as $gallery)
                <div class="masonry-item col-lg-4 project hover-trigger {{$gallery->category->slug}}">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="#">
                                <img src="{{ asset('uploads/gallery/'.$gallery->name) }}" alt=""
                                    class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Keangnam Grand Hall</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                 <!-- end project -->

                {{-- <div class="masonry-item col-lg-4 project hover-trigger commercial">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{ asset('frontend') }}/portfolio-single.html">
                                <img src="{{ asset('frontend') }}/img/portfolio/masonry/2.jpg" alt=""
                                    class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Green House</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-lg-4 project hover-trigger interior">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{ asset('frontend') }}/portfolio-single.html">
                                <img src="{{ asset('frontend') }}/img/portfolio/masonry/3.jpg" alt=""
                                    class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Contemporary Villa</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-lg-4 project hover-trigger landscape">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{ asset('frontend') }}/portfolio-single.html">
                                <img src="{{ asset('frontend') }}/img/portfolio/masonry/4.jpg" alt=""
                                    class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Business Office</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project --> --}}

            </div>
        </div>
    </section> <!-- end portfolio -->


    <!-- Testimonials -->
    <section class="section-wrap bg-dark-overlay" style="background-image: url(img/testimonials/bg.jpg);">
        <div class="container">
            <div class="title-row text-center">
                <p class="subtitle">Testimonials</p>
                <h2 class="section-title">What clients say about us</h2>
                <i class="quote">“</i>
            </div>

            <div class="slick-slider slick-testimonials">
                @foreach ($testmonials as $testmonial)
                <div class="testimonial clearfix">
                    <div class="testimonial__body">
                        <p class="testimonial__text">“{{$testmonial->text}}”</p>
                    </div>
                    <div class="testimonial__info">
                        <span class="testimonial__company">By:- {{$testmonial->client_name}}</span>
                        {{-- <span class="testimonial__company">DeoThemes</span> --}}
                    </div>
                </div>
                @endforeach


            </div> <!-- end slider -->

        </div>
    </section> <!-- end testimonials -->

    <!-- Partners -->
    {{-- <div class="partners bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/partners/1.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/partners/2.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/partners/3.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/partners/4.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/partners/5.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/partners/6.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- From Blog -->
    <section class="section-wrap blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-grid__title-col d-flex flex-column mb-lg-48">
                        <div class="title-row">
                            <p class="subtitle">From Blog</p>
                            <h2 class="section-title">Specialized news</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequun tur magni dolores eos qui
                                ratione</p>
                        </div>
                        <div class="call-us mt-auto">
                            <i class="icon-Dispacher-2 call-us__icon"></i>
                            <span class="call-us__title">Call us anytime</span>
                            @if ($site->phone)
                            <a href="tel:{{$site->phone}}" class="call-us__phone-number">
                                {{$site->phone}}</a>

                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="from-blog">
                        <div class="row row-60">
                            <div class="col-lg-6">
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="{{ asset('frontend') }}/single-post.html">
                                            <img src="{{ asset('frontend') }}/img/blog/from_blog_1.jpg"
                                                class="entry__img" alt="">
                                        </a>
                                    </div>
                                    <div class="entry__body">
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <span>15 November 2018</span>
                                            </li>
                                        </ul>
                                        <h4 class="entry__title">
                                            <a href="{{ asset('frontend') }}/single-post.html">Best buildings of 2018
                                                revealed at day one of World Architecture Festival 2018.</a>
                                        </h4>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="{{ asset('frontend') }}/single-post.html">
                                            <img src="{{ asset('frontend') }}/img/blog/from_blog_2.jpg"
                                                class="entry__img" alt="">
                                        </a>
                                    </div>
                                    <div class="entry__body">
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <span>15 November 2018</span>
                                            </li>
                                        </ul>
                                        <h4 class="entry__title">
                                            <a href="{{ asset('frontend') }}/single-post.html">Sunken washroom by Studio
                                                304 allows residents to bathe in a garden setting.</a>
                                        </h4>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="from-blog__recent-posts">
                            <ul class="from-blog__recent-posts-list">
                                <li class="from-blog__recent-posts-item">
                                    <span class="from-blog__post-number">1</span>
                                    <a href="{{ asset('frontend') }}/single-post.html"
                                        class="from-blog__post-url">Guadalajara offers "extraordinary opportunities" for
                                        young architects</a>
                                </li>
                                <li class="from-blog__recent-posts-item">
                                    <span class="from-blog__post-number">2</span>
                                    <a href="{{ asset('frontend') }}/single-post.html" class="from-blog__post-url">Lacy
                                        Brick by Pamphilon ArchitectsResidentialPamphilon Architects adds textured
                                        brick extension to Edwardian house in London</a>
                                </li>
                                <li class="from-blog__recent-posts-item">
                                    <span class="from-blog__post-number">3</span>
                                    <a href="{{ asset('frontend') }}/single-post.html"
                                        class="from-blog__post-url">Guadalajara offers "extraordinary opportunities" for
                                        young architects</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- end from blog -->
@endsection
