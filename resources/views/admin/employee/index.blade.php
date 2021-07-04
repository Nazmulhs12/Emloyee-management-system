@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">EMPLOYEE MANAGEMENT</h1>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">LIST OF EMPLOYEES</h3>
                        <a href="{{url('employee/create')}}" class="btn btn-primary float-right">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Add new Employee
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Employee</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Zip Code</th>
                                <th>DoB</th>
                                <th>Join Date</th>
                                <th>Department</th>
                                <th>Division</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$employee->employee_name}}</td>
                                    <td>{{$employee->countries->country_name}}</td>
                                    <td>{{$employee->states->state_name}}</td>
                                    <td>{{$employee->cities->city_name}}</td>
                                    <td>{{$employee->zip_code}}</td>
                                    <td>{{$employee->birthday}}</td>
                                    <td>{{$employee->join_date}}</td>
                                    <td>{{$employee->departments->department_name}}</td>
                                    <td>{{$employee->divisions->division_name}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
@endsection
