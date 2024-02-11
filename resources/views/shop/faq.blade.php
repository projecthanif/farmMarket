@extends('layouts.shop_layout.master')
@section('content')
    <!-- faq-area area start here  -->
    <div class="faq-area section" style="padding-top: 0%">
        <div class="container">
            <div class="row">
                @include('shop.include.page_sidebar')

                <div class="col-lg-9 col-md-8">
                    <div class="accordion" id="accordionFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What is Farmers Marketplace?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Farmers Marketplace is an online platform that connects consumers
                                        directly with farm produce directly from local farmers, enabling the purchase of
                                        fresh, organic farm produce and related products.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    How does Farmers Marketplace work?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Farmers Marketplace allows consumers to browse a wide selection of
                                        farm produce and related items. Customers can place orders online, and the products
                                        are then delivered to their doorsteps.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    What types of products are available on Farmers Marketplace?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Farmers Marketplace offers a diverse range of products, including
                                        fruits, vegetables, dairy products, meats, poultry, seafood, honey, and other
                                        farm-fresh items.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    How can I be sure that the produce is organic and of high quality?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">We ensure that all products listed on Farmers Marketplace meet
                                        certified organic standards and adhere to high-quality requirements. Our platform
                                        promotes transparency, and we work closely with our farming partners to guarantee
                                        the quality and authenticity of the products.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    How are the products delivered, and what are the delivery options?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Products are delivered directly to customers' doorsteps through our
                                        efficient and reliable delivery network. Customers can choose from various delivery
                                        options based on their location and preferences.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                    How does Farmers Marketplace support local farmers and sustainable agriculture?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Farmers Marketplace is committed to supporting local farmers and
                                        promoting sustainable agricultural practices. By providing a platform for farmers to
                                        sell their products, we help them receive fair compensation for their hard work and
                                        contribute to the growth of local farming communities.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                    What payment methods are accepted on Farmers Marketplace?


                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">We accept various payment methods, including credit/debit cards,
                                        digital wallets, and other secure online payment options.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                    Are there any subscription or membership options available?
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Farmers Marketplace offers subscription and membership options that
                                        provide additional benefits, such as exclusive discounts, special offers, and early
                                        access to products.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                    How can I get in touch with Farmers Marketplace for further assistance or inquiries?
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse show" aria-labelledby="heading9"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Customers can contact our customer support team via email, phone,
                                        or live chat for any inquiries, assistance, or feedback.</p>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$fq->id}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$fq->id}}" aria-expanded="true" aria-controls="collapse{{$fq->id}}">
                                        {{langConverter($fq->question, $fq->question_fr)}}
                                    </button>
                                </h2>
                                <div id="collapse{{$fq->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$fq->id}}" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p class="faq-text">{{langConverter($fq->answer, $fq->answer_fr)}}</p>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end here  -->
@endsection
