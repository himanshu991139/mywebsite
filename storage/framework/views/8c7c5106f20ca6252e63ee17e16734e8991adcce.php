<html lang="en" class="gr__themazine_com"><head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Campus - Education, Course, e-Learning and Events HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
</head>
<style>
    body{
        background-image:url("<?php echo e(asset('images/forest.jpg')); ?>") ;
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


                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                            
                            <li><a href="contact-us.html" class="tran3s">Working Process</a></li>
                            <li><a href="contact-us.html" class="tran3s">Enquiry</a></li>
                            <li><a href="contact-us.html" class="tran3s">Pricing</a></li>
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

                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <h3>Tutors Login</h3>
                        <input id="email" type="email" placeholder="Email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>



                        <input id="password" type="password" placeholder="Password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input style="width: 10%; height: 15px" class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-12">

                                <button type="submit" class="p-bg-color hvr-trim">
                                    <?php echo e(__('Login')); ?>

                                </button>
                                <br>

                                <?php if(Route::has('password.request')): ?>

                                    <p style="text-align: center"> <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot Your Password?')); ?>

                                        </a></p>
                                <?php endif; ?>
                                <p style="text-align: center; ">Don't Have Account? <a href="<?php echo e(route('register')); ?>">Sign Up</a> Here</p>

                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <!--
    =============================================
        Footer
    ==============================================
    -->


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- j Query -->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.2.2.3.min.js')); ?>"></script>
    <!-- Bootstrap Select JS -->
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap-select.js')); ?>"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

    <!-- Vendor js _________ -->
    <!-- Camera Slider -->
    <script type='text/javascript' src="<?php echo e(asset('js/jquery.mobile.customized.min.js')); ?>"></script>
    <script type='text/javascript' src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
    <script type='text/javascript' src="<?php echo e(asset('js/camera.min.js')); ?>"></script>
    <!-- Mega menu  -->
    <script type="text/javascript" src="<?php echo e(asset('js/menu.js')); ?>"></script>

    <!-- WOW js -->
    <script type="text/javascript" src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <!-- owl.carousel -->
    <script type="text/javascript" src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <!-- js count to -->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
    <!-- partical Js -->
    <script type="text/javascript" src="<?php echo e(asset('js/particles.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/stats.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- Theme js -->
    <script type="text/javascript" src="<?php echo e(asset('js/theme.js')); ?>"></script>


</div> <!-- /.main-page-wrapper -->

</body></html><?php /**PATH /Users/kapilanandd/onlineHomeTution/resources/views/auth/login.blade.php ENDPATH**/ ?>