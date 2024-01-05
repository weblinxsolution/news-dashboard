@extends('seller.layout.main')
@section('seller-templete')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="row mx-0">
                <div class="col-12 col-md-8 col-lg-10">
                    <div class="wrapper-header">
                        <div class="container-fluid d-flex justify-content-between">
                            <h3 class="mt-3">1. Enter URL</h3>
                            <div class="my-auto">
                                <a href="index2.php" class="btn text-white bg-black"><i class="fa-solid fa-arrow-left"></i>
                                    Cancel</a>
                            </div>
                        </div>
                    </div>
                    <form action="{{ Route('seller.addWebUrl') }}" method="post">
                        @csrf
                        <div class="container-fluid">
                            <div class="alert bg-blue text-center" role="alert">
                                <span class="fw-bold">Important:</span> We do not accept link farms, review farms, websites
                                with
                                duplicate or low quality content.
                            </div>

                            <div class="mb-3">
                                <label for="validationDefaultUsername" class="form-label">URL of your website <span
                                        class="text-black">*</span></label>
                                <div class="input-group">

                                    <input type="url" class="form-control" id="validationDefaultUsername"
                                        aria-describedby="inputGroupPrepend2" placeholder="http://www.example.com"
                                        name="url">
                                </div>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="mb-3 d-flex justify-content-between">
                                <button type="submit" class="btn border text-black rounded"><i
                                        class="fa-solid fa-forward"></i>
                                    Skip</button>
                                <button type="submit" class="btn bg-sidebar"><i class="fa-solid fa-arrow-right"></i>
                                    Next</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-0 col-md-4 col-lg-2 mt-3 h-full">
                    <div class="fw-bold">
                        <span class="bg-sidebar text-white circle-adj vertical-line-gray">1</span>
                        Enter the URL
                    </div>
                    <div class="mt-5">
                        <span class="bg-grey text-white circle-adj vertical-line-gray">2</span>
                        Complete the data
                    </div>
                    <div class="mt-5">
                        <span class="bg-grey text-white circle-adj vertical-line-gray">3</span>
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
@endsection
