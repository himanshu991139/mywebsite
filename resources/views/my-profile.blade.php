@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>My Profile</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>My Profile</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    @include('layouts.sidebar')
                    <h3 style="text-align: center">My Profile</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">
                        <div class="row">
                            <table class="table table-bordered " >

                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$details[0]->name}}</td>

                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>{{$details[1]->gender}}</td>

                                </tr>
                                <tr>
                                    <td width="50%">Email </td>
                                    <td width="50%"> {{$details[0]->email}}</td>

                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>     +91{{$details[0]->phone}}</td>

                                </tr>
                                <tr>
                                    <td>Date Of Birth</td>
                                    <td>     {{$details[1]->dob}}</td>

                                </tr>
                                <tr>
                                    <td>Qualification</td>
                                    <td>     {{$details[1]->qualification}}</td>

                                </tr>
                                <tr>
                                    <td>Experience</td>
                                    <td>     {{$details[1]->experience}} years</td>

                                </tr>
                                <tr>
                                    <td>Available In</td>
                                    <td>     {{$details[1]->available_in}}</td>

                                </tr>

                                <tr>
                                    <td>Travel By</td>
                                    <td>     {{$details[1]->travel_by}}</td>

                                </tr>

                                <tr>
                                    <td> Educational Degree :</td>
                                    <td>     {{$details[1]->educational_degree}}</td>

                                </tr>

                                <tr>
                                    <td>      Medium Of Instructions </td>
                                    <td>     {{$details[1]->instruction_medium}}</td>

                                </tr>

                                <tr>
                                    <td>  Your Subjects </td>
                                    <td>     {{$details[1]->subjects}}</td>

                                </tr>


                                <tr>
                                    <td>      Your Classes </td>
                                    <td>     {{$details[1]->class}}</td>

                                </tr>


                                <tr>
                                    <td>  Permanent Address </td>
                                    <td>     {{$details[1]->permanent_address}}</td>

                                </tr>




                                </tbody>
                            </table>



                        <br>
                            <button type="button" class=" btn-dark basic"> <a href="/account/update-profile">Update Profile</a></button>
                    </div>



                </div>

            </div>
            <!-- /.shop-sidebar -->

        </div> <!-- /.row -->

    </section>


@endsection


