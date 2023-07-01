@extends('layouts.user')
@section('title')
    User Dashboard
@endsection
@php
    use App\Models\Registration;
@endphp

@section('content')
    <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="input-affix m-b-10">
                        <label class="mt-2">Left&nbsp;Referral&nbsp;Link:&nbsp;</label>
                        <input type="text" class="form-control form-control-sm bg-light" id="leftReferral"
                            style="border: 2px solid #3f87f5;" readonly
                            value="{{ url('/signup?ref=' . $user->referral_left) }}">
                        <i class="suffix-icon anticon anticon-copy fa-lg" id="leftButton"></i>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="input-affix m-b-10">
                        <label class="mt-2">Right&nbsp;Referral&nbsp;Link:&nbsp;</label>
                        <input type="text" class="form-control form-control-sm bg-light "
                            style="border: 2px solid #3f87f5;" id="rightReferral" readonly
                            value="{{ url('/signup?ref=' . $user->referral_right) }}">
                        <i class="suffix-icon anticon anticon-copy fa-lg" id="rightButton"></i>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group m-b-10">
                        @if ($user->status == 0)
                            <button class="btn btn-danger btn-sm  float-right" data-toggle="modal"
                                data-target="#investModel">In
                                Active</button>
                        @else
                            <button class="btn btn-success btn-sm  float-right">Active</button>
                        @endif
                    </div>
                </div>
            </div>
            {{-- @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success: </strong>{{ session()->get('success') }}
                </div>
                <br>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Oh snap! </strong>{{ session()->get('error') }}
                </div>
            @endif --}}
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/empanel/my_team') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                                        <i class="anticon anticon-dollar"></i>
                                    </div>
                                    @php
                                        
                                        $user = Session::get('user');
                                        $userReferral = Registration::where('userid', $user['userid'])->first();
                                        $searchValue = $userReferral['id'];
                                        $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
                                            ->whereRaw('FIND_IN_SET("' . $searchValue . '",parent_id)')
                                            ->get();
                                        
                                        $totalRecords = count($data);
                                    @endphp

                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $totalRecords }}</h2>
                                        <p class="m-b-0 text-muted">My Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/empanel/my_referral') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-line-chart"></i>
                                    </div>
                                    @php
                                        $user = Session::get('user');
                                        $userreferral = Registration::where('userid', $user['userid'])->first();
                                        $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
                                            ->orWhere('referral_code', $userreferral['referral_right'])
                                            ->orWhere('referral_code', $userreferral['referral_left'])
                                            ->get();
                                        $totalRecords = count($data);
                                    @endphp
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $totalRecords }}</h2>
                                        <p class="m-b-0 text-muted">My Referral</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/empanel/investment') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                                        <i class="anticon anticon-profile"></i>
                                    </div>
                                    @php
                                        $user = Session::get('user');
                                        $userreferral = Registration::where('userid', $user['userid'])->first();
                                        $data = DB::table('investment')
                                            ->where('user_id', $userreferral->userid)
                                            ->get();
                                        $totalAmount = $data->sum('amount');
                                    @endphp

                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $totalAmount }}</h2>
                                        <p class="m-b-0 text-muted">Investment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('/empanel/withdraw') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-purple">
                                        <i class="anticon anticon-user"></i>
                                    </div>
                                    @php
                                        $user = Session::get('user');
                                        $userreferral = Registration::where('userid', $user['userid'])->first();
                                        $data = DB::table('withdraw')
                                            ->where('user_id', $userreferral->userid)
                                            ->get();
                                        $totalAmount = $data->sum('amount');
                                    @endphp

                                    <div class="m-l-15">
                                        <h2 class="m-b-0">{{ $totalAmount }}</h2>
                                        <p class="m-b-0 text-muted">Withdraw</p>
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
                        <form action="{{ url('empanel/invest-amount') }}" method="POST">
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
