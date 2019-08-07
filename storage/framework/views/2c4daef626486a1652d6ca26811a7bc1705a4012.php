<?php $__env->startSection('title', 'User Dashboard '); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .widget-box-three .bg-icon {
            background-color: white;
            border: 1px solid #acaeb1;
        }

        tr{
            width: 50%;
            text-align: center;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item">
                            <a href="#">Zircos</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <br>
        <div style="margin-bottom: 10px;" class="row">


        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Students Details  <button style="float: right" type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Delete Enquiry</button>
                    </h4>

                    <br>


                    <div style="border: 0px solid #dee2e6" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
                        <table class="table table-hover table-centered m-0">
                            <tbody>


                            <tr>
                                <th>Name</th>

                                <th><?php echo e($profile->name); ?></th>


                            </tr>
                            <tr>
                                <th>Email</th>

                                <th><?php echo e($profile->email); ?></th>


                            </tr>
                            <tr>
                                <th>Phone</th>

                                <th><?php echo e($profile->phone); ?></th>


                            </tr>
                            <tr>
                                <th>Address</th>

                                <th><?php echo e($profile->address); ?></th>


                            </tr>
                            <tr>

                                <th>Class</th>

                                <th><?php echo e($profile->class); ?></th>


                            </tr>
                            <tr>
                                <th>Subject</th>

                                <th><?php echo e($profile->subject); ?></th>


                            </tr>

                            <tr>

                                <th>Tuition Type</th>

                                <th><?php echo e($profile->tuition_type); ?></th>


                            </tr>
                            <tr>
                                <th>Message</th>

                                <th><?php echo e($profile->message); ?></th>


                            </tr>
                            </tbody>
                        </table>
                        <br>

                    </div>
                    <!-- table-responsive -->
                </div> <!-- end card -->
            </div>

        </div>


    </div>
    <!-- end row -->






<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/admin/students.blade.php ENDPATH**/ ?>