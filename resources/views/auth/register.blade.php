<html lang="en" class="gr__themazine_com"><head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Campus - Education, Course, e-Learning and Events HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<style>
    body{
        background-image:url("{{asset('images/forest.jpg')}}") ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
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



    <!--
    =============================================
        Theme Header
    ==============================================
    -->
    <header style="background: white" class="theme-menu-wrapper menu-style-two">
        <div class="top-header">
            <div class="container">
                <ul class="float-right left-content">
                    <li><a href="#">+91 97184 84809</a></li>
                    <li><a href="#">pacehometutors@gmail.com</a></li>
                    <li><a href="#"> <i class="fa fa-user" aria-hidden="true"></i> Are you a Student ?</a></li>
                    <li><a href="/login"> <i class="fa fa-sign-in" aria-hidden="true"></i> Are you a Tutor ?</a></li>

                </ul>

            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
        <div class="container">
            <div class="header-wrapper clearfix">
                <!-- Logo -->
                <div class="logo float-left tran4s hidden-sm hidden-xs"><a href="index.html"><img
                                src="images/logo/logo-new.png" alt="Logo"></a></div>
                <!-- Logo -->
                <div class="logo float-left tran4s hidden-md hidden-lg"><a href="index.html"><img src="images/logo/logg.png"
                                                                                                  alt="Logo"></a></div>


                <!-- ============================ Theme Menu ========================= -->
                <nav class="theme-main-menu float-right navbar" id="mega-menu-wrapper">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav">
                            <li><a href="/" class="tran3s">Home</a>
                            </li>


                            {{--<li class="dropdown-holder menu-list"><a href="#" class="tran3s">Course</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="course-grid.html">Course grid</a></li>--}}
                            {{--<li><a href="course-list.html">Course List</a></li>--}}
                            {{--<li><a href="course-details.html">Course Details</a></li>--}}
                            {{--<li class="dropdown-holder"><a href="#">Third Level menu</a>--}}
                            {{--<ul class="second-sub-menu">--}}
                            {{--<li><a href="#">menu one</a></li>--}}
                            {{--<li><a href="#">menu two</a></li>--}}
                            {{--</ul>--}}
                            {{--<i class="icon flaticon-down-arrow"></i></li>--}}
                            {{--</ul>--}}
                            {{--<i class="icon flaticon-down-arrow"></i></li>--}}
                            {{--<li class="dropdown-holder menu-list"><a href="#" class="tran3s">Pages</a>--}}
                            {{--<ul class="sub-menu width-half">--}}
                            {{--<li><a href="about-us.html">About Us</a></li>--}}
                            {{--<li><a href="our-teacher.html">Our teacher</a></li>--}}
                            {{--<li><a href="teachers-profile.html">teachers profile</a></li>--}}
                            {{--<li><a href="shop.html">Shop page</a></li>--}}
                            {{--<li><a href="shop-details.html">Shop Details</a></li>--}}
                            {{--<li><a href="portfolio-3-column.html">portfolio 3 column</a></li>--}}
                            {{--<li><a href="portfolio-4-column.html">portfolio 4 column</a></li>--}}
                            {{--<li><a href="pricing-plan.html">Pricing Plan</a></li>--}}
                            {{--<li><a href="faq.html">Faq Page</a></li>--}}
                            {{--<li><a href="404.html">Error Page</a></li>--}}
                            {{--<li><a href="sign-up.html">Registration</a></li>--}}
                            {{--<li class="dropdown-holder"><a href="#">Third Level menu</a>--}}
                            {{--<ul class="second-sub-menu">--}}
                            {{--<li><a href="#">menu one</a></li>--}}
                            {{--<li><a href="#">menu two</a></li>--}}
                            {{--</ul>--}}
                            {{--<i class="icon flaticon-down-arrow"></i></li>--}}
                            {{--</ul>--}}
                            {{--<i class="icon flaticon-down-arrow"></i></li>--}}
                            {{--<li class="dropdown-holder menu-list"><a href="#" class="tran3s">Event</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="event-list.html">Event List</a></li>--}}
                            {{--<li><a href="event-grid.html">Event Grid</a></li>--}}
                            {{--<li><a href="event-details.html">Event Single</a></li>--}}
                            {{--</ul>--}}
                            {{--<i class="icon flaticon-down-arrow"></i></li>--}}
                            {{--<li class="dropdown-holder menu-list"><a href="#" class="tran3s">Blog</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="blog-grid.html">Blog grid</a></li>--}}
                            {{--<li><a href="blog-list.html">Blog List</a></li>--}}
                            {{--<li><a href="blog-details.html">blog Details</a></li>--}}
                            {{--</ul>--}}

                            {{--<i class="icon flaticon-down-arrow"></i></li>--}}
                            <li><a href="contact-us.html" class="tran3s">Working Process</a></li>
                            <li><a href="contact-us.html" class="tran3s">Enquiry</a></li>

                            <li><a href="/" class="tran3s">Students</a>
                            </li>
                            <li><a href="contact-us.html" class="tran3s">About Us</a></li>
                            <li><a href="contact-us.html" class="tran3s">Contact Us</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav> <!-- /.theme-main-menu -->
            </div> <!-- /.header-wrapper -->
        </div>
    </header>
    <!--
    =============================================
        Theme Inner Banner
    ==============================================
    -->
   


    <!-- Sign-Up Modal -->

    <div class="signUpModal theme-modal-box">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3>User Registration</h3>
                        <div class="wrapper">


                            <input id="name" type="text" placeholder="Name" class=" @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                            <input id="email" type="email" placeholder="Email"
                                   class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                   required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input id="phone" type="number" placeholder="phone"
                                   class=" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                   required autocomplete="phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $phone }}</strong>
                                    </span>
                            @enderror


                            <input id="password" type="password" placeholder="Password"
                                   class=" @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                            <input id="password-confirm" placeholder="Confirm Password" type="password" class=""
                                   name="password_confirmation" required autocomplete="new-password">


                            <button type="submit" class="p-bg-color hvr-trim">
                                {{ __('Register') }}
                            </button>
                            <br>
                            <p style="text-align: center; ">Already Have Account? <a href="{{route('login')}}">Sign In</a> Here</p>

                        </div>
                    </form>

                </div> <!-- /.modal-body -->
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.signUpModal -->\


    <!--
    =============================================
        Footer
    ==============================================
    -->


@include('layouts.footer')



<!-- j Query -->
    <script type="text/javascript" src="{{asset('js/jquery.2.2.3.min.js')}}"></script>
    <!-- Bootstrap Select JS -->
    <script type="text/javascript" src="{{asset('js/bootstrap-select.js')}}"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Vendor js _________ -->
    <!-- Camera Slider -->
    <script type='text/javascript' src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/camera.min.js')}}"></script>
    <!-- Mega menu  -->
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>

    <!-- WOW js -->
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <!-- owl.carousel -->
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- js count to -->
    <script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- partical Js -->
    <script type="text/javascript" src="{{asset('js/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/stats.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <!-- Theme js -->
    <script type="text/javascript" src="{{asset('js/theme.js')}}"></script>


</div> <!-- /.main-page-wrapper -->

</body></html>