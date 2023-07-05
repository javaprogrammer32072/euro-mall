@extends('layouts.app')
@section('title')
    Add Bonanza
@endsection

@section('content')
    <div class="page-container">
        <div class="main-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-header">

                            <h2 class="header-title">
                                <button class="btn btn-primary"
                                    onclick="location.href='{{ url('/administrator/bonanza/view') }}'">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                Add Bonanza
                            </h2>

                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="{{ url('/administrator/dashboard') }}" class="breadcrumb-item"><i
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
                        <form action="{{ route('add_bonanza') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer01">Left Business</label>
                                    <input type="text" class="form-control" name="left_business"
                                        placeholder="Left Business" value="0">
                                    <p class="text-danger">{{ $errors->first('left_business') }}</p>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer02">Right Business</label>
                                    <input type="text" class="form-control" name="right_business"
                                        placeholder="Right Business">
                                    <p class="text-danger">{{ $errors->first('right_business') }}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer01">Direct Business</label>
                                    <input type="text" class="form-control" name="direct_business"
                                        placeholder="Direct Business">
                                    <p class="text-danger">{{ $errors->first('direct_business') }}</p>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer02">Amount</label>
                                    <input type="text" class="form-control" name="amount" placeholder="Amount">
                                    <p class="text-danger">{{ $errors->first('amount') }}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer01">Count</label>
                                    <input type="text" class="form-control" name="count" placeholder="Count">
                                    <p class="text-danger">{{ $errors->first('count') }}</p>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer02">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Price">
                                    <p class="text-danger">{{ $errors->first('price') }}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer02">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="validationServer01">No of Direct Business</label>
                                    <input type="text" class="form-control" name="no_of_direct_business"
                                        placeholder="No of Direct Business">
                                    <p class="text-danger">{{ $errors->first('no_of_direct_business') }}</p>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col p-10">
                                    <div class="text-center">
                                        <!-- Add this div to center-align the button -->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
