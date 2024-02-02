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

    <style>
        /* CSS */
        .button-3 {
            appearance: none;
            background-color: #2ea44f;
            border: 1px solid rgba(27, 31, 35, .15);
            border-radius: 6px;
            box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
            padding: 6px 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            white-space: nowrap;
        }

        .button-3:focus:not(:focus-visible):not(.focus-visible) {
            box-shadow: none;
            outline: none;
        }

        .button-3:hover {
            background-color: #2c974b;
        }

        .button-3:focus {
            box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
            outline: none;
        }

        .button-3:disabled {
            background-color: #94d3a2;
            border-color: rgba(27, 31, 35, .1);
            color: rgba(255, 255, 255, .8);
            cursor: default;
        }

        .button-3:active {
            background-color: #298e46;
            box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
        }
    </style>
</head>

<body class="direction-ltr">


    @include('layouts.shop_layout.mainheader')

    @yield('content')

    @include('layouts.shop_layout.mainfooter')


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
                    <form action="#" method="POST">
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


    {{-- <div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
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
    </div> --}}
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
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
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

                        console.log(response.cartCount);

                        // Update cart items list
                        $('#cart-items').html(response.cartItems);

                        $('#total-cart-price').text(response.totalCartPrice);
                        console.log(response.totalCartPrice);
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

    {{-- Shippng fee --}}
    {{-- <script>
        document.getElementById('locationSelect').addEventListener('change', function() {
            var selectedLocation = this.value;

            // Make an AJAX request to fetch the shipping price based on the selected location
            fetch('/shop/get-shipping-price/' + selectedLocation)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('shippingPrice').innerText = 'Shipping Price: ₦' + data.price
                        .toFixed(2);
                })
                .catch(error => {
                    console.error('Error fetching shipping price:', error);
                });
        });
    </script> --}}

    <script>
        document.getElementById('locationSelect').addEventListener('change', function() {
            var selectedLocation = this.value;

            $.ajax({
                type: 'POST',
                url: '/shop/get-shipping-price',
                data: {
                    selectedLocation: selectedLocation
                },
                dataType: 'json',
                success: function(data) {
                    console.log(selectedLocation);

                    $('#shippingPrice').text('₦' + data.price.toFixed(2));
                    console.log('Shipping Price: ₦' + data.price.toFixed(2));

                    $('#total-cart-price').text(data.totalCartPrice);
                    console.log('Updated Total Cart Price:', data.totalCartPrice);

                    location.reload();
                },
                error: function(error) {
                    // Handle error if needed
                }
            });

            // fetch('/shop/get-shipping-price', {
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json',
            //             'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token if needed
            //         },
            //         body: JSON.stringify({
            //             selectedLocation: selectedLocation
            //         }),
            //     })
            //     .then(response => response.json())
            //     .then(data => {

            //         // document.getElementById('shippingPrice').innerText = 'Shipping Price: ₦' + data.price.toFixed(2);
            //         $('#shippingPrice').text('Shipping Price: ₦' + data.shippingPrice.toFixed(2));

            //         console.log(data.price);


            //         // Update the total cart price display with currency formatting
            //         var totalCartPrice = response.totalCartPrice.toLocaleString(
            //             'en-US', {
            //                 style: 'currency',
            //                 currency: 'NGN'
            //             });

            //         $('#total-cart-price').text(totalCartPrice);
            //         console.log('Updated Total Cart Price:', totalCartPrice);

            //     })
            //     .catch(error => {
            //         // Handle the error if needed
            //     });



        });
    </script>

    <script>
        const paymentForm = document.getElementById('paymentForm');
        console.log(paymentForm);
        paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack(e) {
            e.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_f1aa39d3ac6068916f56a41a84c71314aa1b3e2d',
                // key: 'pk_live_064b702068ffa6cf068c63f0597d06169781590c',
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: '' + Math.floor((Math.random() * 1000000000) +
                    1
                ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    handlePaystackCallback(response);
                    window.location.href = '{{ route('checkout.thankyou') }}'; // Replace with your actual URL
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                }
            });

            handler.openIframe();
        }
    </script>

    <script>
        function handlePaystackCallback(response) {
            if (response.status === 'success') {
                // Get the input data (replace 'myInput' with the actual ID of your input field)


                var fullnameElement = document.getElementById("fullname");
                var fullnameValue = fullnameElement.value;

                var addressElement = document.getElementById("address");
                var addressValue = addressElement.value;

                var locationSelectElement = document.getElementById("locationSelect");
                var locationSelectElementValue = locationSelectElement.value;

                var cityElement = document.getElementById("city");
                var cityElementValue = cityElement.value;

                var phoneElement = document.getElementById("phone");
                var phoneValue = phoneElement.value;

                var additionalPhoneElement = document.getElementById("additionalPhone");
                var additionalPhoneValue = additionalPhoneElement.value;

                console.log(fullnameValue, addressValue, locationSelectElementValue, cityElementValue,
                    phoneValue, additionalPhoneValue);

                // Make a fetch request to the controller
                fetch('/shop/checkout/order', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            fullname: fullnameValue,
                            address: addressValue,
                            state: locationSelectElementValue,
                            city: cityElementValue,
                            phone: phoneValue,

                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        // Handle the response from the controller if needed
                    })
                    .catch(error => {
                        console.error(error);
                        // Handle errors if necessary
                    });
            } else {
                // Handle other statuses or errors as needed
                console.error('Payment failed:', response.message);
            }
        }
    </script>



</body>

</html>
