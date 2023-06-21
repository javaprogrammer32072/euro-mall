@extends('layouts.user')
@section('title')
    Edit Profile
@endsection
@section('content')
    <!-- Page Container START -->
    <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content">
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
                                <h4 class="card-title">Basic Infomation</h4>
                            </div>
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Oh snap! </strong>{{ session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{ route('edit_profilepost') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    {{-- <div class="media align-items-center">
                                        <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="m-l-20 m-r-20">
                                            <h5 class="m-b-5 font-size-18">Change Avatar</h5>
                                            <p class="opacity-07 font-size-13 m-b-0">
                                                Recommended Dimensions: <br>
                                                120x120 Max fil size: 5MB
                                            </p>
                                        </div>
                                        <div>
                                            <button class="btn btn-tone btn-primary">Upload</button>
                                        </div>
                                    </div> --}}
                                    {{-- <hr class="m-v-25"> --}}

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-semibold" for="userName">First Name:</label>
                                            <input type="hidden" class="form-control" id="userName" name="user_id"
                                                value="{{ $editprofile->userid }}">
                                            <input type="text" class="form-control" id="userName"
                                                placeholder="User Name" name="fname"
                                                value="{{ $editprofile->first_name }}">
                                            <p class="text-danger">{{ $errors->first('fname') }}</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-semibold" for="email">Last Name:</label>
                                            <input type="text" class="form-control" name="lname" id="email"
                                                placeholder="Last Name" value="{{ $editprofile->last_name }}">
                                            <p class="text-danger">{{ $errors->first('lname') }}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="email" value="{{ $editprofile->email }}">
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-semibold" for="phoneNumber">Phone
                                                Number:</label>
                                            <input type="text" class="form-control" name="phone" id="phoneNumber"
                                                value="{{ $editprofile->phone }}" placeholder="Phone Number">
                                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
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

        <!-- Page Container END -->
    @endsection
