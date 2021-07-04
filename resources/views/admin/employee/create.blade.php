@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ADD NEW EMPLOYEE</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary offset-3 col-md-6">
                    <div class="card-header">
                        <h3 class="card-title">NEW EMPLOYEE PORTAL</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('employee')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Employee Name</label>
                                <input type="text" class="form-control" name="employee_name" placeholder="Enter Employee Name">
                            </div>
                            <div class="form-group">
                                <label>Country Name</label>
                                <select class="form-control" name="countries_name">
                                    <option>Please Select Your Country</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>State Name</label>
                                <select class="form-control" name="states_name">
                                    <option>Please Select Your State</option>
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->state_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City Name</label>
                                <select class="form-control" name="cities_name">
                                    <option>Please Select Your City</option>
                                    @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" class="form-control" name="zip_code" placeholder="Enter Zip Code">
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" class="form-control" name="birthday">
                            </div>
                            <div class="form-group">
                                <label>Join Date</label>
                                <input type="date" class="form-control" name="join_date">
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" name="departments_name">
                                    <option>Please Select Your Department</option>
                                    @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Division</label>
                                <select class="form-control" name="divisions_name">
                                    <option>Please Select Your Division</option>
                                    @foreach($divisions as $division)
                                    <option value="{{$division->id}}">{{$division->division_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save Department</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.container-fluid -->
        </section>
@endsection
