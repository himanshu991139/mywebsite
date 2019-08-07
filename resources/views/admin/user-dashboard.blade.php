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

            <div class="col-md-12">
                <button type="button" class="btn btn-secondary btn-rounded w-md waves-effect m-b-5">+ Add Teachers
                </button>
            </div>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Teachers</h4>


                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>


                            <tr>
                                <th>Id</th>
                                <th>Student Name</th>
                                <th>Phone</th>
                                <th>Date of Registration</th>
                                <th>Email</th>
                                <Th></Th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($details[0] as $tutors)
                                <tr>
                                    <th>{{$tutors->id}}
                                    </th>
                                    <td>
                                        <h5 class="m-0">{{$tutors->name}}</h5>
                                    </td>
                                    <td>+91{{$tutors->phone}}</td>
                                    <td>{{$tutors->created_at}}</td>
                                    <td>{{$tutors->email}}</td>

                                    <td><a href="dashboard/teachers/{{$tutors->id}}">View Details</a></td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <br>

                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-purple btn-rounded w-md waves-effect m-b-5">View All
                            Teachers
                        </button>
                    </div> <!-- table-responsive -->
                </div> <!-- end card -->
            </div>
            <div class="col-xl-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Students Enquiry</h4>

                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>


                            <tr>
                                <th>Id</th>
                                <th>Student Name</th>
                                <th>Phone</th>
                                <th>Requirement</th>
                                <th>Email</th>
                                <Th></Th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($details[1] as $student)
                                <tr>
                                    <th>{{$student->id}}
                                    </th>
                                    <td>
                                        <h5 class="m-0">{{$student->name}}</h5>
                                    </td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->tuition_type}}</td>
                                    <td>{{$student->email}}</td>

                                    <td><a href="dashboard/students/{{$student->id}}">View Details</a></td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                    <br>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-purple btn-rounded w-md waves-effect m-b-5">View Students Query
                        </button>
                    </div><!-- table-responsive -->
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


    {{--<div class="row">--}}
    {{--<div class="col-xl-4">--}}
    {{--<div class="card-box">--}}

    {{--<h4 class="header-title m-t-0">Daily Sales</h4>--}}

    {{--<div class="widget-chart text-center">--}}
    {{--<div id="morris-donut-example" class="morris-charts" style="height: 245px;"><svg height="245" version="1.1" width="388" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.15625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3ac9d6" d="M194,197.5A75,75,0,0,0,265.03058844420985,146.57603591269296" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3ac9d6" stroke="#ffffff" d="M194,200.5A78,78,0,0,0,267.8718119819782,147.53907734920068L295.81051010336745,157.00898480819325A107.5,107.5,0,0,1,194,230Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f5707a" d="M265.03058844420985,146.57603591269296A75,75,0,0,0,126.7429080941063,89.31139369659871" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#f5707a" stroke="#ffffff" d="M267.8718119819782,147.53907734920068A78,78,0,0,0,124.05262441787056,87.98384944446265L97.59816826821904,74.92966429845814A107.5,107.5,0,0,1,295.81051010336745,157.00898480819325Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#4bd396" d="M126.7429080941063,89.31139369659871A75,75,0,0,0,193.9764380554856,197.4999962988984" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#4bd396" stroke="#ffffff" d="M124.05262441787056,87.98384944446265A78,78,0,0,0,193.97549557770503,200.49999615085432L193.9646570832284,234.9999944483476A112.5,112.5,0,0,1,93.11436214115946,72.71709054489806Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="194" y="112.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.228,0,0,1.228,-44.2263,-27.8124)" stroke-width="0.8143518518518519"><tspan dy="6.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mail-Order Sales</tspan></text><text x="194" y="132.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.3889,0,0,1.3889,-75.4444,-48.0278)" stroke-width="0.72"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text></svg></div>--}}
    {{--<ul class="list-inline chart-detail-list m-b-0">--}}
    {{--<li class="list-inline-item">--}}
    {{--<h5 class="text-danger"><i class="fa fa-circle m-r-5"></i>Series A</h5>--}}
    {{--</li>--}}
    {{--<li class="list-inline-item">--}}
    {{--<h5 class="text-success"><i class="fa fa-circle m-r-5"></i>Series B</h5>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- end col -->--}}

    {{--<div class="col-xl-4">--}}
    {{--<div class="card-box">--}}

    {{--<h4 class="header-title m-t-0">Statistics</h4>--}}
    {{--<div id="morris-bar-example" class="text-center morris-charts" style="height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="388" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.484375px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="38.15625" y="239" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">0k</tspan></text><path fill="none" stroke="#eeeeee" d="M50.65625,239H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="185.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">25k</tspan></text><path fill="none" stroke="#eeeeee" d="M50.65625,185.5H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="132" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">50k</tspan></text><path fill="none" stroke="#eeeeee" d="M50.65625,132H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="78.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">75k</tspan></text><path fill="none" stroke="#eeeeee" d="M50.65625,78.5H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">100k</tspan></text><path fill="none" stroke="#eeeeee" d="M50.65625,25H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="331.765625" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">05/16</tspan></text><text x="206.828125" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">03/16</tspan></text><text x="81.890625" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">01/16</tspan></text><rect x="75.64375" y="149.12" width="12.49375" height="89.88" rx="0" ry="0" fill="#3bafda" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="138.1125" y="78.5" width="12.49375" height="160.5" rx="0" ry="0" fill="#3bafda" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="200.58125" y="157.68" width="12.49375" height="81.32" rx="0" ry="0" fill="#3bafda" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="263.05" y="198.34" width="12.49375" height="40.66" rx="0" ry="0" fill="#3bafda" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="325.51875" y="39.97999999999999" width="12.49375" height="199.02" rx="0" ry="0" fill="#3bafda" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>--}}
    {{--</div>--}}
    {{--</div><!-- end col -->--}}

    {{--<div class="col-xl-4">--}}
    {{--<div class="card-box">--}}

    {{--<h4 class="header-title m-t-0">Total Revenue</h4>--}}
    {{--<div id="morris-line-example" class="text-center morris-charts" style="height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="388" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.8125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="38.15625" y="239" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">0k</tspan></text><path fill="none" stroke="#eef0f2" d="M50.65625,239H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="185.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">25k</tspan></text><path fill="none" stroke="#eef0f2" d="M50.65625,185.5H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="132" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">50k</tspan></text><path fill="none" stroke="#eef0f2" d="M50.65625,132H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="78.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">75k</tspan></text><path fill="none" stroke="#eef0f2" d="M50.65625,78.5H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="38.15625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">100k</tspan></text><path fill="none" stroke="#eef0f2" d="M50.65625,25H363" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="363" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">2015</tspan></text><text x="273.82872995698085" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">2013</tspan></text><text x="184.5353074892452" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">2011</tspan></text><text x="95.36403744622605" y="251.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">2009</tspan></text><path fill="none" stroke="#188ae2" d="M50.65625,239C61.833196861556516,212.25,84.18709058466953,153.4292749658003,95.36403744622605,132C106.51044620160344,110.62927496580028,128.80326371235824,67.79999999999998,139.94967246773564,67.79999999999998C151.09608122311303,67.79999999999998,173.38889873386782,113.275,184.5353074892452,132C195.6817162446226,150.725,217.9745337553774,214.92865937072503,229.1209425107548,217.6C240.29788937231132,220.27865937072502,262.6517830954243,164.11463748290012,273.82872995698085,153.39999999999998C284.9751387123582,142.71463748290012,307.26795622311306,140.025,318.4143649784904,132C329.5607737338678,123.975,351.85359124462263,99.89999999999999,363,89.19999999999999" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#10c469" d="M50.65625,132C61.833196861556516,118.625,84.18709058466953,73.14268125854993,95.36403744622605,78.5C106.51044620160344,83.84268125854993,128.80326371235824,168.1125,139.94967246773564,174.8C151.09608122311303,181.4875,173.38889873386782,144.0375,184.5353074892452,132C195.6817162446226,119.9625,217.9745337553774,78.5,229.1209425107548,78.5C240.29788937231132,78.5,262.6517830954243,132,273.82872995698085,132C284.9751387123582,132,307.26795622311306,91.875,318.4143649784904,78.5C329.5607737338678,65.125,351.85359124462263,38.375,363,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="50.65625" cy="239" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="95.36403744622605" cy="132" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="139.94967246773564" cy="67.79999999999998" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="184.5353074892452" cy="132" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="229.1209425107548" cy="217.6" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.82872995698085" cy="153.39999999999998" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="318.4143649784904" cy="132" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="363" cy="89.19999999999999" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="50.65625" cy="132" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="95.36403744622605" cy="78.5" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="139.94967246773564" cy="174.8" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="184.5353074892452" cy="132" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="229.1209425107548" cy="78.5" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.82872995698085" cy="132" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="318.4143649784904" cy="78.5" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="363" cy="25" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>--}}
    {{--</div>--}}
    {{--</div><!-- end col -->--}}

    {{--</div>--}}
    {{--<!-- end row -->--}}


    {{--<div class="row">--}}
    {{--<div class="col-xl-6">--}}
    {{--<div class="card-box">--}}
    {{--<h4 class="header-title m-t-0 m-b-30">Recent Users</h4>--}}

    {{--<div class="table-responsive">--}}
    {{--<table class="table table-hover table-centered m-0">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th></th>--}}
    {{--<th>User Name</th>--}}
    {{--<th>Phone</th>--}}
    {{--<th>Location</th>--}}
    {{--<th>Date</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<th>--}}
    {{--<img src="assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm rounded-circle">--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Louis Hansen</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
    {{--</td>--}}
    {{--<td>+12 3456 789</td>--}}
    {{--<td>USA</td>--}}
    {{--<td>07/08/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<img src="assets/images/users/avatar-2.jpg" alt="user" class="thumb-sm rounded-circle">--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Craig Hause</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Programmer</small></p>--}}
    {{--</td>--}}
    {{--<td>+89 345 6789</td>--}}
    {{--<td>Canada</td>--}}
    {{--<td>29/07/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<img src="assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm rounded-circle">--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Edward Grimes</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Founder</small></p>--}}
    {{--</td>--}}
    {{--<td>+12 29856 256</td>--}}
    {{--<td>Brazil</td>--}}
    {{--<td>22/07/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<img src="assets/images/users/avatar-4.jpg" alt="user" class="thumb-sm rounded-circle">--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Bret Weaver</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
    {{--</td>--}}
    {{--<td>+00 567 890</td>--}}
    {{--<td>USA</td>--}}
    {{--<td>20/07/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<img src="assets/images/users/avatar-5.jpg" alt="user" class="thumb-sm rounded-circle">--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Mark</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Web design</small></p>--}}
    {{--</td>--}}
    {{--<td>+91 123 456</td>--}}
    {{--<td>India</td>--}}
    {{--<td>07/07/2016</td>--}}
    {{--</tr>--}}

    {{--</tbody>--}}
    {{--</table>--}}

    {{--</div> <!-- table-responsive -->--}}
    {{--</div> <!-- end card -->--}}
    {{--</div>--}}
    {{--<!-- end col -->--}}

    {{--<div class="col-xl-6">--}}
    {{--<div class="card-box">--}}
    {{--<h4 class="header-title m-t-0 m-b-30">Recent Users</h4>--}}

    {{--<div class="table-responsive">--}}
    {{--<table class="table table-hover table-centered m-0">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th></th>--}}
    {{--<th>User Name</th>--}}
    {{--<th>Phone</th>--}}
    {{--<th>Location</th>--}}
    {{--<th>Date</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<th>--}}
    {{--<span class="avatar-sm-box bg-success">L</span>--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Louis Hansen</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
    {{--</td>--}}
    {{--<td>+12 3456 789</td>--}}
    {{--<td>USA</td>--}}
    {{--<td>07/08/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<span class="avatar-sm-box bg-primary">C</span>--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Craig Hause</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Programmer</small></p>--}}
    {{--</td>--}}
    {{--<td>+89 345 6789</td>--}}
    {{--<td>Canada</td>--}}
    {{--<td>29/07/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<span class="avatar-sm-box bg-brown">E</span>--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Edward Grimes</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Founder</small></p>--}}
    {{--</td>--}}
    {{--<td>+12 29856 256</td>--}}
    {{--<td>Brazil</td>--}}
    {{--<td>22/07/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<span class="avatar-sm-box bg-pink">B</span>--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Bret Weaver</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
    {{--</td>--}}
    {{--<td>+00 567 890</td>--}}
    {{--<td>USA</td>--}}
    {{--<td>20/07/2016</td>--}}
    {{--</tr>--}}

    {{--<tr>--}}
    {{--<th>--}}
    {{--<span class="avatar-sm-box bg-orange">M</span>--}}
    {{--</th>--}}
    {{--<td>--}}
    {{--<h5 class="m-0">Mark</h5>--}}
    {{--<p class="m-0 text-muted font-13"><small>Web design</small></p>--}}
    {{--</td>--}}
    {{--<td>+91 123 456</td>--}}
    {{--<td>India</td>--}}
    {{--<td>07/07/2016</td>--}}
    {{--</tr>--}}

    {{--</tbody>--}}
    {{--</table>--}}

    {{--</div> <!-- table-responsive -->--}}
    {{--</div> <!-- end card -->--}}
    {{--</div>--}}
    {{--<!-- end col -->--}}

    {{--</div>--}}
    {{--<!-- end row -->--}}

    </div>




@endsection
