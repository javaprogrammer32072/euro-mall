
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/error-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 09:40:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Expired</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    {{-- <img src="assets/images/logo/logo.png" alt=""> --}}
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 m-h-auto">
                            <div class="text-center m-b-50">
                                <img class="img-fluid w-90" src="{{asset('assets/images/others/error-2.png')}}" alt="">
                                <h2 class="font-weight-light font-size-30 m-t-60 m-b-20">Link is not valid any more.</h2>
                                <p class="w-70 lh-1-8 m-h-auto font-size-17">Your Page has been expired!. Please Go Back and refresh your browser.</p>
                                <a href="{{URL::previous()}}" class="btn btn-primary btn-tone">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">© 2019 {{env('APP_NAME')}}</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/error-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 09:40:09 GMT -->
</html>