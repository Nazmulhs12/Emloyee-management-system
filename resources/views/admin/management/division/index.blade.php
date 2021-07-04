@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">DIVISION MANAGEMENT</h1>
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
                        <h3 class="card-title">LIST OF DIVISIONS</h3>
                        <a href="{{url('division/create')}}" class="btn btn-primary float-right">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Add new Division
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Division Name</th>
                                <th>Division Code</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($divisions as $division)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$division->division_name}}</td>
                                <td>{{$division->division_code}}</td>
                                <td>
                                    <a href="{{url('division/' .$division->id. '/edit')}}" class="btn btn-primary">
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
