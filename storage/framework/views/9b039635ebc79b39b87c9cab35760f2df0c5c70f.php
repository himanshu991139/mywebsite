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

                            <h3 style="text-align: center">Your Wallet Balance is <span
                                        style="background: #15ff4b; color: white; padding: 10px">Rs .<?php echo e($wallet->wallet); ?></span></h3>
                            <br>
                            <br>
                            <h5 style="text-align: center"> <a href="/account/">Go To Dashboard Now</a></h5>


                        </div>
                    </div>

                </div>
                <!-- /.shop-sidebar -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/onlineHomeTution/resources/views/my-wallet.blade.php ENDPATH**/ ?>