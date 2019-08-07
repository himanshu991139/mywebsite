<?php $__env->startSection('title', 'User Dashboard '); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .widget-box-three .bg-icon {
            background-color: white;
            border: 1px solid #acaeb1;
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
                    <h4 class="header-title m-t-0 m-b-30">Student List</h4>


                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>


                            <tr>
                                <th>Id</th>
                                <th>Student Name</th>
                                <th>Phone</th>
                                <th>Requirement</th>
                                <th>Email</th>
                                <Th></Th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $student_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($student->id); ?>

                                    </th>
                                    <td>
                                        <h5 class="m-0"><?php echo e($student->name); ?></h5>
                                    </td>
                                    <td><?php echo e($student->phone); ?></td>
                                    <td><?php echo e($student->tuition_type); ?></td>
                                    <td><?php echo e($student->email); ?></td>

                                    <td><a href="">View Details</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                        <br>

                    </div>
                    <!-- table-responsive -->
                </div> <!-- end card -->
            </div>

        </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/admin/student_enquiry.blade.php ENDPATH**/ ?>