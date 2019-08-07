<?php $__env->startSection('title', 'Get a home tutor here'); ?>



<?php $__env->startSection('content'); ?>

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Dashboard</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <h3>My Dashboard</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Status :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5 style="text-transform: capitalize">
                                       <?php echo e($tutor_details->status); ?>

                                    </h5>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Plan :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        <?php echo e($tutor_details->plan); ?>

                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Wallet Balance :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Rs <?php echo e($tutor_details->wallet); ?>

                                    </h5>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Job Applied :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        <?php echo e($tutor_details->jobsApplied); ?>

                                    </h5>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        Job Done :
                                    </h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>
                                        <?php echo e($tutor_details->jobsDone); ?>

                                    </h5>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
            <!-- /.shop-sidebar -->

        </div> <!-- /.row -->

    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/onlineHomeTution/resources/views/dashboard.blade.php ENDPATH**/ ?>