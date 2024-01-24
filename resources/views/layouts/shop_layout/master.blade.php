<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shop | Product </title>
    <meta name="description" content="Zairito - Laravel Ecommerce Application" />
    <meta name="keywords"
        content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
    <meta name="author" content="zainiktheme" />
    {{-- <meta name="csrf-token" content="gNHvlijeCOFPxEm0NsNGHf12QjH54Cy79BYEIVQH" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Allison&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('shop_assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/extra.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop_assets/css/cookie-consent.css') }}" />

    {{-- <link rel="shortcut icon" href="{{ asset('f') }}uploaded_files/favicon/favicon.png" type="image/x-icon" /> --}}
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}" />
</head>

<body class="direction-ltr">
    {{-- <div id="preloader">
        <div id="status">
            <img src="uploaded_files/preloader/preloader.svg" alt="img" />
        </div>
    </div> --}}

    @include('layouts.shop_layout.mainheader')

    @yield('content')

    {{-- <div id="AddToCompareItemUrl" data-url="user/compare/add.json"></div> --}}
    {{-- <div id="AddToCartIntoSession" data-url="{{ route('cart.add') }}"></div> --}}
    {{-- <div id="productWishlistUrl" data-url="user/wishlist/add.json"></div>
    <div id="currency-price-url" data-url="currency-price.html"></div>
    <div id="currency-symbol-url" data-url="currency-symbol.html"></div>
    <div id="productImgAsset" data-url="uploaded_files/product_image/index.html"></div> --}}

    @include('layouts.shop_layout.mainfooter')

    {{-- <div class="modal fade bd-example-modal-lg theme-modal" id="popUpModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1 modal-bg">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="offer_modal_left">
                                    <img src="uploaded_files/logo/656f2f7abc3861701785466.png" alt="logo" />
                                    <h3>SUBSCRIBE TO NEWSLETTER</h3>
                                    <p class="m-0">Subscribe For The Latest News.</p>
                                    <form id="subscribe_form" name="subscribe_form">
                                        <input type="hidden" name="_token"
                                            value="gNHvlijeCOFPxEm0NsNGHf12QjH54Cy79BYEIVQH" />
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control subscribeModal"
                                                name="subscribeval" id="subscribeval" placeholder="Your email" />
                                            <div class="input-group-append">
                                                <button
                                                    class="theme-btn-one btn-black-overlay btn_sm border-0 subscribeModal"
                                                    id="subscribeModal">
                                                    Subscribe
                                                </button>
                                            </div>
                                        </div>
                                        <div class="check_boxed_modal">
                                            <input type="checkbox" id="doNotShowModel" name="dontshowmodal"
                                                value="dont_show" />
                                            <label for="vehicle1">Don&#039;t show this popup again</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="offer_modal_img d-none d-lg-flex">
                                    <img src="uploaded_files/advertise/popup-image.png" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div id="DoNotSubscribe" data-url="do_not_subscribe.html"></div>
    <div id="SubscribeStore" data-url="subscribe/store.html"></div>
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
                        <input type="hidden" name="_token" value="gNHvlijeCOFPxEm0NsNGHf12QjH54Cy79BYEIVQH" />
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="order_number"
                                placeholder="Enter order number" />
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
                        <input type="hidden" name="_token" value="gNHvlijeCOFPxEm0NsNGHf12QjH54Cy79BYEIVQH" />
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                name="order_number" placeholder="Enter order number" />
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
                    <form action="https://zairito.zainikthemes.com/user/login-modal" method="POST">
                        <input type="hidden" name="_token" value="gNHvlijeCOFPxEm0NsNGHf12QjH54Cy79BYEIVQH" />
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" />
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="DoNotSubscribe" data-url="do_not_subscribe.html"></div>
    <div id="SubscribeStore" data-url="subscribe/store.html"></div>

    <script src="{{ asset('shop_assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('shop_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('shop_assets/js/plugins.js') }}"></script>
    <script src="{{ asset('shop_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('shop_assets/js/main.js') }}"></script>
    <script src="{{ asset('shop_assets/js/front/custom.js') }}"></script>
    <script src="{{ asset('shop_assets/js/front/extra.js') }}"></script>
    <script src="{{ asset('shop_assets/js/front/sweat_aleart.js') }}"></script>
    <script src="{{ asset('shop_assets/js/common.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script>
        toastr.options = {
            closeButton: false,
            debug: false,
            newestOnTop: false,
            progressBar: false,
            positionClass: "toast-bottom-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        };
        @if (Session::has('success'))
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @if (Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    @if (@$errors->any())
        <script>
            "use strict";
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        </script>
    @endif



    <script src="{{ asset('shop_assets/js/pages/home.js') }}"></script>
    <script src="{{ asset('shop_assets/js/pages/cart.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.addCart').on('click', function() {
                var productId = $(this).data('product-id');
                var quantityInput = $(this).closest('.product').find('.quantity-input');
                var quantity = quantityInput.val() || 1; // Default to 1 if quantity is not provided
                var price = $(this).data('price');

                $.ajax({
                    url: '{{ route('cart.add') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        product_id: productId,
                        quantity: quantity,
                        price: price,
                        _token: '{{ csrf_token() }}'
                    },
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function(response) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Product Added to Cart Successfully'
                        })

                        // Update cart count
                        $('#cart-count').text(response.cartCount);

                        // Update cart items list
                        $('#cart-items').html(response.cartItems);

                        $('#total-cart-price').text(response.totalCartPrice);
                        console.log( response.totalCartPrice);
                    },
                    error: function(error) {
                        console.log('caught it!', error);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $('.deleteItemCart').on('click', function() {
                var productId = $(this).data('product-id');
                var productElement = $(this).closest('.cart-page-item');

                $.ajax({
                    url: '{{ route('cart.remove') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        product_id: productId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // alert(response.message);

                        let Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Cart Product Removed'
                        })

                        // Update cart count
                        $('#cart-count').text(response.cartCount);

                        // Remove the product element from the page
                        productElement.remove();

                        // Update cart items list
                        $('#cart-items').html(response.cartItems);

                        // Show/hide the cart section based on the cart count
                        if (response.cartCount > 0) {
                            $('#cart-section').show();
                        } else {
                            $('#cart-section').hide();
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });

        $(document).ready(function() {
            $('.increase-quantity-btn, .decrease-quantity-btn').on('click', function() {
                event.preventDefault(); // Prevent the default behavior of the button

                var productId = $(this).data('product-id');
                var quantityInput = $(this).siblings('.quantity-input');
                var currentQuantity = parseInt(quantityInput.val());

                // console.log(newQuantity);
                // Update the quantity based on the button clicked
                if ($(this).hasClass('increase-quantity-btn')) {
                    currentQuantity + 1;
                } else if ($(this).hasClass('decrease-quantity-btn')) {
                    Math.max(1, currentQuantity -
                        1); // Ensure the quantity does not go below 1
                }

                console.log(currentQuantity);
                // Update the quantity input
                quantityInput.val(currentQuantity);

                // Retrieve the original item price from the data attribute
                var itemPrice = $(this).closest('tr').data('price');

                // Calculate the updated total price for the current item
                var itemTotalPrice = itemPrice * currentQuantity;

                // Ensure itemTotalPrice is a number before updating the display
                if (!isNaN(itemTotalPrice)) {

                    // Send an Ajax request to update the quantity on the server
                    $.ajax({
                        url: '{{ route('cart.updateQuantity') }}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            product_id: productId,
                            quantity: currentQuantity,
                            _token: '{{ csrf_token() }}'
                        },

                        success: function(response) {

                            let Toast = Swal.mixin({
                                toast: true,
                                position: 'bottom-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal
                                        .stopTimer)
                                    toast.addEventListener('mouseleave', Swal
                                        .resumeTimer)
                                }
                            })
                            Toast.fire({
                                icon: 'success',
                                title: 'Quantity Updated'
                            })

                            // Update the total price display for the current item
                            var itemTotalPriceElement = $(this).closest('tr').find(
                                '.item-total-price');

                            // Update the total price display for the current item
                            var itemPrice = $(this).closest('tr').data('price');

                            console.log('itemPriceElement:', itemPrice);

                            // Log the length of the selected elements for debugging
                            console.log('itemTotalPriceElement length:', itemTotalPriceElement
                                .length);


                            // Check if itemTotalPriceElement exists before updating the text
                            if (itemTotalPriceElement.length) {
                                itemTotalPriceElement.text('₦' + itemTotalPrice.toFixed(
                                    2
                                )); // Ensure the price is formatted with two decimal places
                            } else {
                                console.log('itemTotalPriceElement not found!');
                            }

                            // Update the total cart price display with currency formatting
                            var totalCartPrice = response.totalCartPrice.toLocaleString(
                                'en-US', {
                                    style: 'currency',
                                    currency: 'NGN'
                                });

                            $('#total-cart-price').text(totalCartPrice);
                            console.log('Updated Total Cart Price:', totalCartPrice);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }





            });
        });
    </script>

</body>

</html>
