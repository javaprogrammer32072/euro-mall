<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | EURO-MALL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/logo/favicon.png') }}">
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <style>
        .side-nav-menu .active {
            background-color: rgba(63, 135, 245, 0.15);
            border-right: 2px solid #007bff;
        }

        .side-nav-menu .active a {
            color: #3f87f5 !important;
        }
    </style>
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div class="app">
        <div class="layout">
            <div id="layout-wrapper">

                @include('layouts/partials/header')
                @include('layouts/partials/sidebar')
                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">
                            <!-- content -->
                            @yield('content')
                            @include('layouts/partials/footer')
                        </div>
                        <!-- end main content-->
                    </div>
                    <!-- END layout-wrapper -->

                    @include('layouts/partials/rightbar')
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('/assets/js/vendors.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <!-- footerScript -->
    <!-- App js -->
    @yield('scripts')
</body>

</html>
