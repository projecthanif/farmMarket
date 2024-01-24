@extends('layouts.shop_layout.master')
@section('content')
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
              @include('user.auth.includes.asidebar')

                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box">
                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">My Profile</h2>
                                <a href="https://zairito.zainikthemes.com/user/profile-edit" class="text-black">Edit My
                                    Profile</a>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="address-box card">
                                        <h3 class="text-black">Personal Information</h3>
                                        <ul>
                                            <li>Name: William Smith</li>
                                            <li>Date Of Birth: N/A</li>
                                            <li>Gender: N/A</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="address-box card">
                                        <h3 class="text-black">Address &amp; Contact Uss</h3>
                                        <ul>
                                            <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="4d383e283f7c0d2a202c2421632e2220">[email&#160;protected]</a>
                                            </li>
                                            <li>Not to update yet</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="address-box card">
                                        <h3 class="text-black">Default Billing Address</h3>
                                        <ul>
                                            <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="740107110645341319151d185a171b19">[email&#160;protected]</a>
                                            </li>
                                            <li>Not to update yet</li>
                                        </ul>
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
