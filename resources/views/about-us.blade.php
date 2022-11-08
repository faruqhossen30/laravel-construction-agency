@extends('layouts.app')
@section('content')



    <!-- Intro -->
    <section class="section-wrap intro pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="intro__title">About Us</h2>
                    <p>
                        The premier online destination for original and timely commercial real estate content. We deliver trusted, relevant real-estate news and insights, effectively providing our audience with a 360 degree view of the industry.

GlobeSt.com’s trusted and independent team of experts provides commercial real estate owners, investors, developers, brokers and finance professionals with comprehensive coverage, analysis and best practices necessary to innovate and build their businesses. We celebrate those that are adapting and succeeding in new ways, translate the impact of macro issues, local market trends and emerging technologies into digestible, shareable information that can be immediately put into real-life practice.

Along with GlobeSt.com, our print publication Real Estate Forum and the RealShare Conference Series reaches over 250,000 professionals across all markets, sectors, and business disciplines. Our unique print/online/events integrated business model allows the ALM Real Estate Media Group to deeply understand the dynamic real estate industry and the evolving needs of our audience.
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
                    <img src="{{ asset('/') }}img/tolu-olubode-PlBsJ5MybGc-unsplash.jpg" class="img-full-width"
                        alt="">
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
                    <a href="#" class="filter" data-filter=".{{ $category->slug }}">{{ $category->name }}</a>
                @endforeach
                {{-- <a href="#" class="filter" data-filter=".residential">Residential</a>
                <a href="#" class="filter" data-filter=".commercial">Commercial</a>
                <a href="#" class="filter" data-filter=".interior">Interior</a>
                <a href="#" class="filter" data-filter=".landscape">Landscape</a> --}}
            </div> <!-- end filter -->

            <div class="row masonry-grid">

                @foreach ($galleries as $gallery)
                    <div class="masonry-item col-lg-4 project hover-trigger {{ $gallery->category->slug }}">
                        <div class="project__container">
                            <div class="project__img-holder">
                                <a href="#">
                                    <img src="{{ asset('uploads/gallery/' . $gallery->name) }}" alt=""
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


            </div>
        </div>
    </section> <!-- end portfolio -->









@endsection
