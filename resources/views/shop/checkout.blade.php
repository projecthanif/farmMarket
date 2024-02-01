@extends('layouts.shop_layout.master')
@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Checkout</h2>
            </div>
        </div>
    </div>


    <section class="page-content section">
        <div class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout-form">

                            {{-- <form id="paymentForm">
                                <input type="email" id="email-address"
                                    value="{{ auth()->user()->email ?? 'mnanjwan@gmail.com' }}" hidden />
                                <input type="text" id="amount" value="{{ $totalCartPrice }}" readonly hidden />

                                    <input type="text" id="first-name" {{ auth()->user()->firstname ?? 'guest' }} hidden />

                                <div class="form-submit">
                                    <button type="submit" onclick="payWithPaystack()"> Pay </button>
                                </div>
                            </form> --}}


                            <form method="post" action="{{ route('checkout.order') }}" id="paymentForm">
                                @csrf
                                <input type="email" id="email-address"
                                    value="{{ auth()->user()->email ?? 'mnanjwan@gmail.com' }}" hidden />
                                <input type="text" id="amount" value="{{ $finalPrice }}" readonly hidden />
                                <input type="text" id="first-name" {{ auth()->user()->firstname ?? 'guest' }} hidden />

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div
                                            class="checkout-page-login-box d-flex justify-content-between align-items-center mb-30">

                                            @if (auth()->user())
                                                <h2 class="mb-0 text-capitalize fw-bold">Hello,
                                                    {{ auth()->user()->firstname }}
                                                </h2>
                                            @else
                                                <h2 class="mb-0 text-capitalize fw-bold">Returning buyer? Please login:
                                                </h2>
                                                <button type="button" class="primary-btn" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal">Login</button>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h2 class="checkout-title">Shipping Address</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                placeholder="You Name Here"
                                                value="{{ auth()->user()->addresses->fullname ?? '' }}" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder=" Address"
                                                value="{{ auth()->user()->addresses->address ?? '' }}" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="form-select" id="locationSelect" name="state">
                                                <option>{{ __('State') }}</option>
                                                @foreach ($shipping_price as $shipping_price)
                                                    @if (auth()->user())
                                                        <option value="{{ $shipping_price->state }}"
                                                            {{ $shipping_price->state == (auth()->user()->addresses->state ?? ' ') ? 'selected' : '' }}>
                                                            {{ $shipping_price->state }}</option>
                                                    @else
                                                        <option value="{{ $shipping_price->state }}">
                                                            {{ $shipping_price->state }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="City" value="{{ auth()->user()->addresses->city ?? '' }}"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number"
                                                value="{{ auth()->user()->addresses->phone ?? '' }}" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="additionalPhone"
                                                name="additionalPhone" placeholder="Additional Phone Number"
                                                value="{{ auth()->user()->addresses->additionalPhone ?? '' }}" />
                                        </div>
                                    </div>

                                </div>
                                <div class="payment-method">
                                    <div class="row">
                                        {{-- <div class="col-lg-12">
                                            <h2 class="checkout-title">Payment Method</h2>
                                        </div> --}}
                                        <div class="col-lg-12">


                                            <div class="form-group form-check terms-agree">
                                                <input type="checkbox" class="form-check-input" id="agree" required />
                                                <label class="form-check-label" for="agree">By clicking the
                                                    button you agree to our
                                                    <a href="#">Terms
                                                        &amp; Conditions</a></label>
                                            </div>
                                            @if (!auth()->user())
                                                <button type="button" class="checkout-btn" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal">Place Order</button>
                                            @else
                                                <button type="submit" class="checkout-btn">Place Order</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade common-modal" id="show-razor-thanks" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    Razorpay Confirmation</h5>
                                            </div>
                                            <div class="modal-body">
                                                Your payment is authorized. For capturing your order click
                                                <b>Place Order</b>
                                                <div class="modal-btn-wrap text-end">
                                                    <button type="submit" onclick="payWithPaystack()"
                                                        class="primary-btn">Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cart-summary">
                            <div class="summary-top d-flex">
                                <h2>Cart Summary</h2>
                                <a class="edite-btn" href="{{ route('shop.cart') }}">Edit</a>
                            </div>
                            <ul class="cart-product-list">
                                @php
                                    $cart = session('cart');
                                @endphp
                                @php
                                    $total = 0;
                                @endphp

                                @if (is_array($cart) || is_object($cart))
                                    @foreach ($cart as $item)
                                        <li class="single-cart-product d-flex justify-content-between">
                                            <div class="product-info">
                                                <h3>{{ $item['name'] }}</h3>
                                                <p>Quantity:
                                                    {{ $item['quantity'] }}
                                                </p>
                                                </p>
                                            </div>
                                            <div class="price-area">
                                                <h3 class="price">
                                                    &#8358; {{ number_format($item['itemTotalPrice']) }}
                                                </h3>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                            <ul class="summary-list">
                                <li>Sub Total <span id="delivery-charge">
                                        <h3>

                                            <span class="float-right" id="">
                                                NGN {{ number_format($totalCartPrice, 2) }}
                                            </span>
                                        </h3>
                                    </span>
                                </li>

                                <li>
                                    @if (auth()->user())
                                        <span id="shippingPrice">&#8358;{{ number_format($shippingPrice, 2) }}</span>
                                        <div id="shippingPrice">Shipping Price: </div>
                                    @endif
                                </li>
                            </ul>
                            <div class="total-amount">
                                {{-- @php
                                    $grandTotal = $totalCartPrice + $shipping_fee;
                                @endphp --}}

                                <h3>
                                    Total Cost

                                    @if (!auth()->user())
                                        <span class="float-right" id="total-cart-price">
                                            NGN {{ number_format($totalCartPrice, 2) }}
                                        </span>
                                    @elseif(auth()->user() && empty(!auth()->user()->addresses->state))
                                        <span class="float-right" id="total-cart-price">
                                            NGN {{ number_format($finalPrice, 2) }}
                                        </span>

                                        {{-- <span class="float-right" id="total-cart-price">
                                            NGN {{ number_format($totalCartPrice, 2) }}
                                        </span> --}}
                                    @endif

                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Paystack --}}

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id>Login</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>
    @endpush --}}
@endsection
