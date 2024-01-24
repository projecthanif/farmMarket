@extends('layouts.shop_layout.master')
@section('content')
    <div class="container">
        <div class="section-header-two text-center">
            <h2 class="section-title">Products</h2>
        </div>
        <div class="row">

            @foreach ($products as $row)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="#"><img class="product-thumbnal"
                                    src="{{ asset('images/product_images/small/' . $row->main_image) }}"
                                    alt="product" /></a>
                        </div>
                        <div class="product-info text-center">
                            {{-- <input type="hidden" name="quantity" value="1" id="product_quantity" /> --}}
                            <input type="hidden" class="quantity-input" value="1" min="1">
                            <h3 class="product-name">
                                <a class="product-link" href="#">{{ $row->product_name }}</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">&#8358; {{ number_format($row->price) }}</span>
                            </div>
                            <button class="add-cart addCart" data-product-id="{{ $row->id }}"  data-price="{{ $row->price }}">Add to cart <i class="icon fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    </div>

    <div class="hero-section-v2">
        <div class="hero-section-wrap">
            <div class="signle-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-7">
                            <div class="hero-content">
                                <h1 class="hero-title">Best Selling</h1>
                                <p class="hero-text">tyty</p>
                                <div class="hero-btn">
                                    <a href="" class="secondary-btn">fgfg <i
                                            class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-5">
                            <div class="hero-banner-image text-center">
                                <img class="hero-image" src="uploaded_files/banner/653197ee356291697748974.jpg"
                                    alt="wa" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brads-area-v2 section-top">
        <div class="container">
            <div class="brads-wrap">
                <div class="brads-slide">
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/circle.png" alt="Circle" />
                    </div>
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/code-lab.png" alt="CodeLab" />
                    </div>
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/hex-lab.png" alt="HEXLAB" />
                    </div>
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/kanba.png" alt="Kanba" />
                    </div>
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/treva.png" alt="treva" />
                    </div>
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/zoo-tv.png" alt="Zootv" />
                    </div>
                    <div class="sigle-brad">
                        <img src="uploaded_files/brand/circle.png" alt="BanCi" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popular-categories-area-v2 section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="catagory-left">
                        <h2 class="catagory-title">Popular Categories</h2>
                        <a href="#" class="primary-btn-v2">View All Products
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="catagory-list">
                        <li class="sigle-catagory">
                            <a class="catatory-link" href="product/category/5.html">
                                Fresh Fruits
                                <i class="icon flaticon-arrow-point-to-right"></i>
                            </a>
                        </li>
                        <li class="sigle-catagory">
                            <a class="catatory-link" href="product/category/7.html">
                                Crisp Vegetables
                                <i class="icon flaticon-arrow-point-to-right"></i>
                            </a>
                        </li>
                        <li class="sigle-catagory">
                            <a class="catatory-link" href="product/category/8.html">
                                Farm-Raised Meats
                                <i class="icon flaticon-arrow-point-to-right"></i>
                            </a>
                        </li>
                        <li class="sigle-catagory">
                            <a class="catatory-link" href="product/category/9.html">
                                Dairy Delights
                                <i class="icon flaticon-arrow-point-to-right"></i>
                            </a>
                        </li>
                        <li class="sigle-catagory">
                            <a class="catatory-link" href="product/category/10.html">
                                Organic Options
                                <i class="icon flaticon-arrow-point-to-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="featured-products-area-v2 section-bg-two section-top pb-100">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">Featured Products</h2>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="#"><img class="product-thumbnal"
                                    src="{{ asset('images/product_images/large/18141067_SL-031121-41400-08.jpg-229.jpg') }}"
                                    alt="product" /></a>
                        </div>
                        <div class="product-info text-center">
                            <input type="hidden" name="quantity" value="1" id="product_quantity" />
                            <h3 class="product-name">
                                <a class="product-link" href="#">Digital Ebook</a>
                            </h3>

                            <div class="product-price">
                                <span class="price">$ 100</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="13">Add
                                To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="#"><img class="product-thumbnal"
                                    src="{{ asset('images/product_images/large/18141067_SL-031121-41400-08.jpg-229.jpg') }}"
                                    alt="product" /></a>
                        </div>
                        <div class="product-info text-center">
                            <input type="hidden" name="quantity" value="1" id="product_quantity" />
                            <h3 class="product-name">
                                <a class="product-link" href="#">Digital Ebook</a>
                            </h3>

                            <div class="product-price">
                                <span class="price">$ 100</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="13">Add
                                To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="#"><img class="product-thumbnal"
                                    src="{{ asset('images/product_images/large/18141067_SL-031121-41400-08.jpg-229.jpg') }}"
                                    alt="product" /></a>
                        </div>
                        <div class="product-info text-center">
                            <input type="hidden" name="quantity" value="1" id="product_quantity" />
                            <h3 class="product-name">
                                <a class="product-link" href="#">Digital Ebook</a>
                            </h3>

                            <div class="product-price">
                                <span class="price">$ 100</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="13">Add
                                To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="#"><img class="product-thumbnal"
                                    src="{{ asset('images/product_images/large/18141067_SL-031121-41400-08.jpg-229.jpg') }}"
                                    alt="product" /></a>
                        </div>
                        <div class="product-info text-center">
                            <input type="hidden" name="quantity" value="1" id="product_quantity" />
                            <h3 class="product-name">
                                <a class="product-link" href="#">Digital Ebook</a>
                            </h3>

                            <div class="product-price">
                                <span class="price">$ 100</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="13">Add
                                To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
