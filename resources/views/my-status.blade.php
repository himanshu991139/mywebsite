@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Status</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>My Status</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    @include('layouts.sidebar')
                    <h3>My Status</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">

                        <h3 style="text-align: center">Your Status is <span
                                    style="background: #15ff4b; color: white; padding: 10px">pending</span></h3>
                        <br>
                        <br>
                        <h5 style="text-align: center">check your status in 24hr <a href="/account/">Go To Dashboard Now</a></h5>

                    </div>
                </div>

            </div>
            <!-- /.shop-sidebar -->

        </div> <!-- /.row -->
        </div> <!-- /.container -->
        </div>
    </section>


@endsection