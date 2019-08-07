@extends('admin.admin-layout.app')
@section('title', 'User Dashboard ')
@section('content')
    <style>
        .widget-box-three .bg-icon {
            background-color: white;
            border: 1px solid #acaeb1;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item">
                            <a href="#">Zircos</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <br>
        <div style="margin-bottom: 10px;" class="row">


        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Teachers List</h4>


                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>


                            <tr>
                                <th>Id</th>
                                <th>Tutors Name</th>
                                <th>Phone</th>
                                <th>Date of Registration</th>
                                <th>Email</th>
                                <Th></Th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers_list as $teachers)
                                <tr>
                                    <th>{{$teachers->id}}
                                    </th>
                                    <td>
                                        <h5 class="m-0">{{$teachers->name}}</h5>
                                    </td>
                                    <td>+91{{$teachers->phone}}</td>
                                    <td>{{$teachers->created_at}}</td>
                                    <td>{{$teachers->email}}</td>

                                    <td><a href="teachers/{{$teachers->id}}">View Details</a></td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <br>

                    </div>
                   <!-- table-responsive -->
                </div> <!-- end card -->
            </div>

        </div>

        {{--<div class="col-xl-2 col-lg-4 col-sm-6">--}}
        {{--<div class="card-box widget-box-one">--}}
        {{--<i class="mdi mdi-account-convert widget-one-icon"></i>--}}
        {{--<div class="wigdet-one-content">--}}
        {{--<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">User Today</p>--}}
        {{--<h2>895 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>--}}
        {{--<p class="text-muted m-0"><b>Last:</b> 1250</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div><!-- end col -->--}}

        {{--<div class="col-xl-2 col-lg-4 col-sm-6">--}}
        {{--<div class="card-box widget-box-one">--}}
        {{--<i class="mdi mdi-layers widget-one-icon"></i>--}}
        {{--<div class="wigdet-one-content">--}}
        {{--<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">User This Month</p>--}}
        {{--<h2>52410 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>--}}
        {{--<p class="text-muted m-0"><b>Last:</b> 40.33k</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div><!-- end col -->--}}

        {{--<div class="col-xl-2 col-lg-4 col-sm-6">--}}
        {{--<div class="card-box widget-box-one">--}}
        {{--<i class="mdi mdi-av-timer widget-one-icon"></i>--}}
        {{--<div class="wigdet-one-content">--}}
        {{--<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Request Per Minute</p>--}}
        {{--<h2>652 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>--}}
        {{--<p class="text-muted m-0"><b>Last:</b> 956</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div><!-- end col -->--}}

        {{--<div class="col-xl-2 col-lg-4 col-sm-6">--}}
        {{--<div class="card-box widget-box-one">--}}
        {{--<i class="mdi mdi-account-multiple widget-one-icon"></i>--}}
        {{--<div class="wigdet-one-content">--}}
        {{--<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Total Users">Total Users</p>--}}
        {{--<h2>3245 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>--}}
        {{--<p class="text-muted m-0"><b>Last:</b> 20k</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div><!-- end col -->--}}

        {{--<div class="col-xl-2 col-lg-4 col-sm-6">--}}
        {{--<div class="card-box widget-box-one">--}}
        {{--<i class="mdi mdi-download widget-one-icon"></i>--}}
        {{--<div class="wigdet-one-content">--}}
        {{--<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="New Downloads">New Downloads</p>--}}
        {{--<h2>78541 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>--}}
        {{--<p class="text-muted m-0"><b>Last:</b> 50k</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div><!-- end col -->--}}

    </div>
    <!-- end row -->






@endsection
