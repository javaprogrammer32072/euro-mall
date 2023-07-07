<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Euro Malls - Admin Dashboard Template</title>

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
