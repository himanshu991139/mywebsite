<?php $__env->startSection('title', 'Get a home tutor here'); ?>



<?php $__env->startSection('content'); ?>
    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Contact</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <div class="container contact-us-page">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="contact-us-form">
                    <h2>Send a Message</h2>

                    <form action="/mail"  method="post" class="form-validation" autocomplete="off" novalidate="novalidate">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="single-input">
                                    <input type="text" placeholder="You Name*" name="name">
                                </div> <!-- /.single-input -->
                            </div> <!-- /.col- -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <input type="email" placeholder="Enter Email here*" name="email">
                                </div> <!-- /.single-input -->
                            </div> <!-- /.col- -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div> <!-- /.single-input -->
                            </div> <!-- /.col- -->
                            <div class="col-xs-12">
                                <div class="single-input">
                                    <textarea placeholder="Your Message" name="message"></textarea>
                                </div> <!-- /.single-input -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                        <input type="submit" value="Send Message" class="tran3s p-bg-color">
                    </form>

                    <!-- Contact Form Validation Markup -->
                    <!-- Contact alert -->
                    <div class="alert-wrapper" id="alert-success">
                        <div id="success">
                            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="wrapper">
                                <p>Your message was sent successfully.</p>
                            </div>
                        </div>
                    </div> <!-- End of .alert_wrapper -->
                    <div class="alert-wrapper" id="alert-error">
                        <div id="error">
                            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="wrapper">
                                <p>Sorry!Something Went Wrong.</p>
                            </div>
                        </div>
                    </div> <!-- End of .alert_wrapper -->
                </div> <!-- /.contact-us-form -->
            </div> <!-- /.col- -->

            <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="contactUs-address">
                    <h2>Contact Information</h2>
                    <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form,</p>
                    <div class="single-address clearfix">
                        <div class="icon float-left"><i class="flaticon-placeholder"></i></div>
                        <div class="text float-left">
                            <h6>Address</h6>
                            <span>San Francisco, CA 560 Bush St &amp; 20th Ave, Apt <br>5 San Francisco, 230909</span>
                        </div>
                    </div> <!-- End of .single-address -->
                    <div class="single-address clearfix">
                        <div class="icon float-left"><i class="flaticon-envelope"></i></div>
                        <div class="text float-left">
                            <h6>Email</h6>
                            <span>denis@getcraftwork.com</span>
                        </div>
                    </div> <!-- End of .single-address -->
                    <div class="single-address clearfix">
                        <div class="icon float-left"><i class="flaticon-phone-call"></i></div>
                        <div class="text float-left">
                            <h6>Phone &amp; Fax</h6>
                            <span>(732) 803-01 03, (732) 806-01 04</span>
                        </div>
                    </div> <!-- End of .single-address -->
                </div> <!-- /.our-address -->
            </div>
        </div> <!-- /.row -->
    </div>
    <br>
    <br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/contact_us.blade.php ENDPATH**/ ?>