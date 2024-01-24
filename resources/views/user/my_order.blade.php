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
                                                        <th>Total Price</th>
                                                        <th>Track order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Order No: QIcLDH</p>
                                                            <p>Order Time: January 10, 2024, 11:55 am</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                <div class="single-item me-2">
                                                                    <img class="order-image"
                                                                        src="https://zairito.zainikthemes.com/uploaded_files/product_image/product-image-1.png"
                                                                        alt="images">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> $ 570</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a
                                                                href="https://zairito.zainikthemes.com/user/track-my-order/eyJpdiI6IlpNRkd6YU5BS2N3UmM1cGlPYTRMZmc9PSIsInZhbHVlIjoiNytVNEVEa2VNdVVNeVlQUktoMmNoUT09IiwibWFjIjoiZTU3N2JhZGY0NTNkNjYzNDZmMzYwYmIzZWJiMjNmYzJmOGEyNDg1MjNhMjM0YmM5ZjY1ZmNjYTcyNjFkNmViZiIsInRhZyI6IiJ9"><i
                                                                    class="fas fa-user-cog"></i></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <p>Order No: LjXoBh</p>
                                                            <p>Order Time: October 14, 2023, 7:30 pm</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                <div class="single-item me-2">
                                                                    <img class="order-image"
                                                                        src="https://zairito.zainikthemes.com/uploaded_files/product_image/product-image-3.png"
                                                                        alt="images">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> $ 360</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a
                                                                href="https://zairito.zainikthemes.com/user/track-my-order/eyJpdiI6InduZjdXTTIzMVA1RGVUU0dMNzVBbVE9PSIsInZhbHVlIjoiZnhIbE1yRjIzSFMxaGpmVXl1bTJKQT09IiwibWFjIjoiMzU2MWI5NjFlMzcxMGEzY2Y4ZGQzYmVhZTNmOWI5NzA2YzZjYTk5ODU5MDkzZDE1NWQzZTg3ZjM2MzdiYTE0NSIsInRhZyI6IiJ9"><i
                                                                    class="fas fa-user-cog"></i></a></td>
                                                    </tr>
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
                                                    <tr>
                                                        <td>
                                                            <p>Order No: za6Ksj</p>
                                                            <p>Order Time: October 16, 2023, 9:34 am</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                <div class="single-item me-2">
                                                                    <img class="order-image"
                                                                        src="https://zairito.zainikthemes.com/uploaded_files/product_image/651e352d98c731696478509.png"
                                                                        alt="images">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> $ 1470</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a
                                                                href="https://zairito.zainikthemes.com/user/track-my-order/eyJpdiI6ImpZbXgvdUxTdmE1eUdPcGdDcVJQeWc9PSIsInZhbHVlIjoiSW9mV1RjNEJMMU1pN1hrTGk5ZjNEZz09IiwibWFjIjoiZmM5MWEzNjdlZGYyZTczNzIyMWU4MzIxNGVkOWM2OWQ4ZjE0MjBlMGQxYWFlM2U0YTZlYzQyNmVjNjkzNWE4YiIsInRhZyI6IiJ9"><i
                                                                    class="fas fa-user-cog"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Order No: nBVl4c</p>
                                                            <p>Order Time: October 9, 2023, 7:35 am</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                <div class="single-item me-2">
                                                                    <img class="order-image"
                                                                        src="https://zairito.zainikthemes.com/uploaded_files/product_image/product-image-7.png"
                                                                        alt="images">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> $ 2250</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a
                                                                href="https://zairito.zainikthemes.com/user/track-my-order/eyJpdiI6Ii9ybXZZTFRSZkROSmpiTmpXTHNDSHc9PSIsInZhbHVlIjoiYTJOb09JWHpGTGhXYTMwM0tEaklYUT09IiwibWFjIjoiMTAyMTFlYjU2ZDJlNzA1ZjY3ZTQ3Mzk0ZGZlOTU5Y2ZiNjM2N2QxZDUyMTUxMTFmMWFhNDVlOGRjOTQ2MjA2YiIsInRhZyI6IiJ9"><i
                                                                    class="fas fa-user-cog"></i></a></td>
                                                    </tr>
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
