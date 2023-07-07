<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/Euro Malls-bs/dist/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 09:39:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Euro Malls - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-4 d-none d-lg-flex bg"
                    style="background-image:url('assets/images/others/login-1.jpg')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div>
                            <img src="assets/images/logo/logo-white.png" alt="">
                        </div>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">Exploring Euro Malls</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Climb leg rub face on everything
                                give attitude nap all day for under the bed. Chase mice attack feet but rub face on
                                everything hopped up.</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© 2023 </span>
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
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Success: </strong>{{ session()->get('success') }}
                                    </div>
                                    <br>
                                @endif
                                <h2>Sign In</h2>
                                <p class="m-b-30">Enter your credential to get access</p>
                                @if (session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Oh snap! </strong>{{ session()->get('error') }}
                                    </div>
                                @endif
                                <form method="POST" class="form-horizontal mt-4"
                                    action="{{ route('dashboardlogin') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Userid:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text"
                                                class="form-control  @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" name="user_id" id="userName"
                                                placeholder="Userid" required autocomplete="User_id" autofocus
                                                placeholder="User_id">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        <a class="float-right font-size-13 text-muted"
                                            href="{{ route('forget.password.get') }}">Forget
                                            Password?</a>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="font-size-13 text-muted">
                                                Don't have an account?
                                                <a class="small" href="{{ route('signup') }}"> Signup</a>
                                            </span>
                                            <button class="btn btn-primary">Sign In</button>
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

</body>


<!-- Mirrored from www.themenate.net/Euro Malls-bs/dist/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 09:39:36 GMT -->

</html>
