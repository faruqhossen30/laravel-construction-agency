@extends('layouts.app')
@section('content')
</section> <!-- end page title -->
    <section class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact">
                        <h5 class="contact__title">Contact Us</h5>
                        <ul class="contact__items">
                            @if ($site->address)
                            <li class="contact__item">
                                <span class="contact__item-label">Address:</span>
                                <address>{{$site->address}}</address>
                            </li>
                            @endif
                            @if ($site->phone)
                            <li class="contact__item">
                                <span class="contact__item-label">Phone: </span>
                                <a href="tel:{{$site->phone}}">{{$site->phone}}</a>
                            </li>
                            @endif
                            @if ($site->phone2)
                            <li class="contact__item">
                                <span class="contact__item-label">Phone: </span>
                                <a href="tel:{{$site->phone2}}">{{$site->phone2}}</a>
                            </li>
                            @endif
                            @if ($site->email)
                            <li class="contact__item">
                                <span class="contact__item-label">Email: </span>
                                <a href="mailto:{{$site->email}}">{{$site->email}}</a>
                            </li>
                            @endif


                        </ul>

                        <h5 class="contact__title mt-40">Follow Us</h5>
                        <div class="socials">
                            <a href="#" class="social social-twitter" aria-label="twitter" title="twitter"
                                target="_blank"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-facebook" aria-label="facebook" title="facebook"
                                target="_blank"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube" title="google plus"
                                target="_blank"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram" title="instagram"
                                target="_blank"><i class="ui-instagram"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <h2 class="section-title">Get a Free Quote</h2>
                    <p class="mb-40">If you have any question about project cost, get in touch.</p>
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form material" method="post" action="#">

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Name -->
                                <div class="material__form-group form-group">
                                    <input type="text" name="name" id="name" class="form-input material__input"
                                        required="">
                                    <label for="name" class="material__label">Name
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    <span class="material__underline"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Email -->
                                <div class="material__form-group form-group">
                                    <input type="email" name="email" id="email" class="form-input material__input"
                                        required="">
                                    <label for="email" class="material__label">Email
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    <span class="material__underline"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="material__form-group form-group">
                            <input type="text" name="subject" id="subject" class="form-input material__input">
                            <label for="subject" class="material__label">Subject
                            </label>
                            <span class="material__underline"></span>
                        </div>

                        <div class="material__form-group form-group">
                            <textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
                            <label for="message" class="material__label">Message
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            <span class="material__underline"></span>
                        </div>

                        <input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message"
                            id="submit-message">
                        <div id="msg" class="message"></div>
                    </form>
                </div>
            </div>
        </div>
    </section> <!-- end contact -->


    <!-- Google Map -->
    <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>
@endsection
