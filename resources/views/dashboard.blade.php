@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Dashboard</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    @include('layouts.sidebar')
                    <h3>My Dashboard</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Status :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5 style="text-transform: capitalize">
                                       {{$tutor_details->status}}
                                    </h5>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Plan :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        {{$tutor_details->plan}}
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Wallet Balance :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Rs {{$tutor_details->wallet}}
                                    </h5>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Job Applied :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        {{$tutor_details->jobsApplied}}
                                    </h5>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Job Done :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        {{$tutor_details->jobsDone}}
                                    </h5>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
            <!-- /.shop-sidebar -->

        </div> <!-- /.row -->

    </section>


@endsection