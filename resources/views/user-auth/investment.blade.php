@extends('layouts.user')
@section('title')
    MY Investment
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-header">
                            <h2 class="header-title">My Investment </h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="{{ url('/empanel/dashboard') }}" class="breadcrumb-item"><i
                                            class="anticon anticon-home m-r-5"></i>Home</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        {{-- <a href=""><button type="button" class="btn btn-primary text-end">Add</button></a> --}}
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table id="" class="data-table display table-sm" style="width:100%">
                            <div class="row">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>USERID</th>
                                        <th>AMOUNT</th>
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

        <script type="text/javascript">
            $(function() {
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('investment') }}",
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
                    ], // Default order by the 'userid' column

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
    {{-- 
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('investment') }}",
                    dataSrc: 'data'
                },
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
                ] // Default order by the 'userid' column

            });
        });
    </script> --}}