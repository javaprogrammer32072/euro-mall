@extends('layouts.user')
@section('title')
    MY Team
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
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
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->userid }}</td>
                                        <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->position }}</td>
                                        <td>0</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
