<html lang="en" class="gr__themazine_com">
<head>

    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Campus - Education, Course, e-Learning and Events HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<style>
    body {
        background-image: url("{{asset('images/forest.jpg')}}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card {
        background: white;
        margin: 5%;

    }

    .form-control {
        width: 100%;
        height: 55px;
        border: 1px solid #e8e8e8;
        padding: 0 20px;
        border-radius: 0px;
        margin-bottom: 20px;
    }

    .new-btn {
        background: #313131;
        padding: 10px;
        color: white;
    }

    .new-btn:hover {
        background: #fbfbfb;
        padding: 10px;
        color: black;
        border: 1px solid #313131;
    }

</style>
<style>
    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 50%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>
<body data-gr-c-s-loaded="true" style="overflow: visible;">
<div class="main-page-wrapper">

    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <div id="loader-wrapper" style="display: none;">
        <div id="loader" style="display: none;"></div>
    </div>


    <div class="container">
        <div class="card">
            <h3 style="text-align: center;padding: 2% 0 2% 0; ">Registration</h3>
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
                                           placeholder="Age in Years" required="">
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
                                    <label class="radio-inline">Are you</label>
                                    <label class="radio-inline"><input type="radio" name="available" value="Morning"
                                                                       required="">Student/Teacher</label>
                                    <label class="radio-inline"><input type="radio" name="available" value="Evening"
                                                                       required="">Other</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="travel" class="form-control" id="inputTravel"
                                           placeholder="Branch/Class/Profession" required="">
                                </div>
                            </div>
                        </div>



                        <hr>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Name of Institute of highest Qualification</label>
                                    <input type="text" name="educational_degree" class="form-control"
                                           id="inputEducational" placeholder="Institute Name">
                                </div>
                            </div>
                        </div>
                        <hr>




                        <br>

                        <div class="row">
                            <div class="col-md-">
                                <label>By clicking Register, you agree to our <a
                                            href="/terms-conditions" target="_blank">Terms
                                        &amp; Conditions</a> that you have read.</label>
                                <br>
                                <button type="submit" class="basic ">Register</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>