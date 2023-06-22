@extends('layouts.user')
@section('title')
    Transaction Password
@endsection
@section('content')
    @php
        $user = Session::get('user');
    @endphp

    <!-- Page Container START -->
    <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content col-md-10 m-auto">
            <div class="container">
                <div class="tab-content m-t-15">
                    <div class="tab-pane fade show active" id="tab-account">
                        <div class="card">
                            <div class="card-header">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Success: </strong>{{ session()->get('success') }}
                                    </div>
                                    <br>
                                @endif
                                <h4 class="card-title">Transaction Password</h4>
                            </div>
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Oh snap! </strong>{{ session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{ route('transaction_passwords') }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-8 center">
                                            <label class="font-weight-semibold" for="userName">User ID:</label>
                                            <input type="hidden" class="form-control" id="userName" name="email"
                                                value="{{ $user['email'] }}">
                                            <input type="text" class="form-control" id="userName" placeholder="User ID"
                                                name="user_id" value="{{ $user['userid'] }}" readonly>
                                            <p class="text-danger">{{ $errors->first('user_id') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 m-auto">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-fill">Save</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Wrapper END -->
    @endsection
