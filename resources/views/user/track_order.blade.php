@extends('layouts.shop_layout.master')
@section('content')
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">

                @include('user.auth.includes.asidebar')

                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-order-page-box track-my-order-page-box">
                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">Track My Order</h2>
                            </div>
                            <div class="order-progress bg-white">

                                <div class="single-progress {{ $track->track_order >= 1 ? 'active' : '' }} ">
                                    <span>Processing</span>
                                </div>
                                <div class="single-progress {{ $track->track_order >= 2 ? 'active' : '' }} ">
                                    <span>Shipped</span>
                                </div>
                                <div class="single-progress {{ $track->track_order == 4 ? 'active' : '' }}">
                                    <span>Delivered</span>
                                </div>
                            </div>
                            <div class="order-table mt-5">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Item</th>
                                                @if ($track->track_order == 4)
                                                    <th>Rating</th>
                                                @endif
                                                <th>Price</th>
                                                <th>Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    {{ $track->product->product_name }}
                                                </td>
                                                <td>
                                                    <div class="item-image-lsit d-flex align-items-center">
                                                        <div class="single-item">
                                                            <?php $order_image_path = 'images/product_images/small/' . $track->product->main_image; ?>
                                                            @if (!empty($track->product->main_image))
                                                                <img src="{{ asset('images/product_images/small/' . $track->product->main_image) }}"
                                                                    width="60px" height="60px">
                                                            @else
                                                                <img src="{{ asset('images/product_images/small/no_image.png') }}"
                                                                    width="60px" height="60px">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($track->track_order == 4)
                                                    @if ($track->is_rated == 1)
                                                        <td><button class="primary-btn-v2 write-review-btn" disabled>
                                                                Reviewed</button>
                                                        </td>
                                                        @else
                                                        <td>
                                                            <button class="primary-btn write-review-btn"
                                                                data-bs-toggle="modal" data-bs-target="#writeReviewModal2">
                                                                Review</button>
                                                        </td>
                                                    @endif
                                                @endif
                                                <td>
                                                    <span class="amount">₦{{ number_format($track->product->price) }}</span>
                                                </td>
                                                <td>1.00</td>
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



    <div class="modal fade writeReviewModal" id="writeReviewModal2" tabindex="-1" aria-labelledby="writeReviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h2 class="modal-title fw-bold text-black" id="writeReviewModalLabel">
                        Write Your Feedback</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="feedback" method="POST"
                        action="{{ route('user.review.action', ['order_id' => $track->order_id]) }}">
                        @csrf
                        <div class="mb-3  w-100">
                            <label for="exampleFormControlTextarea1" class="form-label">Rating</label><br>
                            <select class="form-select form-control" aria-label="Default select example" name="rating">
                                <option selected>Select</option>
                                <option value="5">Best (5 Star)</option>
                                <option value="4">Better (4 Star)</option>
                                <option value="3">Good (3 Star)</option>
                                <option value="2">Bad (2 Star)</option>
                                <option value="1">Worst (1 Star)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Write Your Feedback</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                    </div>
                        <button type="submit" class="primary-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
