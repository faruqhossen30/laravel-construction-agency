<footer class="footer bg-dark-overlay" style="background-image: url(img/footer/1.jpg);">
    <div class="container-fluid">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-3 col-md-2">
                    <div class="widget widget-about-us">
                        <!-- Logo -->
                        <a href="{{asset('frontend')}}/index.html" class="logo-container flex-child">
                            <img class="logo" src="{{asset('/')}}/logo.png"
                                srcse{{asset('frontend')}}/t="img/logo_white.png 1x, img/logo_white@2x.png 2x"
                                alt="logo">
                        </a>
                    </div>
                </div> <!-- end logo -->

                <div class="col-lg-2 col-md-2">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <h3 style="color: rgb(157, 154, 154)">Business Hours</h3>
                        <div>
                            <table itemprop="openingHours">
                                <tbody>
                                    <tr>
                                        <th class="text-dark">Mon:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Tue:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Wed:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr class="text-dark">
                                        <th>Thu:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Fri:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Sat:</th>
                                        <td class="text-dark"><span class="text-dark">9:00 AM – 5:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Sun:</th>
                                        <td class="text-dark"><span class="text-dark">Closed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
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
                </div>
                {{-- <div class="col-lg-2 col-md-2">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-2">
                    <div class="widget widget_nav_menu">
                        <h3 class="text-muted">Business Hours</h3>
                        <div>
                            <table itemprop="openingHours">
                                <tbody>
                                    <tr>
                                        <th class="text-dark">Mon:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Tue:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Wed:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr class="text-dark">
                                        <th>Thu:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Fri:</th>
                                        <td class="text-dark"><span class="text-dark">7:00 AM – 6:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Sat:</th>
                                        <td class="text-dark"><span class="text-dark">9:00 AM – 5:00 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark">Sun:</th>
                                        <td class="text-dark"><span class="text-dark">Closed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
                <div>

                </div>

                <div class="col-lg-2 offset-lg-2 col-md-2">
                    <div class="widget">
                        <div class="socials">

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
