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
                            <form method="post" action="{{ route('checkout.order') }}" id="paymentForm">
                                @csrf
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
                                                placeholder="You Name Here" value required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder=" Address" value required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="state" name="state"
                                                placeholder="State" value required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="City" value required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_state" name="phone"
                                                placeholder="Phone Number" value required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="city" name="additionalPhone"
                                                placeholder="Additional Phone Number" value required />
                                        </div>
                                    </div>

                                </div>
                                <div class="payment-method">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="checkout-title">Payment Method</h2>
                                        </div>
                                        <div class="col-lg-12">


                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="paystack" value="paystack" />
                                                    <label class="form-check-label" for="instamojo">Pay Stack</label>
                                                    <div class="input-icon">
                                                        <img src="" alt="paystack" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="COD" value="COD" />
                                                    <label class="form-check-label" for="COD">Cash On
                                                        Delivey</label>
                                                    <div class="input-icon">
                                                        <img src="#"
                                                            alt="Cash On Delivey" />
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <button type="submit" class="primary-btn">Place Order</button>
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

                                            <span class="float-right" id="total-cart-price">
                                                NGN {{ number_format($totalCartPrice, 2) }}
                                            </span>
                                        </h3>
                                    </span></li>
                                </li>

                                <li>Shipping Cost <span id="delivery-charge">&#8358;
                                        {{ number_format($shipping_fee) }}</span></li>
                                </li>
                            </ul>
                            <div class="total-amount">
                                @php
                                    $grandTotal = $totalCartPrice + $shipping_fee;
                                @endphp

                                <h3>
                                    Total Cost
                                    <span class="float-right" id="total-cart-price">
                                        NGN {{ number_format($grandTotal, 2) }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <div id="stripe-collapse" data-stripe="https://zairito.zainikthemes.com/stripe-collapse"></div>
    <div id="stripe-key"
        data-key="pk_test_51IkVYcHdZxBbG9oi0vltSm75Gd1Sb7MSD0MGGQzz2u2c1Zma6WCxxqi0gTXAM7xgmdZZIVeB1cXkgmYAmRpusWPg003YEtwhB3">
    </div>
    <div id="user-name" data-key="Guest User"></div>
    <div id="user-email" data-key="guest@gmail.com"></div>
    <div id="get-tax-amount" data-url="https://zairito.zainikthemes.com/checkout/get-tax-amount"></div>

    <div id="AddToCompareItemUrl" data-url="https://zairito.zainikthemes.com/user/compare/add"></div>
    <div id="AddToCartIntoSession" data-url="https://zairito.zainikthemes.com/cart/add"></div>
    <div id="productWishlistUrl" data-url="https://zairito.zainikthemes.com/user/wishlist/add"></div>
    <div id="currency-price-url" data-url="https://zairito.zainikthemes.com/currency-price"></div>
    <div id="currency-symbol-url" data-url="https://zairito.zainikthemes.com/currency-symbol"></div>
    <div id="productImgAsset" data-url="https://zairito.zainikthemes.com/uploaded_files/product_image"></div> --}}



    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="https://zairito.zainikthemes.com/order-track" method="POST">
                        <input type="hidden" name="_token" value="9zbFJ4s2udaCPrmwCURH55WsID6QYDpMBpKxKMUM">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="https://zairito.zainikthemes.com/order-track" method="POST">
                        <input type="hidden" name="_token" value="9zbFJ4s2udaCPrmwCURH55WsID6QYDpMBpKxKMUM">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <div id="DoNotSubscribe" data-url="https://zairito.zainikthemes.com/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="https://zairito.zainikthemes.com/subscribe/store"></div>

    <script src="https://zairito.zainikthemes.com/frontend/assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/bootstrap.min.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/plugins.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/main.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/front/custom.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/front/extra.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/front/sweat_aleart.js"></script>
    <script src="https://zairito.zainikthemes.com/frontend/assets/js/common.js"></script>
    <script src="https://zairito.zainikthemes.com/admin/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>
    @endpush
@endsection
<script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://zairito.zainikthemes.com/frontend/assets/js/pages/checkout.js"></script>
<script src="https://zairito.zainikthemes.com/frontend/assets/js/pages/cart.js"></script>


</body>

</html>
