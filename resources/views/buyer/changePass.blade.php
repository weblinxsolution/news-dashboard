@extends('buyer.layout.main')
@section('buyer-template')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="container-fluid">
                <div class="mt-5 p-3 border bg-white">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link text-blue" aria-current="page" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-blue active" href="changePass.html">Change Password</a>
                        </li>
                    </ul>
                    <div class="my-4">
                        <!-- 1 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">Old Password <span
                                        class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">New Password <span
                                        class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">Repeat Password <span
                                        class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn bg-blue text-white">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer-2.php'; ?>
        </div>
    </section>
    <!-- content end -->
@endsection
