    <footer class="footer-area-v2">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget about-widget" style="">
                            {{-- <a href="index.html" class="footer-brand-logo mb-25">
                                <img src="uploaded_files/logo/footer-logo.png" alt="." />
                            </a> --}}
                            <a class="brand-logo" href="{{ route('home') }}" style="color: white">
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
                                <p class="contact">Email: hello@marketplacefarmers.ng</p>
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
                                    <a class="menu-link" href="{{ route('faq') }}">Help &amp; FAQ</a>
                                </li>
                                {{-- <li class="meni-item">
                                    <a class="menu-link" href="{{ route('privacy_policy') }}">Privacy Policy</a>
                                </li> --}}
                                <li class="meni-item">
                                    <a class="menu-link" href="{{ route('return_policy') }}">Return Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget social-media-widget">
                            <h3 class="widget-title">Get in Touch</h3>
                            <ul class="social-media">
                                <li class="social-media-item">
                                    <a class="social-media-link" href="www.facebook.com/farmersmarketplaceng"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>

                                <li class="social-media-item">
                                    <a class="social-media-link" href="www.instagram.com/farmersmarketplace.ng"><i
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
                                Our mission is to empower farmers to share their organic bounty while offering
                                health-conscious consumers easy access to fresh, ethically sourced foods.
                            </p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <p style="color: white; font-weight:600"> <a style="color: white; font-weight:600"
                                    href="{{ route('terms_condition') }}">Terms & Conditions</a>
                                <a style="color: white; font-weight:600" href="{{ route('privacy_policy') }}">Privacy
                                    Policy</a> <small> © 2024, Farmers Marketplace</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
