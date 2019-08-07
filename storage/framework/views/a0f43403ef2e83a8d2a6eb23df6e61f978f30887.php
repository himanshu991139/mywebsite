<?php $__env->startSection('title', 'Get a home tutor here'); ?>



<?php $__env->startSection('content'); ?>

    <div id="theme-main-banner" class="banner-one">
        <div data-src="images/home/slide-1.jpg">
            <div class="camera_caption">
                <div class="container text-center">
                    <h3 class="wow fadeInUp animated">Welcome To Home Campus</h3>
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Find Nearby<span
                                class="p-color"> Home Tutor</span>
                    </h1>
                    <a href="/teachers" class="tran3s wow fadeInLeft animated banner-button"
                       data-wow-delay="0.3s">Find Tutor</a>
                    <a href="<?php echo e(route('register')); ?>"
                       class="tran3s wow fadeInRight animated button-one banner-button hvr-trim" data-wow-delay="0.3s">Register
                        as tutor</a>
                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
        <div data-src="images/home/slide-2.jpg">
            <div class="camera_caption">
                <div class="container text-center">
                    <h3 class="wow fadeInUp animated">campus is an trustable platform for your child</h3>
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Start Now <span class="p-color">Make Learning Easy</span>
                    </h1>

                    <a href="/teachers" class="tran3s wow fadeInLeft animated banner-button"
                       data-wow-delay="0.3s">Find Tutor</a>
                    <a href="<?php echo e(route('register')); ?>"
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    <!--
    =============================================
        Find Course Block
    ==============================================
    -->
    <div class="find-course-block" id="working-process">
        <div class="container">
            <div class="theme-title text-center">

                <h2>How it Works</h2>
            </div> <!-- /.theme-title -->
            <div class="clearfix">
                <div class="single-block float-left tran3s">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <br>
                    <h5>Step 1 </h5>
                    <h6>Identify Needs</h6>
                    <p>Our Education Counceller notes your requirement and understand your specific needs. We identify
                        student's learning profile and personality in mind.</p>

                </div> <!-- /.single-block -->
                <div class="single-block float-left tran3s">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <br>
                    <h5>Step 2 </h5>
                    <h6>Selection of Tutor</h6>
                    <p>On the basis of student's learning profile and personality, we select best tutor who is qualified
                        ,experienced and has proven track record of best result.</p>

                </div>
                <div class="single-block float-left tran3s">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <br>
                    <h5>Step 3 </h5>
                    <h6>Arrange Demo</h6>
                    <p>We schedule demo class at your place. If you do not like demo, we will replace tutor. </p>
                    <br>
                    <br>
                    <br>
                </div>


                <div class="single-block float-left tran3s">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <br>
                    <h5>Step 4</h5>
                    <h6>Start Learning</h6>
                    <p>Start learning and track your progress, Once perfect tutor is matched, schedule classes, start
                        learning and track student’s progress. </p>

                </div>

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

                                <?php echo csrf_field(); ?>
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
                                Campus</h2>

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
                                        <h3><span class="counter">220</span></h3>
                                        <p>Classes Done</p>
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
    <div class="popular-course">
        <div class="container">
            <div class="theme-title">
                <h6>Our Premium Teachers</h6>

            </div> <!-- /.theme-title -->
            <br>
            <div class="our-instructor">
                <div class="container">
                    <div class="row">
                        <div class="clearfix">
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="single-member">
                                    <div class="image">
                                        <img src="images/team/1.jpg" alt="">
                                        <div class="opacity tran4s">
                                            <ul>
                                                <li><a href="#" class="tran3s">Hire Now</a></li>

                                            </ul>
                                        </div> <!-- /.image -->
                                    </div>
                                    <h6><a href="teachers-profile.html" class="tran3s">Jubayer Hasan</a></h6>
                                    <p>Science</p>
                                </div> <!-- /.single-member -->
                            </div> <!-- /.col- -->
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="single-member">
                                    <div class="image">
                                        <img src="images/team/2.jpg" alt="">
                                        <div class="opacity tran4s">
                                            <ul>
                                                <li><a href="#" class="tran3s">Hire Now</a></li>

                                            </ul>
                                        </div> <!-- /.image -->
                                    </div>
                                    <h6><a href="teachers-profile.html" class="tran3s">Rashed ka.</a></h6>
                                    <p>Senior Designer</p>
                                </div> <!-- /.single-member -->
                            </div> <!-- /.col- -->
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="single-member">
                                    <div class="image">
                                        <img src="images/team/3.jpg" alt="">
                                        <div class="opacity tran4s">
                                            <ul>
                                                <li><a href="#" class="tran3s">Hire Now</a></li>

                                            </ul>
                                        </div> <!-- /.image -->
                                    </div>
                                    <h6><a href="teachers-profile.html" class="tran3s">Jannatul Ferdous</a></h6>
                                    <p>Photographer</p>
                                </div> <!-- /.single-member -->
                            </div> <!-- /.col- -->
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="single-member">
                                    <div class="image">
                                        <img src="images/team/4.jpg" alt="">
                                        <div class="opacity tran4s">
                                            <ul>
                                                <li><a href="#" class="tran3s">Hire Now</a></li>

                                            </ul>
                                        </div> <!-- /.image -->
                                    </div>
                                    <h6><a href="teachers-profile.html" class="tran3s">Hasan Masud</a></h6>
                                    <p>TV Artist</p>
                                </div> <!-- /.single-member -->
                            </div> <!-- /.col- -->
                            <!-- /.col- -->

                        </div> <!-- /.instructor-slider -->
                    </div> <!-- /.row -->

                </div> <!-- /.container -->
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.popular-course -->


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
                <h2>Beyond Tutoring</h2>

            </div> <!-- /.theme-title -->
            <br>
            <br>
            <p style="font-size: large">
                Our Tutor provides proper guidance to their students whenever they require, find easiest ways to solve
                their queries, assist them to complete their projects given in their schools and colleges, make them
                strong in their weak fields.
            </p>
            <p style="font-size: large">Our Tutor develops interest in their students who are weak in some particular
                subjects. He finds different modules and methods to create involvement of students in their targeted
                subjects and topics.</p>

            <p style="font-size: large">The work of our home tutor does not end with his subject, his work ends when a
                student becomes a good human being while getting growth in Academics.</p>


        </div> <!-- /.container -->
    </div>
    <!--
    =============================================
        Our Pricing Plan
    ==============================================

    -->

    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    


    <!--
    =============================================
        Testimonial Style One
    ==============================================
    -->
    <div class="testimonial-styleOne">
        <div class="container">
            <div class="theme-title text-center">
                <h2>Testimonials</h2>
                <p>Still need convincing? Check out what people are saying about Singleton. </p>
            </div> <!-- /.theme-title -->

            <div id="testimonial-carousel-one" class="carousel slide" data-ride="carousel" data-interval="5000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonial-carousel-one" data-slide-to="0" class="active tran3s"
                        title="Jenna Simpson"><img src="images/home/4.jpg" alt=""></li>
                    <li data-target="#testimonial-carousel-one" data-slide-to="1" class="tran3s" title="Mahfuz Riad">
                        <img src="images/home/5.jpg" alt=""></li>
                    <li data-target="#testimonial-carousel-one" data-slide-to="2" class="tran3s" title="Rashed Ka."><img
                                src="images/home/6.jpg" alt=""></li>
                    <li data-target="#testimonial-carousel-one" data-slide-to="3" class="tran3s" title="Foqrul Munna">
                        <img src="images/home/7.jpg" alt=""></li>
                    <li data-target="#testimonial-carousel-one" data-slide-to="4" class="tran3s" title="Zubayer Hasan">
                        <img src="images/home/6.jpg" alt=""></li>
                    <li data-target="#testimonial-carousel-one" data-slide-to="5" class="tran3s" title="Rashed Ka."><img
                                src="images/home/8.jpg" alt=""></li>
                </ol>

                <div class="main-wrapper">
                    <div class="shadow"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/home/4.jpg" alt="">
                            <h6>Jenna Simpson</h6>
                            <span>Dropbox</span>
                            <p>As we passed, I remarked a beautiful church-spire rising above some old elms in the park;
                                and before them, in the midst of a lawn, and some outhouses, an old red house with tall
                                chimneys covered with ivy, and the windows shining in the sun.</p>
                        </div>

                        <div class="item">
                            <img src="images/home/5.jpg" alt="">
                            <h6>Mahfuz Riad</h6>
                            <span>Google</span>
                            <p>As we passed, I remarked a beautiful church-spire rising above some old elms in the park;
                                and before them, in the midst of a lawn, and some outhouses, an old red house with tall
                                chimneys covered with ivy, and the windows shining in the sun.</p>
                        </div>

                        <div class="item">
                            <img src="images/home/6.jpg" alt="">
                            <h6>Rashed ka.</h6>
                            <span>Mega Nz</span>
                            <p>As we passed, I remarked a beautiful church-spire rising above some old elms in the park;
                                and before them, in the midst of a lawn, and some outhouses, an old red house with tall
                                chimneys covered with ivy, and the windows shining in the sun.</p>
                        </div>

                        <div class="item">
                            <img src="images/home/7.jpg" alt="">
                            <h6>Foqrul Munna</h6>
                            <span>Upwork</span>
                            <p>As we passed, I remarked a beautiful church-spire rising above some old elms in the park;
                                and before them, in the midst of a lawn, and some outhouses, an old red house with tall
                                chimneys covered with ivy, and the windows shining in the sun.</p>
                        </div>

                        <div class="item">
                            <img src="images/home/6.jpg" alt="">
                            <h6>Zubayer Hasan</h6>
                            <span>Envato</span>
                            <p>As we passed, I remarked a beautiful church-spire rising above some old elms in the park;
                                and before them, in the midst of a lawn, and some outhouses, an old red house with tall
                                chimneys covered with ivy, and the windows shining in the sun.</p>
                        </div>

                        <div class="item">
                            <img src="images/home/8.jpg" alt="">
                            <h6>Rashed Ka.</h6>
                            <span>Mega Nz</span>
                            <p>As we passed, I remarked a beautiful church-spire rising above some old elms in the park;
                                and before them, in the midst of a lawn, and some outhouses, an old red house with tall
                                chimneys covered with ivy, and the windows shining in the sun.</p>
                        </div>
                    </div> <!-- /.carousel-inner -->

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#testimonial-carousel-one" data-slide="prev">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#testimonial-carousel-one" data-slide="next">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div> <!-- /.main-wrapper -->
            </div> <!-- /#testimonial-carousel-one -->
        </div> <!-- /.container -->
    </div> <!-- /.testimonial-styleOne -->
    <div class="our-blog">
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
                <h4>Become An Instructor</h4>
                <h2>Spread Your Skills </h2>
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

    <div class="partent-logo-section">
        <div class="container">
            <div id="partner-logo">
                <div class="item"><img src="images/logo/p-1.png" alt="logo"></div>
                <div class="item"><img src="images/logo/p-2.png" alt="logo"></div>
                <div class="item"><img src="images/logo/p-3.png" alt="logo"></div>
                <div class="item"><img src="images/logo/p-4.png" alt="logo"></div>
            </div>
        </div>
    </div> <!-- /.partent-logo-section -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/welcome.blade.php ENDPATH**/ ?>