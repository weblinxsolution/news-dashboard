@extends('seller.layout.main')
@section('seller-templete')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="row mx-0">
                <div class="col-12 col-md-8 col-lg-10">
                    <div class="my-3 text-center">
                        <h3 class="font-weight-bold">Thank You !</h3>
                    </div>
                    <h4 class="mb-2">Great! In the next few days we will check your web and we will notify you in case
                        it is accepted.</h4>
                    <p>While you await, we can answer some frequent doubts and we give you some advices.</p>
                    <div class="d-flex">
                        <img src="assets/images/end_request_website.png" class="w-auto" alt="">
                        <div class="card w-100 bg-light">
                            <div class="h-100 p-2 bg-light-pink">
                                <ul class="ps-0">
                                    <li class="list-item mb-3 list-style-none"><i
                                            class="fa-solid fa-circle-check text-black"></i> You have 48 hours to
                                        accept or reject orders.</li>
                                    <li class="list-item mb-3 list-style-none"><i
                                            class="fa-solid fa-circle-check text-black"></i> Once the order is finished,
                                        you can ask for you payment. Get it in only 10 working days.</li>
                                    <li class="list-item mb-3 list-style-none"><i
                                            class="fa-solid fa-circle-check text-black"></i> You can connect with the
                                        advertiser in the order chat.</li>
                                    <li class="list-item mb-3 list-style-none"><i
                                            class="fa-solid fa-circle-check text-black"></i> You have a deadline and an
                                        established time for each order. Do not forget to check it out!.</li>
                                    <li class="list-item mb-3 list-style-none"><i
                                            class="fa-solid fa-circle-check text-black"></i>text-black Change the price or
                                        your
                                        web data up to once a month.</li>
                                    <li class="list-item mb-3 list-style-none"><i
                                            class="fa-solid fa-circle-check text-black"></i> Contact with Support
                                        whenever you need it and we answer you in less than 24 hours.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ Route('seller.index') }}" class="btn bg-sidebar"><i class="fa-solid fa-arrow-right"></i>
                            Finish</a>
                    </div>
                </div>
                <div class="col-0 col-md-4 col-lg-2 mt-3 h-full">
                    <div class="fw-bold">
                        <span class="bg-sidebar text-white circle-adj vertical-line-blue">1</span>
                        Enter the URL
                    </div>
                    <div class="mt-5 fw-bold">
                        <span class="bg-sidebar text-white circle-adj vertical-line-blue">2</span>
                        Complete the data
                    </div>
                    <div class="mt-5 fw-bold">
                        <span class="bg-sidebar text-white circle-adj vertical-line-blue">3</span>
                        Verify your website
                    </div>
                    <div class="mt-5 fw-bold">
                        <span class="bg-sidebar text-white circle-adj">4</span>
                        Finished
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content end -->
@endsection
