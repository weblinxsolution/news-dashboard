@extends('seller.layout.main')
@section('seller-templete')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="row mx-0">
                <div class="col-12 col-md-8 col-lg-10">
                    <div class="wrapper-header mb-5">
                        <div class="container-fluid d-flex justify-content-between mt-3">
                            <h3 class="font-weight-bold">3. Verify your website</h3>
                            <div class="my-auto">
                                <a href="{{ route('seller.finish') }}" class="btn d-flex gap-10 align-items-center text-white bg-sidebar">
                                    Continue
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="alert bg-blue text-center" role="alert">
                        We need to verify, for security reasons, that this website belongs to you. You have 3 different
                        ways:
                    </div>

                    <div class="mt-4 container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="container">
                                    <div class="card h-100 shadow">
                                        <div class="p-4 text-center">
                                            <img src="assets/images/verify_website_code.png" class="w-auto mb-3"
                                                alt="image">
                                            <h3 class="mb-3">Code</h3>
                                            <p class="mb-2">Add this code between the head tags of your website:</p>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Recipient's username" id="copyCode"
                                                    value='<meta name="publisuites-verify-code" content="aHR0cHM6Ly9oZWxsb3dvcmxkLmNvbQ==" />'
                                                    readonly aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2">
                                                <span class="input-group-text ml-2 cursor" onclick="copyCode()"
                                                    id="basic-addon2"><i class="fa-solid fa-copy"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 text-center">
                            <p>Click on “Verify now” if you have done any of the three options to validate your account.
                            </p>
                            <div class="mb-2">
                                <a href="{{ route('seller.finish') }}" class="btn text-decoration-none bg-sidebar">Verify
                                    Now</a>
                                <a href="{{ route('seller.finish') }}"
                                    class="btn btn-secondary  text-decoration-none ">Verify later</a>
                            </div>
                            <p>If you have any questions follow this guide where we explain step by step how to verify
                                your website.
                                If you <br>still cannot do it send us an email to and we will be pleased to help you..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-0 col-md-4 col-lg-2 mt-3 h-full">
                    <div class="fw-bold">
                        <span class="bg-sidebar text-white circle-adj vertical-line-blue">1</span>
                        Enter the URL
                    </div>
                    <div class="mt-5">
                        <span class="bg-sidebar text-white circle-adj vertical-line-blue">2</span>
                        Complete the data
                    </div>
                    <div class="mt-5">
                        <span class="bg-sidebar text-white circle-adj vertical-line-gray">3</span>
                        Verify your website
                    </div>
                    <div class="mt-5">
                        <span class="bg-grey text-white circle-adj">4</span>
                        Finished
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content end -->

    <script>
        function copyCode() {
            // Get the text field
            var copyText = document.getElementById("copyCode");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the Code: " + copyText.value);
        }
    </script>
@endsection
