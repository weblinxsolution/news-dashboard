<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('buyer/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('buyer/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('buyer/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('buyer/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('buyer/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('buyer/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('buyer/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('buyer/assets/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Dashboard - Buyer - {{ $title }}</title>

</head>

<body class="over-hidden hold-transition sidebar-mini layout-fixed">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-white">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="sidebar-toggler" data-widget="pushmenu" href="#" role="button"><i
                        class="fas text-dark fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item me-3">
                <button class="btn bg-orange text-white"><i class="fa-solid fa-info-circle"></i> Need help ?</button>
            </li>
            <li class="nav-item me-3">
                <button class="btn btn-primary"><i class="fa-regular fa-credit-card"></i> Recharge Balance</button>
            </li>
            <li class="nav-item me-3">
                <button class="btn bg-sidebar"><i class="fa-solid fa-address-card"></i> €5.00 </button>
            </li> -->
            <li class="nav-item me-5">
                <div class="dropdown">
                    <button class="btn bg-sidebar dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-left: -105px;">
                        <li><a class="dropdown-item" href="profile.php"> Edit Profile </a>
                        </li>
                        <li><a class="dropdown-item" href="paymentInvoice.php"> Payment Invoices </a>
                        </li>
                        <li><a class="dropdown-item" href="buyerLogin.php"> Switch to Seller </a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-sidebar" id="main-sidebar">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <div>
                <img src="{{ asset('buyer/assets/images/hollow.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3 display-none" style="opacity: .8">
            </div>
            <!-- <div class="brand-image img-circle elevation-3">
                    <i class="fa-solid fa-circle fa-2xl"></i>
                </div> -->
            <span class="brand-text font-weight-light">Logo here</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar mt-3">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <!-- 1 -->
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="fa-solid fa-house"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <!-- 2 -->
                    <li class="nav-item">
                        <a href="dashboard3.php" class="nav-link">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>
                                Media and Blogs
                            </p>
                        </a>
                    </li>
                    <!-- 3 -->
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">
                            <i class="fa-solid fa-people-group"></i>
                            <p>
                                Group
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="subscription.php" class="nav-link">
                            <i class="fa fa-link"></i>
                            <p>
                                PBN Links
                            </p>
                        </a>
                    </li>
                    <!-- 4 -->
                    <li class="nav-item">
                        <a href="transaction.php" class="nav-link">
                            <i class="fa-solid fa-money-bill"></i>
                            <p>
                                Transaction
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
