@extends('layouts.shop_layout.master')
@section('content')
    <!-- faq-area area start here  -->
    <div class="faq-area section" style="padding-top: 0%">
        <div class="container">
            <div class="row">
               @include('shop.include.page_sidebar')
                <div class="col-lg-9 col-md-8">
                    <div class="privacy-policy-info">

                        <h1 class="section-header-area">Return Policy:</h1>
                        <p class="about-us-text">At Farmers Marketplace, we are committed to ensuring your satisfaction with every purchase. As we
                            primarily sell food items, we understand the importance of maintaining the quality and freshness
                            of
                            our products. Therefore, our return policy is designed to accommodate the nature of perishable
                            goods
                            while also providing flexibility for non-perishable items.</p>

                        <h1 class="section-header-area">Perishable Goods:</h1>
                        <p class="about-us-text">For any perishable goods, including fresh produce and other food items with a limited shelf life,
                            we
                            only accept returns if a valid complaint is filed within 6 hours of receiving the delivery. To
                            initiate a return for perishable goods, please contact us via email at
                            hello@farmersmarketplace.ng <a href="mailto:hello@farmersmarketplace.ng">hello@farmersmarketplace.ng</a> or reach out to us by phone at +234 902 813 5986. Please provide relevant details about the
                            product and the reason for return when filing a complaint.</p>


                        <h1 class="section-header-area">Non-Perishable Goods:</h1>
                        <p class="about-us-text">
                            For non-perishable food items and other products that have a longer shelf life, we only accept
                            returns if a valid complaint is filed within 24 hours of receiving the delivery. To initiate a
                            return for non-perishable goods, please contact us via email at hello@farmersmarketplace.ng or
                            reach out to us by phone at +234 902 813 5986. Please provide us with the necessary details regarding
                            the item and the reason for return when filing a complaint.
                        </p>

                        <h1 class="section-header-area">Cancellation on Delivery Day:</h1>
                        <p class="about-us-text">Please note that cancellation requests for orders scheduled for delivery on the same day may not
                            be honored. We encourage customers to review their orders carefully before confirming to avoid
                            any inconvenience.</p>

                        <h1 class="section-header-area">Delivery Waiting Time:</h1>
                        <p class="about-us-text">Our delivery agents will wait for a maximum of 20 minutes at the delivery location to ensure you
                            receive your order promptly. If you anticipate any delays or foresee potential issues with
                            receiving your delivery, please inform us as early as possible to make necessary arrangements.</p>


                        <p class="about-us-text">Please note that our team will review each valid complaint promptly and provide further
                            instructions. We appreciate your understanding that certain perishable items may not be eligible
                            for
                            return due to their nature, and we are dedicated to addressing any valid concerns to ensure your
                            satisfaction.</p>
                        <p class="about-us-text">Thank you for choosing Farmers Marketplace for your fresh, locally-sourced food needs. We are
                            here
                            to assist you with any valid complaints or issues you may have regarding your purchases.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end here  -->
@endsection
