@extends('layouts.shop_layout.master')
@section('content')
    <div class="container">
        <div class="section-header-two text-center">

            <h2 class="section-title">{{ $category->name }}</h2>
        </div>
        <div class="row">

            @forelse ($products as $row)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="#"><img class="product-thumbnal"
                                    src="{{ asset('images/product_images/small/' . $row->main_image) }}" alt="product"
                                    height="100" width="200" /></a>
                        </div>

                        <div class="product-info text-center">
                            {{-- <input type="hidden" name="quantity" value="1" id="product_quantity" /> --}}
                            <input type="hidden" class="quantity-input" value="1" min="1">
                            <h3 class="product-name">
                                <a class="product-link" href="{{ route('shop.product.details', ['product_name' => $row->product_name]) }}">{{ $row->product_name }}</a>
                            </h3>
                            <ul class="product-review">
                                <li class="review-item {{ $row->rating >= 1 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                <li class="review-item {{ $row->rating >= 2 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                <li class="review-item {{ $row->rating >= 3 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                <li class="review-item {{ $row->rating >= 4 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                <li class="review-item {{ $row->rating >= 5 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="price">&#8358; {{ number_format($row->price) }}</span>
                            </div>
                            <button class="add-cart addCart" data-product-id="{{ $row->id }}"
                                data-price="{{ $row->price }}">Add to cart <i
                                    class="icon fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="container">
                    <div class="empty-box-wrap text-center">
                        <img class="empty-box-img"
                            src="https://zairito.zainikthemes.com/frontend/assets/images/empty-box.png" alt="empty-box" />
                        <h2 class="empty-box-title">Your no product listed yet</h2>
                        {{-- <p class="empty-box-content">
                            Cart is empty. Please go to your home page for listing it. </p> --}}
                    </div>
                </div>
            @endforelse

        </div>
    </div>
    </div>

    <div class="hero-section-v2">
        <div class="hero-section-wrap">
            <div class="hero-banner-image text-center">
                <a href="#">
                    <img class="hero-image" width="100%" src="{{ asset('shop_assets/images/farmers_bg.jpg') }}"
                        alt="wa" />
                </a>
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
                        @foreach ($categories as $category)
                            <li class="sigle-catagory">
                                <a class="catatory-link" href="{{ route('shop.category', ['name' => $category->name]) }}"
                                    style="font-size: 100%">
                                    {{ $category->name }}
                                    <i class="icon flaticon-arrow-point-to-right"></i>
                                </a>
                            </li>
                        @endforeach
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

                @foreach ($featuredProducts as $row)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="#"><img class="product-thumbnal"
                                        src="{{ asset('images/product_images/small/' . $row->main_image) }}" alt="product"
                                        height="100" width="200" /></a>
                            </div>

                            <div class="product-info text-center">
                                {{-- <input type="hidden" name="quantity" value="1" id="product_quantity" /> --}}
                                <input type="hidden" class="quantity-input" value="1" min="1">
                                <h3 class="product-name">
                                    <a class="product-link" href="{{ route('shop.product.details', ['product_name' => $row->product_name]) }}">{{ $row->product_name }}</a>
                                </h3>
                                <ul class="product-review">
                                    <li class="review-item {{ $row->rating >= 1 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 2 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 3 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 4 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 5 ? 'active' : '' }}"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="price">&#8358; {{ number_format($row->price) }}</span>
                                </div>
                                <button class="add-cart addCart" data-product-id="{{ $row->id }}"
                                    data-price="{{ $row->price }}">Add to cart <i
                                        class="icon fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
