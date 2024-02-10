    <footer class="footer-area-v2">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget about-widget" style="">
                            {{-- <a href="index.html" class="footer-brand-logo mb-25">
                                <img src="uploaded_files/logo/footer-logo.png" alt="." />
                            </a> --}}
                            <a class="brand-logo" href="{{ route('home') }}">
                                <img src="{{ asset('homePage_assets/img/logo-alt.png') }}" alt="" width="50"
                                    class="">
                                Farmers
                                Marketplace
                            </a>
                            <p class="address-text">
                                . <br />
                                . <br />
                            </p>
                            <div class="block-content mb-30">
                                <p class="contact">Call us: +234 902 813 5986</p>
                                <p class="contact">Email: hello@marketplacefarmers.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">Categories</h3>
                            <ul class="widget-menu show">
                                @forelse ($categories as $category)
                                    <li class="meni-item">
                                        <a class="menu-link"
                                            href="{{ route('shop.category', ['name' => $category->name]) }}">{{ $category->name }}</a>
                                    </li>
                                @empty
                                    <p>No category yet</p>
                                @endforelse

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">
                                Support
                            </h3>
                            <ul class="widget-menu">
                                <li class="meni-item">
                                    <a class="menu-link" href="{{ route('home') }}">Help &amp; FAQ</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="{{ route('home') }}">Terms of Conditions</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="{{ route('home') }}">Privacy Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget social-media-widget">
                            <h3 class="widget-title">Get in Touch</h3>
                            <ul class="social-media">
                                <li class="social-media-item">
                                    <a class="social-media-link" href="www.facebook.html"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>

                                <li class="social-media-item">
                                    <a class="social-media-link" href="www.instagram.html"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright-text">
                                Our mission is to empower farmers to share their organic bounty while offering health-conscious consumers easy access to fresh, ethically sourced foods.
                            </p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <a href="#"><p style="color: white; font-weight:600">Terms & Conditions
                                Privacy Policy <small> © 2024, Farmer’s Market Place</small>
                               </p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

