@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Profile Update</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Profile Update</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    @include('layouts.sidebar')
                    <h3>Update Profile</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">

                        <div class="panel " style=" margin: 2%">
                            <div class="panel-body">
                                <form action="/account/teachers-details" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group date">
                                                    <input type="date" name="dob" class="form-control" autocomplete="false"
                                                           placeholder="Enter Date of Birth" value="" id="datetimepicker"
                                                           required="">
                                                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="qualification" class="form-control" id="inputQualification"
                                                       placeholder="Highest Qualification eg; B.TECH, M.TECH, MBA B.ED ect * "
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="number" name="experience" class="form-control" id="inputExperience"
                                                       placeholder="Teaching Experience in Years" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="radio-inline">Gender</label>
                                                <label class="radio-inline"><input type="radio" name="gender" value="Male" required="">Male</label>
                                                <label class="radio-inline"><input type="radio" name="gender" value="Female" required="">Female</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="radio-inline">I am Available</label>
                                                <label class="radio-inline"><input type="radio" name="available" value="Morning"
                                                                                   required="">Morning</label>
                                                <label class="radio-inline"><input type="radio" name="available" value="Evening"
                                                                                   required="">Evening</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="travel" class="form-control" id="inputTravel"
                                                       placeholder="How will you travel ?" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Medium of Instruction</label>
                                                <label class="checkbox-inline"><input type="checkbox" name="medium[]" value="hindi">Hindi</label>
                                                <label class="checkbox-inline"><input type="checkbox" name="medium[]" value="english">English</label>


                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Board You Can Handle</label>
                                                <label class="checkbox-inline"><input type="checkbox" name="board[]" value="CBSE">CBSE</label>
                                                <label class="checkbox-inline"><input type="checkbox" name="board[]" value="ICSE">ICSE</label>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Are you working as:</label>
                                                <select name="working_as" class="form-control" required="">
                                                    <option value="part-time">Part Time</option>
                                                    <option value="full-time">Full Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <div class="clearfix"></div>
                                                <div style="max-height:200px; overflow:scroll; width:90%;">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="subjects[]" value="all subjects">All Subjects Upto
                                                            5th</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="subjects[]" value="all subject upto 8th">All Subjects Upto
                                                            8th</label>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Classes</label>
                                                <div class="clearfix"></div>
                                                <div style="max-height:200px; overflow:scroll; width:90%;">

                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="classes[]" value="1-5">Ist - Vth</label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="classes[]" value="5-8">Ist - Vth</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Are You a School Tutor ?</label>
                                                <div class="clearfix"></div>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="school_tutor" value="1" required="">Yes</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label><input type="radio" name="school_tutor" value="0" required="">No</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Any Educational Degree</label>
                                                <input type="text" name="educational_degree" class="form-control"
                                                       id="inputEducational" placeholder="Educational Degree">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>



                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label>Present Address</label>
                                                <textarea rows="3" cols="50" name="present_address" class="form-control"
                                                          placeholder="Enter Present Address" required=""></textarea>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <br>
                                            <br>
                                            <button type="submit" class="basic ">Update Profile</button>
                                        </div>

                                    </div>

                                </form>
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