@extends('layouts.user')
@section('title')
    MY Referral
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        {{-- <table id="example" class="display" style="width:100%">
                             --}}
                        <table class="data-table display" style="width:100%">
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
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('my_referral') }}",
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        },
                        name: 's.no'
                    },
                    {
                        data: 'userid',
                        name: 'userid'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return data.first_name + ' ' + data.last_name;
                        },
                        name: 'name'
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
                        data: null,
                        render: function(data, type, row) {
                            return '0';
                        },
                        name: 'total_investment'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: true,
                        searchable: true,
                    }
                ],

            });
        });
    </script> --}}
    <!-- Make sure you have included the necessary DataTables and jQuery scripts -->

    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('my_referral') }}",
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
                        orderable: false,
                        render: function(data, type, row) {
                            return data ? data : '0';
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: true,
                        searchable: true
                    }
                ],
                order: [
                    [1, 'asc']
                ] // Default order by the 'userid' column
            });
        });
    </script>
