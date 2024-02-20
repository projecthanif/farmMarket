@extends('layouts.shop_layout.master')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Cart') }}</h2>
                {{-- <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="">{{ __('Home') }}</a>
                    </li>
                    <li class="page-item">{{ __('Shopping Cart') }}</li>
                </ul> --}}
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- wish-list area start here  -->
    <div class="wish-list-area cart-page-area section">
        <div class="container">

            <div class="row">
                <div class="col-12 wish-list-table">

                    <div class="table-responsive">
                        <div id="cardItem">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('Product Name') }}</th>
                                        <th scope="col">{{ __('Price') }}</th>
                                        <th scope="col">{{ __('Quantity') }}</th>
                                        {{-- <th scope="col">{{ __('Total') }}</th> --}}
                                        <th scope="col">{{ __('Remove') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div id="cart_ajax_load">
                                        @php
                                            $cart = session('cart');
                                        @endphp
                                        @php
                                            $total = 0;
                                        @endphp

                                        @if (is_array($cart) || is_object($cart))
                                            @foreach ($cart as $item)
                                                <tr class="cart-page-item" data-price="{{ $item['price'] }}">
                                                    <td>
                                                        <div class="single-grid-product m-0">
                                                            <div class="product-top">
                                                                @if (!empty($item['main_image']))
                                                                    <img src="{{ asset('images/product_images/small/' . $item['main_image']) }}"
                                                                        width="100px" height="100px">
                                                                @else
                                                                    <img src="{{ asset('images/product_images/small/no_image.png') }}"
                                                                        width="100px" height="100px">
                                                                @endif

                                                            </div>
                                                            <div class="product-info text-center">
                                                                <h3 class="product-name">
                                                                    <a class="product-link"
                                                                        href="#">{{ $item['name'] }}</a>
                                                                </h3>

                                                                {{-- @if ($item['price'])
                                                                <ul class="size-switch">
                                                                    <li class="single-size active">
                                                                        {{ $item['price'] }}</li>
                                                                </ul>
                                                            @endif --}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-price text-center">
                                                            {{-- <h4 class="regular-price">
                                                            {{ '#' }}
                                                        </h4> --}}
                                                            <h3 class="price">
                                                                <span class="mainPrice">&#8358;
                                                                    {{ number_format($item['price']) }}</span>
                                                            </h3>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart-quantity input-group">
                                                            <div class="increase-btn dec qtybutton decrease-quantity-btn"
                                                                data-product-id="{{ $item['product_id'] }}">-</div>
                                                            <input class="qty-input cart-plus-minus-box quantity-input"
                                                                type="text" value="{{ $item['quantity'] }}"
                                                                min="1" readonly />
                                                            <div class="increase-btn inc qtybutton increase-quantity-btn"
                                                                data-product-id="{{ $item['product_id'] }}">+</div>
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                        <h1 class="cart-table-item-total item-total-price">
                                                            &#8358;{{ number_format($item[' ']) }}
                                                        </h1>
                                                    </td> --}}
                                                    <td>
                                                        <button class="add-cart deleteItemCart"
                                                            data-product-id="{{ $item['product_id'] }}">Remove <i
                                                                class="icon fas fa-minus-circle"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        @endif

                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Page Bottom box area Start -->
            <div class="row cart-page-bottom-box-wrap">

                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cart-page-bottom-box cart-page-sub-total-box">
                        <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                            <h2 class="bottom-box-title m-0">{{ __('Total') }}</h2>
                            <h2 class="bottom-box-title cart-page-final-total m-0" id="total-cart-price">
                                NGN {{ number_format($totalCartPrice, 2) }}
                            </h2>
                        </div>
                        <div class="form-button text-center">
                            <a href="{{ route('checkout.index') }}"
                                class="form-btn proceed-to-checkout-btn">{{ __('Proceed To Checkout') }}</a>
                        </div>
                    </div>
                </div>
                <!-- Cart page bottom box -->
            </div>
            <!-- Cart Page Bottom box area End -->
        </div>
    </div>

    {{-- @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>
    @endpush --}}
@endsection
