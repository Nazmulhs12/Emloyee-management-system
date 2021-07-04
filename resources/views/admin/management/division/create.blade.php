@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ADD NEW DIVISION</h1>
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
                        <h3 class="card-title">NEW DIVISION PORTAL</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('division')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Division Name</label>
                                <input type="text" class="form-control" name="division_name" placeholder="Enter Division Name">
                            </div>
                            <div class="form-group">
                                <label>Division Code</label>
                                <input type="text" class="form-control" name="division_code" placeholder="Enter Division code">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save Division</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.container-fluid -->
        </section>
@endsection
