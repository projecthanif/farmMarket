<!-- Cart Offcanvas Sidebar Menu area Start here  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar" aria-labelledby="cartOffcanvasSidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">{{ __('Shopping Cart') }}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="cart-product-list" id="cart-items">
            @php
                $total = 0;
            @endphp

            @if (session('cart') && count(session('cart')) > 0)
                @foreach (session('cart') as $item)
                    <!-- Product item start -->
                    <div class="product-item cart-product-item">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="javascript:void(0)"><img class="product-thumbnal"
                                        src="" alt="cart"></a>
                            </div>
                            <div class="product-info">
                                <div class="product-name-part">
                                    <h3 class="product-name"><a class="product-link"
                                            href="javascript:void(0)">{{ $item['name'] }}</a></h3>
                                    <div class="cart-quantity input-group">
                                        <div class="increase-btn dec qtybutton btn qty_decrease"
                                            data-id="{{ $item['product_id']  }}">-</div>
                                        <input class="qty-input cart-plus-minus-box qty_value" type="text"
                                            name="qtybutton" id="qty_value" value="{{ $item['product_id']  }}" readonly />
                                        <div class="increase-btn inc qtybutton btn qty_increase"
                                            data-id="{{ $item['product_id']  }}">+</div>
                                    </div>
                                    <button class="cart-remove-btn deleteItem"
                                        data-id="{{ $item['product_id'] }}">{{ __('Remove') }}</button>
                                </div>
                                <div class="product-price">
                                    <span class="price">
                                        {{ number_format($item['price'] * $item['product_id']) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product item end -->
                    @php
                        $total += $item['product_id']  * 1;
                    @endphp
                @endforeach
            @else
                <div class="cart-product-list" id="bodyData">
                    <div class="empty-wish-list section">
                        <div class="container">
                            <div class="empty-box-wrap text-center">
                                <img class="empty-box-img" src="{{ asset('frontend/assets/images/empty-box.png') }}"
                                    alt="empty-box" />
                                <h2 class="empty-box-title">{{ __('Your Cart List Is Empty') }}</h2>
                                <p class="empty-box-content">
                                    {{ __('Cart is empty. Please go to your home page for listing it.') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <div class="total-bottom-part">
            <div class="total-count d-flex">
                <h3>{{ __('Total') }}</h3>
                <h4 class="totalAmount"> {{ $total }}</h4>
            </div>
            <a href=""" class="proceed-to-btn d-block text-center">
                {{ __('Proceed To Checkout') }}
            </a>
            <div class="view-cart-go">
                <a href="#">{{ __('View Cart') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- Cart Offcanvas Sidebar Menu area end here  -->
{{-- <div id="CartDeleteFromSession" data-url="{{ route('cart.delete') }}"></div>
<div id="CartIncrementFromSession" data-url="{{ route('cart.increase') }}"></div>
<div id="CartDecrementFromSession" data-url="{{ route('cart.decrease') }}"></div> --}}

@push('post_script')
    <script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>
@endpush
