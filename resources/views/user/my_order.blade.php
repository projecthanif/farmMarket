@extends('layouts.shop_layout.master')
@section('content')
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                @include('user.auth.includes.asidebar')

                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-order-page-box">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-active-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-active-order" type="button" role="tab"
                                        aria-controls="pills-active-order" aria-selected="true">
                                        Active Order
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-delivered-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-delivered-order" type="button" role="tab"
                                        aria-controls="pills-delivered-order" aria-selected="false">
                                        Delivered Order
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancelled-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-cancelled-order" type="button" role="tab"
                                        aria-controls="pills-cancelled-order" aria-selected="false">
                                        Cancelled Order
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-active-order" role="tabpanel"
                                    aria-labelledby="pills-active-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th>Total Price</th>
                                                        <th>Track order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($pending_order as $item)
                                                        <tr>
                                                            <td>
                                                                <p>Order No: {{ $item->order_id }}</p>
                                                                <p>Order Time:
                                                                    {{ $item->created_at->format('M d, Y H:i A') }}</p>
                                                            </td>
                                                            <td>
                                                                <div class="item-image-lsit d-flex align-items-center">
                                                                    <div class="single-item me-2">
                                                                        <img class="order-image"
                                                                            src="{{ asset('images/product_images/small/' . $item->product->main_image) }}"
                                                                            alt="images">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="my-order-td-row">
                                                                {{ $item->qty }}
                                                            </td>
                                                            <td class="my-order-td-row">
                                                                <span class="amount">
                                                                    ₦{{ number_format($item->qty * $item->product->price) }}</span>
                                                            </td>
                                                            <td class="my-order-td-row"><a href="{{ route('user.track', ['order_id' => $item->order_id]) }}" ><i
                                                                        class="fas fa-user-cog"></i></a></td>

                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">
                                                                <h1>No data found!</h1>
                                                            </td>
                                                        </tr>
                                                    @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-delivered-order" role="tabpanel"
                                    aria-labelledby="pills-delivered-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Item</th>
                                                        <th>Total Price</th>
                                                        <th>Write Review</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($completed_order as $item)
                                                        <tr>
                                                            <td>
                                                                <p>Order No: {{ $item->order_id }}</p>
                                                                <p>Order Time:
                                                                    {{ $item->updated_at->format('M d, Y H:i A') }}</p>
                                                            </td>
                                                            <td>
                                                                <div class="item-image-lsit d-flex align-items-center">
                                                                    <div class="single-item me-2">
                                                                        <img class="order-image"
                                                                            src="{{ asset('images/product_images/small/' . $item->product->main_image) }}"
                                                                            alt="images">
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="my-order-td-row">
                                                                <span class="amount">
                                                                    ₦{{ number_format($item->qty * $item->product->price) }}</span>
                                                            </td>

                                                            <td class="my-order-td-row"><a href="{{ route('user.track', ['order_id' => $item->order_id]) }}" ><i
                                                                class="fas fa-user-cog"></i></a></td>


                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">
                                                                <h1>No data found!</h1>
                                                            </td>
                                                        </tr>
                                                    @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-cancelled-order" role="tabpanel"
                                    aria-labelledby="pills-cancelled-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Item</th>
                                                        <th>Total Price</th>
                                                        <th>Track order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4" class="text-center">
                                                            <h1>No data found!</h1>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>
    @endpush
@endsection
