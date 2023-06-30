<!DOCTYPE html>
<html lang="en-US" data-website-id="1">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>Sky Car Care</title>
    <link type="image/x-icon" rel="shortcut icon" href="{{ URL::asset('frontend/images/icons/favicon.ico') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('frontend/css/web.assets_frontend.css') }}" />
    <style>
        .cart {
            position: fixed;
            background: #F3F3F3;
            right: 0;
            box-shadow: -2px 0 4px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transform: translate(500px, 0);
            transition: transform 250ms ease-in-out;
            z-index: 20;
        }

        body.open .cart {
            transform: translate(0, 0);
        }

        .cart__header .cart__text {
            float: right;
        }

        .cart__product {
            display: none;
        }

        .cart__empty {
            padding: 30px 15px;
            margin: 0;
            font-style: italic;
            text-align: center;
        }

        .cart__empty.hide {
            display: none;
        }
    </style>
</head>


<!DOCTYPE html>
<html lang="en-US" data-website-id="1">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>Sky Car Care</title>
    <link type="image/x-icon" rel="shortcut icon" href="{{ URL::asset('frontend/images/icons/favicon.ico') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('frontend/css/web.assets_frontend.css') }}" />
    <style>
        .cart {
            position: fixed;
            background: #F3F3F3;
            right: 0;
            box-shadow: -2px 0 4px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transform: translate(500px, 0);
            transition: transform 250ms ease-in-out;
            z-index: 20;
        }

        body.open .cart {
            transform: translate(0, 0);
        }

        .cart__header .cart__text {
            float: right;
        }

        .cart__product {
            display: none;
        }

        .cart__empty {
            padding: 30px 15px;
            margin: 0;
            font-style: italic;
            text-align: center;
        }

        .cart__empty.hide {
            display: none;
        }
    </style>
</head>

<body class="">
    <div id="wrapwrap" class="homepage">
        @include('layouts/front_partials/header')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- content -->
                    @yield('content')
                    @include('layouts/front_partials/footer')
                </div>
                <!-- end main content-->
            </div>
            <!-- END layout-wrapper -->
        </div>

    </div>
    @yield('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- HTML markup for notification display -->
    <div id="notification-container"></div>

    <!-- JavaScript code -->
    <script type="text/javascript">
        function ShowNotificator(icon, title) {
            Swal.fire({
                position: 'bottom-end',
                icon: icon,
                title: title,
                showConfirmButton: false,
                timer: 7000,
                toast: true,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        }

        // Check for success or error session variables and display notifications
        @if (session('success'))
            ShowNotificator('success', '{{ session('success') }}');
        @endif

        @if (session('error'))
            ShowNotificator('warning', '<strong>Oh snap! </strong>{{ session('error') }}');
        @endif
    </script>

</body>

</html>
