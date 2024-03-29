@extends('layouts.shop_layout.master')
@section('content')
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                @include('user.auth.includes.asidebar')

                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box edit-user-profile-page-box">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="true">
                                        Change Profile Info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-password" type="button" role="tab"
                                        aria-controls="pills-password" aria-selected="false">
                                        Change Password</b utton>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="profile-form mt-5">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form enctype="multipart/form-data" action="{{ route('user.edit.action') }}"
                                            method="post">
                                            @csrf

                                            <div class="profile-top mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="author-info">
                                                        <h3>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">First Name</label>
                                                        <input type="text" class="form-control" id="firstname"
                                                            name="firstname" value="{{ auth()->user()->firstname }}">
                                                        @error('firstname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname"
                                                            name="lastname" value="{{ auth()->user()->lastname }}">
                                                        @error('lastname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Phone</label>
                                                        <input type="text" class="form-control" id="lastname"
                                                            name="phone" value="{{ auth()->user()->phone ?? '' }}">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="lname">Street Address</label>
                                                        <input type="text" class="form-control" id="street_address"
                                                            name="address"
                                                            value="{{ auth()->user()->addresses->address ?? '' }}">
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="Gender">City</label>

                                                        <select class="form-control" id="city" name="city">
                                                            <option disabled selected>--Select State--</option>
                                                            @foreach ($shipping_price as $shipping_price)
                                                                @if (auth()->user())
                                                                    <option value="{{ $shipping_price->city }}"
                                                                        {{ $shipping_price->city == (auth()->user()->addresses->city ?? ' ') ? 'selected' : '' }}>
                                                                        {{ $shipping_price->city }}</option>
                                                                @else
                                                                    <option value="{{ $shipping_price->city }}">
                                                                        {{ $shipping_price->city }}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="lname">State</label>
                                                        <input type="text" class="form-control" id="state"
                                                            name="state" value="{{ 'Lagos' }}" readonly>
                                                        @error('state')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-button text-center">
                                                        <button type="submit"
                                                            class="form-btn primary-btn">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-password" role="tabpanel"
                                    aria-labelledby="pills-password-tab">
                                    <form class="change-password-form mt-5" method="post"
                                        action="{{ route('password.change') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="CurrentPassword"
                                                        name="current_password" placeholder="Current Password" />
                                                    @error('current_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id=""
                                                        name="password" placeholder="New Password" />
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id=""
                                                        name="password_confirmation" placeholder="Confirm Password" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-button text-center">
                                                    <button type="submit" class="form-btn primary-btn">Save
                                                        Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
