<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JUST CASE 24</title>

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
                    style="background-image:url('assets/images/others/sign-up-1.jpg')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div>
                            <img src="assets/images/logo/logo-white.png" alt="">
                        </div>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">Exploring Enlink</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Climb leg rub face on everything
                                give attitude nap all day for under the bed. Chase mice attack feet but rub face on
                                everything hopped up.</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© 2019 ThemeNate</span>
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
                                <h2>Sign Up</h2>
                                <p class="m-b-30">Create your account to get access</p>
                                <form action="{{ url('signup') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="userName">First Name:</label>
                                                <input type="text" class="form-control" id="fname" name="fname"
                                                    placeholder="First Name">
                                            </div>
                                            <p class="text-danger">{{ $errors->first('fname') }}</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="userName">Last Name:</label>
                                                <input type="text" class="form-control" name="lname" id="lname"
                                                    placeholder="Username">
                                            </div>
                                            <p class="text-danger">{{ $errors->first('lname') }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Id">
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="phone">Phone:</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Phone Number" name="phone">
                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password">
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="confirmPassword">Confirm
                                            Password:</label>
                                        <input type="password" class="form-control" name="confirmPassword"
                                            id="confirmPassword" placeholder="Confirm Password">
                                        <p class="text-danger">{{ $errors->first('confirmPassword') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="referral_code">Referral Code:</label>
                                        <input type="text" class="form-control form-control-plaintext" readonly value="{{Request::get("ref")}}" id="referral_code"
                                            name="referral_code" placeholder="Referral Code">
                                        <p class="text-danger">{{ $errors->first('referral_code') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between p-t-15">
                                            <div class="checkbox">
                                                <input id="checkbox" type="checkbox" name="agreement"
                                                    value="agreement">
                                                <label for="checkbox"><span>I have read the <a
                                                            href="#">agreement</a></span></label>
                                                <p class="text-danger">{{ $errors->first('agreement') }}</p>
                                            </div>

                                            <button class="btn btn-primary">Sign Up</button>
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

</html>
