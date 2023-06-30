@extends('layouts.user')
@section('title')
    MY Withdraw
@endsection
@php
    $user = Session::get('user');
@endphp
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-header">
                            <h2 class="header-title">My Withdraw </h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="{{ url('/empanel/dashboard') }}" class="breadcrumb-item"><i
                                            class="anticon anticon-home m-r-5"></i>Home</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Success: </strong>{{ session()->get('success') }}
                        </div>
                        <br>
                    @endif
                    <table id="" class="data-table display table-sm" style="width:100%">
                        <div class="row">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>USERID</th>
                                    <th>AMOUNT</th>
                                    <th>TRANS CHARGE</th>
                                    <th>REMARKS</th>
                                    <th>STATUS</th>
                                    <th>DATE</th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Withdraw Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add_withdraw') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Amount</label>
                            <input type="text" class="form-control" name="amount" id="formGroupExampleInput"
                                placeholder="Amount" required>
                            <input type="hidden" class="form-control" name="user_id" value="{{ $user['userid'] }}"
                                id="formGroupExampleInput" required>
                            <p class="text-danger">{{ $errors->first('amount') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">Remarks</label>
                            <input type="text" class="form-control" name="remarks" id="formGroupExampleInput2"
                                placeholder="Remarks" required>
                            <p class="text-danger">{{ $errors->first('remarks') }}</p>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('withdraw') }}",
                    dataSrc: 'data'
                },
                dom: 'Blfrtip',
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        },
                        name: 'id',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'trans_charge',
                        name: 'trans_charge'
                    },
                    {
                        data: 'remarks',
                        name: 'remarks'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row, meta) {
                            if (data == 1) {
                                return '<span style="color: green;">Active</span>';
                            } else if (data == 0) {
                                return '<span style="color: red;">Deactivate</span>';
                            } else {
                                return '';
                            }
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        orderable: true,
                        searchable: true
                    }
                ],
                order: [
                    [1, 'asc']
                ],
                buttons: [{
                        extend: 'excelHtml5',
                        text: 'Excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV'
                    }
                ]

            });
        });
    </script>
    <script>
        document.getElementById('formGroupExampleInput').addEventListener('input', function(event) {
            // Remove any non-numeric characters from the input value
            event.target.value = event.target.value.replace(/[^0-9]/g, '');
        });
    </script>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
