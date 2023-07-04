<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | JUST CASE 24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/logo/favicon.png') }}">
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendors/datatables/dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendors/datatables/buttons.dataTables.min.css') }}" rel="stylesheet">
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

    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

    <main class="py-4">
        <div class="app">
            <div class="layout">
                <div id="layout-wrapper">

                    @include('layouts/admin_partials/header')
                    @include('layouts/admin_partials/sidebar')
                    <!-- ============================================================== -->
                    <!-- Start right Content here -->
                    <!-- ============================================================== -->
                    <div class="main-content">
                        <div class="page-content">
                            <div class="container-fluid">
                                <!-- content -->
                                @yield('content')
                                @include('layouts/admin_partials/footer')
                            </div>
                            <!-- end main content-->
                        </div>
                        <!-- END layout-wrapper -->

                        @include('layouts/admin_partials/rightbar')
                    </div>
                </div>
            </div>

    </main>
    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('/assets/js/vendors.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendors/datatables/buttons.html5.min.js') }}"></script>

    {{-- <script src="{{ URL::asset('/assets/vendors/datatables/buttons.print.min.js') }}"></script> --}}
    <!-- footerScript -->
    <!-- App js -->
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
            ShowNotificator('error', '{{ session('error') }}');
        @endif
    </script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Blfrtip',
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, 'All']
                ],
                buttons: [{
                        extend: 'excelHtml5',
                        text: 'Excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV'
                    }
                ]
            });
        });
    </script>
</body>

</html>
