@extends('layouts.app')
@section('title')
    Admin Dashboard
@endsection
@php
    use App\Models\Registration;
@endphp

@section('content')
    <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/my_teams') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                                        <i class="anticon anticon-dollar"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $My_team }}</h2>
                                        <p class="m-b-0 text-muted">My Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/my_referrals') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-line-chart"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $My_referral }}</h2>
                                        <p class="m-b-0 text-muted">My Referral</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/investments') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                                        <i class="fa fa-shopping-bag"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $Investment }}</h2>
                                        <p class="m-b-0 text-muted">Investment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/withdraws') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-purple">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $withdraw }}</h2>
                                        <p class="m-b-0 text-muted">Withdraw</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/view-rois') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-purple">
                                        <i class="fa fa-cubes "></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $ROI }}</h2>
                                        <p class="m-b-0 text-muted">ROI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/view-matchings') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                                        <i class="fa fa-hand-peace"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $Matching }}</h2>
                                        <p class="m-b-0 text-muted">Matching</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/administrator/view_adminbooster') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                                        <i class="fa fa-hand-peace"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $booster_income }}</h2>
                                        <p class="m-b-0 text-muted">Booster</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Content Wrapper END -->

        <!-- Modal -->
        <div class="modal" id="investModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog static">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Invest</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('administrator/invest-amount') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Invest Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" name="amount"
                                    placeholder="Amount">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Transaction Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script>
            $(document).ready(function() {
                // Copy Left Referral Code
                $("#leftButton").click(function() {
                    // Select the text to copy
                    var copyText = document.getElementById("leftReferral");
                    copyText.select();
                    copyText.setSelectionRange(0, 99999)
                    document.execCommand("copy");
                    alert("Left Referral Link Copied");
                });
                // Copy Left Referral Code
                $("#rightButton").click(function() {
                    // Select the text to copy
                    var copyText = document.getElementById("rightReferral");
                    copyText.select();
                    copyText.setSelectionRange(0, 99999)
                    document.execCommand("copy");
                    alert("Right Referral Link Copied");
                });
            });
        </script>
    @endsection
