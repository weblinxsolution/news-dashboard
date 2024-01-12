<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin - {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('seller/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('seller/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('seller/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('seller/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('seller/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('seller/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('seller/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('seller/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- select 2 -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    <!-- countries -->
    <script src="https://unpkg.com/countryjs/dist/country.js"></script>


    <link rel="stylesheet" href="{{ asset('seller/assets/css/style.css') }}">

    <style>
        .hover-bg-light:hover {
            background-color: #5478E4 !important;
            color: white !important;
        }

        .vertical-line-blue {
            position: relative;
        }

        .vertical-line-blue::after {
            content: '';
            position: absolute;
            width: 4px;
            height: 50px;
            top: 26px;
            left: 44%;
            background-color: #4169e1;
        }

        .vertical-line-gray {
            position: relative;
        }

        .vertical-line-gray::after {
            content: '';
            position: absolute;
            width: 4px;
            height: 50px;
            top: 26px;
            left: 44%;
            background-color: lightgray;
        }

        .content-wrapper {
            background-color: white;
        }

        .box-shadow-none {
            box-shadow: none;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: black;
        }
    </style>
</head>

<body class="over-hidden hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white bg-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" id="sidebar-toggler" href="#" role="button"><i
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
                            {{-- <li><a class="dropdown-item" href="sellerlogin.php"> Switch to Buyer </a>
                            </li> --}}
                            <li><a class="dropdown-item" href="{{ Route('admin.logout') }}"><i
                                        class="fa-solid fa-right-from-bracket"></i>Logout </a>
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
            <a href="#" class="brand-link">
                <img src="{{ asset('seller/assets/images/hollow.png') }}" alt="AdminLTE Logo"
                    class="brand-image display-none img-circle elevation-3" style="opacity: .8">
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
                            <a href="{{ Route('admin.index') }}" class="nav-link">
                                <i class="fa-solid fa-house"></i>
                                <p>
                                    Websites
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
