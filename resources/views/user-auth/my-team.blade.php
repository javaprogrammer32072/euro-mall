@extends('layouts.user')
@section('title')
    MY Team
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-header">
                            <h2 class="header-title">My Team </h2>
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
                                        <th>NAME</th>
                                        <th>PHONE</th>
                                        <th>POSITION</th>
                                        <th>TOTAL INVESTMENT</th>
                                        <th>STATUS</th>
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
                        url: "{{ route('my_team') }}",
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
                            data: 'userid',
                            name: 'userid'
                        },
                        {
                            data: 'full_name',
                            name: 'first_name',
                            name: 'last_name',
                            render: function(data, type, row) {
                                return row.first_name + ' ' + row.last_name;
                            }
                        },
                        {
                            data: 'phone',
                            name: 'phone'
                        },
                        {
                            data: 'position',
                            name: 'position'
                        },
                        {
                            data: 'total_investment',
                            name: '',
                            searchable: false,
                            orderable: false,
                            render: function(data, type, row) {
                                return data ? data : '0';
                            }
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
