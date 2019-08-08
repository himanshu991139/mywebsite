
@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div id="theme-main-banner" class="banner-one">
        <div data-src="images/home/jumb.jpg">
            <div class="camera_caption">
                <div class="container text-center">
                    <h3 class="wow fadeInUp animated">Welcome To BrainJam</h3>
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">START LEARNING WITH <span
                                class="p-color"> BEST ONLINE SYSTEM</span>
                    </h1>
                    <a href="{{route('register')}}" class="tran3s wow fadeInLeft animated banner-button"
                       data-wow-delay="0.3s">Register</a>
                    <a href="{{route('login')}}"
                       class="tran3s wow fadeInRight animated button-one banner-button hvr-trim" data-wow-delay="0.1s">Login
                        </a>
                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
        <div data-src="images/home/slide-1.jpg">
            <div class="camera_caption">
                <div class="container text-center">
                    <h3 class="wow fadeInUp animated">campus is an trustable platform for your child</h3>
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Start Now <span class="p-color">Make Learning Easy</span>
                    </h1>

                    <a href="/teachers" class="tran3s wow fadeInLeft animated banner-button"
                       data-wow-delay="0.3s">Find Tutor</a>
                    <a href="{{route('register')}}"
                       class="tran3s wow fadeInRight animated button-one banner-button hvr-trim" data-wow-delay="0.3s">Register
                        as tutor</a>

                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
    </div> <!-- /#theme-main-banner -->


    <!--
    =============================================
        Find Course Form
    ==============================================
    -->
    {{--<div class="find-course">--}}
    {{--<div class="opacity color-one">--}}
    {{--<div class="container">--}}
    {{--<form action="#">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-xs-6">--}}
    {{--<div class="single-input">--}}
    {{--<select class="selectpicker">--}}
    {{--<option>All Categories</option>--}}
    {{--<option>Course Demo one</option>--}}
    {{--<option>Course Demo two</option>--}}
    {{--<option>Course Demo three</option>--}}
    {{--</select>--}}
    {{--</div> <!-- /.single-input -->--}}
    {{--</div> <!-- /.col -->--}}
    {{--<div class="col-md-3 col-xs-6">--}}
    {{--<div class="single-input">--}}
    {{--<select class="selectpicker">--}}
    {{--<option>Filter</option>--}}
    {{--<option>Course filter one</option>--}}
    {{--<option>Course filter two</option>--}}
    {{--<option>Course filter three</option>--}}
    {{--</select>--}}
    {{--</div> <!-- /.single-input -->--}}
    {{--</div> <!-- /.col -->--}}
    {{--<div class="col-md-4 col-sm-8 col-xs-12">--}}
    {{--<div class="single-input">--}}
    {{--<select class="selectpicker">--}}
    {{--<option>What you want to learn today?</option>--}}
    {{--<option>Advance HTML Courses</option>--}}
    {{--<option>Advance PHP Courses</option>--}}
    {{--<option>Advance JAVA Courses</option>--}}
    {{--</select>--}}
    {{--</div> <!-- /.single-input -->--}}
    {{--</div> <!-- /.col -->--}}
    {{--<div class="col-md-2 col-sm-4 col-xs-12">--}}
    {{--<button class="action-button tran3s">Search Now <i class="fa fa-search"--}}
    {{--aria-hidden="true"></i></button>--}}
    {{--</div>--}}
    {{--</div> <!-- /.row -->--}}
    {{--</form>--}}
    {{--</div> <!-- /.container -->--}}
    {{--</div> <!-- /.opacity -->--}}
    {{--</div> <!-- /.find-course -->--}}


@include('type')




    <!--
    =============================================
        Find Course Block
    ==============================================
    -->


            <section class="featured-courses vertical-column courses-wrap">
                <div class="container">
                    <div class="row mx-m-25">
                        <div class="col-12 px-25">
                            <header class="heading flex flex-wrap justify-content-between align-items-center">
                                <h2 class="entry-title">Featured Courses</h2>

                            </header><!-- .heading -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-4 px-25">
                            <div class="course-content">
                                <div class="course-thumbnail">
                                    <a href="#"><img src="images/course/ho.jpg" alt="" style="width: 340px;"></a>
                                </div><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">The Web Developer Bootcamp</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a href="#">Colt Steele</a></div>


                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            Free <span class="price-drop">$58</span>
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </div><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 col-lg-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="#"><img src="images/course/intro to python.jpg" style="width: 350px;" alt=""></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Indroduction to Python Programming</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a href="#">Avinash Jain</a></div>


                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            <span class="free-cost">Free</span>
                                        </div><!-- .price-drop -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </div><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 col-lg-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="#"><img src="images/course/Oracle Sql.jpg" alt="" style="width:350px"></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Oracle SQL-Step by step SQL </a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a href="#">Amamath Reddy</a></div>


                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            Free <span class="price-drop">$78</span>
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </div><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 col-lg-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="#"><img src="images/course/c programming.jpg" style="width:350px;" alt=""></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">C Programming made easy</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a href="#">maganadha Reddy</a></div>

                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            <span class="free-cost">Free</span>
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </div><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 col-lg-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="#"><img src="images/course/2222850_4f40.jpg" alt="" style="width: 340px;"></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Node JS API Development</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a href="#">Created by Ryan Dhungel</a></div>

                                            <div class="course-date"></div>
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            Free <span class="price-drop">$48</span>
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </div><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->

                        <div class="col-12 col-md-6 col-lg-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="#"><img src="images/course/24823_963e_14.jpg" style="width:350px;" alt=""></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Java Tutorial for Beginners</a></h2>

                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><a href="#"> John Purcel</a></div>

                                            <div class="course-date">Nov 06, 2018</div>
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <div class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            <span class="free-cost">Free</span>
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </div><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->

                        <div class="col-12 px-25 flex justify-content-center">
                            <a class="btn" href="#">view all courses</a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .courses-wrap -->


            <!-- /.single-block -->

            </div>
        </div> <!-- /.container -->
    </div> <!-- /.find-course-block -->


    <!--
    =============================================
        Registration Banner
    ==============================================
    -->
    <div class="registration-banner" id="enquiry">
        <div class="opacity">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12">
                        <div class="registration-form">
                            <form action="/enquiry" method="post">
                                <h2>Enquiry Now</h2>

                                @csrf
                                <p>Get a Call From Our Executive For Enquiry ! </p>
                                <div class="form-wrapper">
                                    <h6>Your Full Name</h6>
                                    <input type="text" required name="name" placeholder="Your Name">
                                    <h6>Your EMail</h6>
                                    <input type="email" required name="email" placeholder="sample@gmail.com">
                                    <h6>Mobile Number</h6>
                                    <input type="text" required name="phone" placeholder="+880 854 875 971">
                                    <button type="submit" class="tran3s hvr-trim">Get A Call !</button>
                                </div> <!-- /.form-wrapper -->
                            </form>
                        </div> <!-- /.registration-form -->
                    </div>

                    <div class="col-md-7 col-xs-12">
                        <div class="text-wrapper">
                            <h2>We Have More <br>Than <span class="p-color">60+Student</span> Currently Useing
                                BrainJam</h2>

                            <ul class="clearfix">
                                <li class="float-left">
                                    <div class="single-box">
                                        <h3><span class="counter">30</span></h3>
                                        <p>Teachers</p>
                                    </div> <!-- /.single-box -->
                                </li>
                                <li class="float-left">
                                    <div class="single-box">
                                        <h3><span class="counter">42</span></h3>
                                        <p>Happy Students</p>
                                    </div> <!-- /.single-box -->
                                </li>
                                <li class="float-left">
                                    <div class="single-box">
                                        <h3><span class="counter">22</span></h3>
                                        <p>Study Meaterial</p>
                                    </div> <!-- /.single-box -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.registration-banner -->


    <!--
    =============================================
        Popular Course
    ==============================================
    -->


    <!--
    =============================================
        Theme Counter Section
    ==============================================
    -->
    <div class="theme-counter">
        <div class="count-particles">
            <span class="js-count-particles">--</span>
        </div>
        <div id="particles-js"></div>
        <div class="opacity">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <h3><span class="counter">85,873</span>+</h3>
                        <p>Students</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <h3><span class="counter">468</span>+</h3>
                        <p>Courses</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <h3><span class="counter">1,729</span>+</h3>
                        <p>Projects</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <h3><span class="counter">2,560</span>+</h3>
                        <p>Ratings</p>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.theme-counter -->

    <div class="our-blog">
        <div class="container">
            <div class="theme-title">
                <h2>How BrainJam Helps</h2>

            </div> <!-- /.theme-title -->
            <br>
            <br>
            <p style="font-size: large">
                There are variety of courses available choose those which you want to study that help students to assist them to complete their projects given in their schools and colleges, make them
                strong in their weak fields.
            </p>
            <p style="font-size: large">BrainJam provides you a comfortable enviroment to learn comfortable.The student can access lectures from various teachers, compare and refer to the one that suits the requirements.</p>

            <p style="font-size: large">There are different Methods to study you can choose those methods that are suitable for you</p>


        </div> <!-- /.container -->
    </div>
    <!--
    =============================================
        Our Pricing Plan
    ==============================================

    -->


    @include('offer')
    <br>
    <br>
    <br>



    {{--<div class="our-pricing-plan" id="price">--}}
    {{--<div class="container">--}}
    {{--<div class="theme-title text-center">--}}
    {{--<h2>Plans for Premium Tutors <span>No Hidden Charge!!</span></h2>--}}
    {{--<p></p>--}}
    {{--</div> <!-- /.theme-title -->--}}

    {{--<div class="clearfix">--}}
    {{--<div class="single-plan-table tran3s">--}}
    {{--<h6>Basic</h6>--}}
    {{--<strong><sub><i class="fa fa-inr" aria-hidden="true"></i></sub> 500 <sup>.00--}}
    {{--<span>/ Mo.</span></sup></strong>--}}
    {{--<ul>--}}
    {{--<li>Student Contacts:8--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--Validity: 6 Months--}}
    {{--</li>--}}
    {{--<li>Offers Ends Soon!</li>--}}

    {{--<li>--}}
    {{--Premium Support!--}}
    {{--</li>--}}
    {{--<li>30 day 100% money back guarantee.</li>--}}
    {{--</ul>--}}
    {{--<a href="#" class="tran3s hvr-trim">Buy now </a>--}}
    {{--</div> <!-- /.single-plan-table -->--}}
    {{--<div class="single-plan-table tran3s">--}}
    {{--<h6>Gold</h6>--}}
    {{--<strong><sub><i class="fa fa-inr" aria-hidden="true"></i></sub> 1000 <sup>.00--}}
    {{--<span>/ Mo.</span></sup></strong>--}}
    {{--<ul>--}}
    {{--<li>Student Contacts:8--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--Validity: 6 Months--}}
    {{--</li>--}}
    {{--<li>Offers Ends Soon!</li>--}}

    {{--<li>--}}
    {{--Premium Support!--}}
    {{--</li>--}}
    {{--<li>30 day 100% money back guarantee.</li>--}}
    {{--</ul>--}}
    {{--<a href="#" class="tran3s hvr-trim">Buy now </a>--}}
    {{--</div> <!-- /.single-plan-table -->--}}
    {{--<div class="single-plan-table tran3s">--}}
    {{--<h6>Diamond</h6>--}}
    {{--<strong><sub><i class="fa fa-inr" aria-hidden="true"></i></sub> 1500 <sup>.00--}}
    {{--<span>/ Mo.</span></sup></strong>--}}
    {{--<ul>--}}
    {{--<li>Student Contacts:8--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--Validity: 6 Months--}}
    {{--</li>--}}
    {{--<li>Offers Ends Soon!</li>--}}

    {{--<li>--}}
    {{--Premium Support!--}}
    {{--</li>--}}
    {{--<li>30 day 100% money back guarantee.</li>--}}
    {{--</ul>--}}
    {{--<a href="#" class="tran3s hvr-trim">Buy now </a>--}}
    {{--</div> <!-- /.single-plan-table -->--}}

    {{--</div>--}}
    {{--</div> <!-- /.container -->--}}
    {{--</div> <!-- /.our-pricing-plan -->--}}


    <!--
    =============================================
        Testimonial Style One
    ==============================================
    -->
     <!-- /.theme-title -->

            <div class="container">
            <div class="theme-title">
                <h2>Why Home Tuitions</h2>

            </div> <!-- /.theme-title -->
            <br>
            <br>
            <p style="font-size: large">
                In old age, people learned in a one-to-one environment for thousands of years. In current times home
                tuition is building upon this ages-old tradition.
            </p>
            <p style="font-size: large">The student’s needs are concentrated on fully, meaning any specific questions or
                misunderstandings they may have are not lost in the tumult of classroom dynamics.</p>

            <p style="font-size: large">You or your child will increase in confidence, enjoyment and motivation in the
                subject and develop personal discipline that can be applied to any subject..</p>
            <p style="font-size: large">Our large staff of Teachers/mentors includes graduate and post-graduate
                professionals, high school teachers and university faculty who teach in wide ranging subjects from
                elementary through college levels in a professional way with personal touch who can discover the
                students strengths and challenges in learning. We are committed to helping students succeed in their
                education.</p>

        </div> <!-- /.container -->
    </div>

    <br>
    <br>

    <!--
    =============================================
        Our Blog
    ==============================================
    -->
  <!-- /.our-blog -->


    <!--
    =============================================
        Instructor Banner
    ==============================================
    -->
    <div class="instructor-banner">
        <div class="opacity opacity-one">
            <div class="container">
                <h4>Become An Prime Member</h4>
                <h2>Share Your Study Meaterial </h2>
                <a href="/register" class="tran3s hvr-trim">Get Started Now</a>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.instructor-banner -->
    <br>
    <br>
    <div class="our-blog">
        <div class="container">
            <div class="theme-title">
                <h2>Why Choose Us</h2>
                <a href="/about-us" class="tran3s">Go to About Us</a>
            </div> <!-- /.theme-title -->
            <br>
            <br>
            <br>
            <p style="font-size: large">
                Mera Home Tutor is a nationwide service enabling you to select your own choice of tutor. Mera Home Tutor
                was established in 2003 with the aim of helping people find great tutors in their local area. Today, we
                are premier Home Tutoring & Group tuition providing company and have one of the largest networks of
                highly qualified tutors to help students in their specific requirement. It started under the guidance of
                highly qualified and experienced people coming various backgrounds from the industry including
                education.
            </p>


        </div> <!-- /.container -->
    </div>
    <br>
    <br>
    <br>


@include('feed')




@endsection