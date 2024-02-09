@extends('layouts.shop_layout.master')
@section('content')
    <div class="product-single-area-v2 section-top">
        <div class="container">
            <div class="product-single-details">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-single-left">
                            <div class="product-slier-big-image">
                                <div class="product-priview-slide-v2">
                                    <div class="single-slide">
                                        <img class="slide-image"
                                            src="{{ asset('images/product_images/small/' . $product->main_image) }}"
                                            alt="product" />
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="product-thumbnail-image">
                                <ul class="product-thumb-silide-v2">
                                    <li class="single-item">
                                        <img class="single-item-image"
                                            src="{{ asset('images/product_images/small/' . $product->main_image) }}"
                                            alt="product" />
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-single-right">
                            <div class="product-info">
                                <div class="product-info-top">
                                    <ul class="product-review">
                                        <ul class="product-review">
                                            <li class="review-item {{ $product->rating >= 1 ? 'active' : '' }}"><i
                                                    class="flaticon-star"></i></li>
                                            <li class="review-item {{ $product->rating >= 2 ? 'active' : '' }}"><i
                                                    class="flaticon-star"></i></li>
                                            <li class="review-item {{ $product->rating >= 3 ? 'active' : '' }}"><i
                                                    class="flaticon-star"></i></li>
                                            <li class="review-item {{ $product->rating >= 4 ? 'active' : '' }}"><i
                                                    class="flaticon-star"></i></li>
                                            <li class="review-item {{ $product->rating >= 5 ? 'active' : '' }}"><i
                                                    class="flaticon-star"></i></li>
                                        </ul>
                                    </ul>
                                </div>
                                <h3 class="product-name">
                                    {{ $product->product_name }}</h3>
                                </h3>

                                <div class="product-price">
                                    <span class="price">₦ {{ number_format($product->price) }}</span>
                                </div>

                                <div class="prdouct-btn-wrapper d-flex align-items-center">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton btn">-</div>
                                        <input class="cart-plus-minus-box quantity-input" type="text" name="quantity"
                                            id="product_quantity" value="1" readonly />
                                        <div class="inc qtybutton btn">+</div>
                                    </div>
                                    <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                        data-product-id="{{ $product->id }}" data-price="{{ $product->price }}">Add To Cart
                                        <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                                <div class="product-bottom-button d-flex">
                                    {{-- <a href="javascript:void(0)" class="primary-btn buyNow" data-id="12">Buy Now</a> --}}
                                    <div class="product-description">
                                        <p>Description: {{ $product->description }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="product-right-bottom">
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn likeItem" data-product-id="{{ $product->id }}"
                                            title="Like Product"><i class="icon flaticon-like"
                                                style="font-size: 50px; "></i> <span
                                                style="font-size: 30px">{{ $likes }} <small style="font-size: 50%">


                                                    @if (auth()->check())
                                                        @if ($like_user)
                                                            (Liked)
                                                        @else
                                                        @endif
                                                    @endif

                                                </small> </span> </a>
                                    </li>
                                </ul>

                                <ul class="features">

                                    <li class="single-feature">
                                        <img class="icon"
                                            src="https://zairito.zainikthemes.com/frontend/assets/images/delivery-van-icon.svg"
                                            alt="icon" /><strong class="feature-title">Estimated
                                            Delivery:</strong><span class="feature-text">7 days</span>
                                    </li>
                                    <li class="single-feature">
                                        <img class="icon"
                                            src="https://zairito.zainikthemes.com/frontend/assets/images/shipping-return.svg"
                                            alt="icon" /><strong class="feature-title">Shipping Charge:</strong><span
                                            class="feature-text">On all orders over
                                            ₦ 2,000</span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-bottom-info mt-50">
                <div class="nav-tabs-menu">
                    <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                data-bs-target="#Description" type="button" role="tab" aria-controls="Description"
                                aria-selected="true">
                                Description</button>
                        </li> --}}
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews"
                                type="button" role="tab" aria-controls="Reviews" aria-selected="false">
                                Reviews</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="ProductTabContent">
                    {{-- <div class="tab-pane fade show active" id="Description" role="tabpanel"
                        aria-labelledby="Description-tab">
                        <div class="product-description">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div> --}}
                    <div class="tab-pane fade show active" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                        <div class="product-reviews">
                            <div class="review-top">
                                <div class="review-top-left">
                                    <h3 class="review-title">Customer Reviews </h3>
                                    <div class="review-start-point">
                                        <ul class="review-list">

                                            <ul class="product-review">
                                                <li class="review-item {{ $product->rating >= 1 ? 'active' : '' }}"><i
                                                        class="flaticon-star"></i></li>
                                                <li class="review-item {{ $product->rating >= 2 ? 'active' : '' }}"><i
                                                        class="flaticon-star"></i></li>
                                                <li class="review-item {{ $product->rating >= 3 ? 'active' : '' }}"><i
                                                        class="flaticon-star"></i></li>
                                                <li class="review-item {{ $product->rating >= 4 ? 'active' : '' }}"><i
                                                        class="flaticon-star"></i></li>
                                                <li class="review-item {{ $product->rating >= 5 ? 'active' : '' }}"><i
                                                        class="flaticon-star"></i></li>
                                            </ul>
                                        </ul>
                                        <span class="review-count">{{ $reviewCount }}
                                            Reviews</span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-list">
                                <h3 class="review-title">Customer Reviews </h3>
                                @forelse ($review as $row)
                                    <div class="single-review">
                                        <div class="reviewer">
                                            <div class="reviewer-wrap">
                                                <img class="reviewer-image"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkC
                                                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
                                                u0jK4foopCRYxfZSV0XJR659lBklKWLMosSdlBs2Huvi6LU8+v/vlsm+
                                                r/vvstRxUPmGr+LPUWtEK2qIHMXuYuEUTtXJkWQuYstYGGSNWhJag5ZqCO
                                                xZN53Uj0k7sILwFvmowPNmyBxN6EhcebbizUhSJT5FGa+hYiiKUG4qCmQVgTgomlBSEgRSavGJ/E/as52t7yTJCQAAAAASUVORK5CYII="
                                                    alt="reviewer-image" />
                                                <div class="reviewer-info">
                                                    <h4 class="reviewer-name">{{ $row->user->firstname ?? 'User' }}</h4>
                                                    <h4 class="review-meta"><span
                                                            class="time">{{ $row->created_at->format('M Y ') }}
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="review-list">

                                                <ul class="product-review">
                                                    <li class="review-item {{ $row->rating >= 1 ? 'active' : '' }}"><i
                                                            class="flaticon-star"></i></li>
                                                    <li class="review-item {{ $row->rating >= 2 ? 'active' : '' }}"><i
                                                            class="flaticon-star"></i></li>
                                                    <li class="review-item {{ $row->rating >= 3 ? 'active' : '' }}"><i
                                                            class="flaticon-star"></i></li>
                                                    <li class="review-item {{ $row->rating >= 4 ? 'active' : '' }}"><i
                                                            class="flaticon-star"></i></li>
                                                    <li class="review-item {{ $row->rating >= 5 ? 'active' : '' }}"><i
                                                            class="flaticon-star"></i></li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <p class="review-text">{{ $row->comment }}</p>
                                    </div>
                                @empty
                                    <h3>No Review yet</h3>
                                @endforelse


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="featured-products-area-v2 section-top pb-100">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">Related Products</h2>
            </div>
            <div class="row">
                @foreach ($relatedProducts as $row)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="#"><img class="product-thumbnal"
                                        src="{{ asset('images/product_images/small/' . $row->main_image) }}"
                                        alt="product" height="100" width="200" /></a>
                            </div>

                            <div class="product-info text-center">
                                {{-- <input type="hidden" name="quantity" value="1" id="product_quantity" /> --}}
                                <input type="hidden" class="quantity-input" value="1" min="1">
                                <h3 class="product-name">
                                    <a class="product-link"
                                        href="{{ route('shop.product.details', ['product_name' => $row->product_name]) }}">{{ $row->product_name }}</a>
                                </h3>
                                <ul class="product-review">
                                    <li class="review-item {{ $row->rating >= 1 ? 'active' : '' }}"><i
                                            class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 2 ? 'active' : '' }}"><i
                                            class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 3 ? 'active' : '' }}"><i
                                            class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 4 ? 'active' : '' }}"><i
                                            class="flaticon-star"></i></li>
                                    <li class="review-item {{ $row->rating >= 5 ? 'active' : '' }}"><i
                                            class="flaticon-star"></i></li>
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
