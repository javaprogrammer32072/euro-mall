<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/EURO-MALL-bs/dist/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 09:39:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EURO-MALLL - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>

    <h1>Forget Password Email</h1>

    You can reset password from bellow link:
    <a href="{{ route('reset.password.get', $token) }}">Reset Password</a>
</body>

</html>