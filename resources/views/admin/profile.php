<?php include('header.php'); ?>

    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="container-fluid">
                <div class="mt-5 p-3 border bg-white">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link text-green active" aria-current="page" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-green" href="changePass.php">Change Password</a>
                        </li>
                    </ul>
                    <div class="my-4">
                        <!-- 1 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Surnames</label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Company</label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Email address <span class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="email" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Email <span class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="email" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                        </div>
                        <!-- 6 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Address <span class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                        </div>
                        <!-- 7 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Country <span class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                        </div>
                        <!-- 8 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">City <span class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                        </div>
                        <!-- 9 -->
                        <div class="mb-3 row">
                            <div class="col-12 col-md-2">
                                <label for="exampleFormControlInput1" class="form-label">Postal code <span class="text-black">*</span></label>
                            </div>
                            <div class="col-12 col-md-10">
                                <input type="number" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn bg-green text-white">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('footer-2.php'); ?>
        </div>
    </section>
    <!-- content end -->

    <?php include('footer.php'); ?>
