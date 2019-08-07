@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Paments</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Payments</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    @include('layouts.sidebar')
                    <h3>My Payments</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">
                        <table class="table table-bordered " >


                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Date</th>
                                <th>Classes Done</th>
                                <th>Per Class</th>
                                <th>Total Payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>12/3/19</td>

                                <td>3</td>
                                <td>Rs. 500 / day</td>
                                <td>Rs. 1500</td>

                            </tr>


                        </table>
                        </div>



                    </div>
                </div>

            </div>
            <!-- /.shop-sidebar -->

        </div> <!-- /.row -->
        </div> <!-- /.container -->
        </div>
    </section>


@endsection