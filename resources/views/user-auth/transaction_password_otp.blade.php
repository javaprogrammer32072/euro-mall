@extends('layouts.user')
@section('title')
    Transaction Password OTP
@endsection
@section('content')
    <div class="app">
        <div class="page-container">
            <div class="container-fluid p-0 h-100">
                <div class="row no-gutters h-100 full-height">
                    <div class="col-lg-12 col-md-12 col-sm-12 bg-white">
                        <div class="container h-100">
                            <div class="row no-gutters h-100 align-items-center">
                                <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Oh snap! </strong>{{ session()->get('error') }}
                                        </div>
                                    @endif
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Success: </strong>{{ session()->get('success') }}
                                        </div>
                                        <br>
                                    @endif
                                    <h2>Transaction Password Change</h2>
                                    <p class="m-b-30">Enter your Transaction Password to Change Transaction Password</p>

                                    <form action="{{ route('transaction_password_check') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="userName">Enter OTP:</label>
                                                <input type="text" id="otp" class="form-control" name="otp"
                                                    required autofocus>
                                                <p class="text-danger">{{ $errors->first('otp') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="userName">Password:</label>
                                                <input type="password" id="password" class="form-control" name="password"
                                                    required autofocus>
                                                <p class="text-danger">{{ $errors->first('password') }}</p>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="userName">Confirm Password:</label>
                                                <input type="password" id="password-confirm" class="form-control"
                                                    name="password_confirmation" required autofocus>
                                                <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
