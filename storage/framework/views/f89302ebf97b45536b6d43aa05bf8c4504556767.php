



















































































































<header class="theme-menu-wrapper menu-style-two">
    <div class="top-header">
        <div class="container">
            <ul class="float-right left-content">
                <li><a href="#">+91 9910072742</a></li>
                <li><a href="mailto:pacehometutors@gmail.com?Subject=Enquiry">himanshu991139@gmail.com</a></li>
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="register"> <i class="fa fa-user" aria-hidden="true"></i> Regsiter
                            </a></li>
                    <li><a href="/login"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                <?php endif; ?>
            </ul>

        </div> <!-- /.container -->
    </div> <!-- /.top-header -->
    <div class="container">
        <div class="header-wrapper clearfix">
            <!-- Logo -->
            <div class="logo float-left tran4s hidden-sm hidden-xs"><a href="index.html"><img
                            src="/images/logo/logo-new.png" alt="Logo"></a></div>
            <!-- Logo -->
            <div class="logo float-left tran4s hidden-md hidden-lg"><a href="index.html"><img src="/images/logo/logg.png"
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


                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        


                        
                        <li><a href="/notes" class="tran3s">HandWritten Notes</a></li>
                        <li><a href="/#enquiry" class="tran3s">Enquiry</a></li>
                        
                        <li><a href="/students" class="tran3s">Students</a>
                        </li>
                        <li><a href="/about-us" class="tran3s">About Us</a></li>
                        <li><a href="/contact-us" class="tran3s">Contact Us</a></li>
                        <?php if(auth()->guard()->check()): ?>
                        <li class="dropdown-holder menu-list"><a href="#" class="tran3s"><?php echo e(Auth::user()->name); ?></a>
                            <ul class="sub-menu">
                                <li><a href="/account/">Dashboard</a></li>
                     <!--           <li><a href="/account/status">My Status</a></li>
                         -->       <li><a href="/account/profile">My Profile</a></li>
                                <li><a href="/account/subscription">Subscription</a></li>
                                <li><a href="/account/wallet">My Uploads</a></li>
                  <!--              <li><a href="/account/payments">Payments</a></li>
                      -->          <li><a href="<?php echo e(route('logout')); ?>"> Logout</a></li>

                            </ul>
                            <?php endif; ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav> <!-- /.theme-main-menu -->
        </div> <!-- /.header-wrapper -->
    </div>
</header><?php /**PATH C:\Users\Hamar-PC\Desktop\hometutor\resources\views/layouts/header.blade.php ENDPATH**/ ?>