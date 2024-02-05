    <footer class="footer-area-v2">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget about-widget">
                            {{-- <a href="index.html" class="footer-brand-logo mb-25">
                                <img src="uploaded_files/logo/footer-logo.png" alt="." />
                            </a> --}}
                            <h3 class="widget-title mobile-dropdown-title">Logo</h3>

                            <p class="address-text">
                                . <br />
                                . <br />
                                .
                            </p>
                            <div class="block-content mb-30">
                                <p class="contact">Call us: .</p>
                                <p class="contact">Email: .</p>
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
                                    <a class="menu-link" href="">Help &amp; FAQ</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="">Terms of Conditions</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="">Privacy Policy</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="">Online Returns Policy</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="">Shipping &amp; Return</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget social-media-widget">
                            <h3 class="widget-title">Social Links</h3>
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
