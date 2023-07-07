@extends('layouts.app')
@section('title')
    MY Bonanza
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
                            <h2 class="header-title">My Bonanza </h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="{{ url('/administrator/dashboard') }}" class="breadcrumb-item"><i
                                            class="anticon anticon-home m-r-5"></i>Home</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary"
                            onclick="location.href='{{ url('/administrator/bonanza/create') }}'">Add Bonanza</button>
                    </div>

                </div>
            </div>

            <div class="container">
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
                        <div class="m-t-10">
                            <div class="table-responsive">
                                <table id="data-table" class="data-table display table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>LEFT BUSS</th>
                                            <th>RIGHT BUSS</th>
                                            <th>DIRECT BUSS</th>
                                            <th>AMOUNT</th>
                                            <th>COUNT</th>
                                            <th>PRICE</th>
                                            <th>DESCRIPTION</th>
                                            <th>NO OF DIRECT BUSSINESS</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(function() {
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('view_bonanza') }}",
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
                            data: 'left_business',
                            name: 'left_business'
                        },
                        {
                            data: 'right_business',
                            name: 'right_business'
                        },
                        {
                            data: 'direct_business',
                            name: 'direct_business'
                        },
                        {
                            data: 'amount',
                            name: 'amount'
                        },
                        {
                            data: 'count',
                            name: 'count'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'no_of_direct_business',
                            name: 'no_of_direct_business'
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
                            render: function(data, type, row) {
                                if (type === 'display' || type === 'filter') {
                                    var date = new Date(data);
                                    var day = ('0' + date.getDate()).slice(-2);
                                    var month = ('0' + (date.getMonth() + 1)).slice(-2);
                                    var year = date.getFullYear();
                                    var formattedDate = day + '-' + month + '-' + year;
                                    return formattedDate;
                                }

                                return data;
                            },
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
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
