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
                                        Name :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5 style="text-transform: capitalize">
                                        {{$details[0]->name}}
                                    </h5>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Email :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        {{$details[0]->email}}
                                    </h5>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Qualification :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        {{$details[1]->qualification}}
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
                                        Uploads :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                         {{$tutor_details->wallet}}
                                    </h5>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Member Since :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        {{$details[0]->created_at}}
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