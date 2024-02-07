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
                                <img src="{{ asset('user/img/logo-alt.png') }}" alt="" width="50"
                                    class="">
                                Farmers
                                Marketplace
                            </a>
                            <p class="address-text">
                                . <br />
                                . <br />
                            </p>
                            <div class="block-content mb-30">
                                <p class="contact">Call us: +234 802 454 3272</p>
                                <p class="contact">Email: marketplacefarmers@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
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
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            {{-- <h3 class="widget-title mobile-dropdown-title">&nbsp;</h3> --}}
                            <ul class="widget-menu">
                                {{-- <li class="meni-item">
                                    <a class="menu-link" href="#">Circle</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="#">CodeLab</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="#">HEXLAB</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">
                                Customer Service
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
                                    <a class="social-media-link" href="www.skype.html"><i class="fab fa-skype"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a class="social-media-link" href="www.twitter.html"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a class="social-media-link" href="www.linkedin.html"><i
                                            class="fab fa-linkedin-in"></i></a>
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
    </footer>
    </div>
