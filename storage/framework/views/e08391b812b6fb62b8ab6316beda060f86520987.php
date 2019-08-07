<?php $__env->startSection('title', 'Get a home tutor here'); ?>



<?php $__env->startSection('content'); ?>

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>My Jobs</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>My Jobs</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <section class="dashboard">
        <div class="shop-page">
            <div class="container">
                <div class="row">

                    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <h3 style="text-align: center">My Jobs</h3>
                    <hr>
                    <br>
                    <div class="col-lg-9 col-sm-6 col-xs-12 shop-details">
                        <div class="row">
                            <table class="table table-bordered " >


                                    <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Student Name</th>
                                        <th>Student Number</th>
                                        <th>Fees</th>
                                        <th>Day</th>
                                        <th>Class Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Doe</td>

                                        <td>9889888998</td>
                                        <td>Rs. 500 / day</td>
                                        <td>Wednesday</td>
                                        <td>2:00 pm - 4:00pm</td>

                                    </tr>


                            </table>




                        </div>



                    </div>

                </div>
                <!-- /.shop-sidebar -->

            </div> <!-- /.row -->

    </section>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/onlineHomeTution/resources/views/teachers-job.blade.php ENDPATH**/ ?>