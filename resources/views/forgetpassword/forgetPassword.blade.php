<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Euro Malls</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Lexa Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/logo/favicon.png') }}">
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
</head>

<div class="app">
    <div class="container-fluid p-0 h-100">
        <div class="row no-gutters h-100 full-height">
            <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url('assets/images/others/login-1.jpg')">
                <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                    <div>
                        <img src="assets/images/logo/logo-white.png" alt="">
                    </div>
                    <div>
                        <h1 class="text-white m-b-20 font-weight-normal">Exploring Euro Malls</h1>
                        <p class="text-white font-size-16 lh-2 w-80 opacity-08">Climb leg rub face on everything give
                            attitude nap all day for under the bed. Chase mice attack feet but rub face on everything
                            hopped up.</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-white">© 2023 Euro Malls</span>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-white text-link" href="#">Legal</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-white text-link" href="#">Privacy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 bg-white">
                <div class="container h-100">
                    <div class="row no-gutters h-100 align-items-center">
                        <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                            <h2>Reset Password</h2>
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Success: </strong>{{ session()->get('success') }}
                                </div>
                                <br>
                            @endif

                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Oh snap! </strong>{{ session()->get('error') }}
                                </div>
                            @endif
                            <p class="m-b-30">Enter your Email to get Reset Password</p>

                            <form action="{{ route('forget.password.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="userName">Email Address:</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="font-size-13 text-muted">
                                            <a class="small" href="{{ route('signin') }}">Login Here</a>
                                        </span>
                                        <button class="btn btn-primary">Send Password Reset Link</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Vendors JS -->
<script src="assets/js/vendors.min.js"></script>

<!-- page js -->

<!-- Core JS -->
<script src="assets/js/app.min.js"></script>

</html>
