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
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="col-xl-12 col-md-12">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 mx-auto d-block">
                                    <img src="<?php echo e(asset('Photo on 2-6-19 at 4.28 PM_1564105990.jpg')); ?>" class="rounded-circle img-thumbnail" alt="profile-image">
                                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Mark A. McKnight</h4>
                                    <p class="text-muted mb-2">@webdesigner</p>
                                </div>

                                <button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                                <p class="text-muted font-13 m-t-20">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                </p>

                                <hr>

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Johnathan Deo</span></p>

                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(123) 123 1234</span></p>

                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">coderthemes@gmail.com</span></p>

                                    <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p>
                                </div>

                                <ul class="social-links list-inline m-t-30">
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>

                            </div>

                        </div> <!-- end card-box -->

                    </div>

                </div>
            </div>
        </div>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/admin/teachers_profile.blade.php ENDPATH**/ ?>