@extends('layouts.user')
@section('title')
    User Dashboard
@endsection

@section('content')
    <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="input-affix m-b-10">
                        <label class="mt-2">Left&nbsp;Referral&nbsp;Link:&nbsp;</label>
                        <input type="text" class="form-control form-control-sm bg-light " style="border: 2px solid #3f87f5;" readonly value="{{url("/signup")}}">
                        <i class="suffix-icon anticon anticon-copy fa-lg"></i>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="input-affix m-b-10">
                        <label class="mt-2">Right&nbsp;Referral&nbsp;Link:&nbsp;</label>
                        <input type="text" class="form-control form-control-sm bg-light " style="border: 2px solid #3f87f5;" readonly value="{{url("/signup")}}">
                        <i class="suffix-icon anticon anticon-copy fa-lg"></i>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group m-b-10">
                        <button class="btn btn-danger btn-sm  float-right">In Active</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-blue">
                                    <i class="anticon anticon-dollar"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">$23,523</h2>
                                    <p class="m-b-0 text-muted">Profit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                    <i class="anticon anticon-line-chart"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">+ 17.21%</h2>
                                    <p class="m-b-0 text-muted">Growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-gold">
                                    <i class="anticon anticon-profile"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">3,685</h2>
                                    <p class="m-b-0 text-muted">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-purple">
                                    <i class="anticon anticon-user"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">1,832</h2>
                                    <p class="m-b-0 text-muted">Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Content Wrapper END -->
    @endsection
    
    @section("scripts")
    <script>
        // Copy Referral Code Functionality 
    </script>
    @endsection