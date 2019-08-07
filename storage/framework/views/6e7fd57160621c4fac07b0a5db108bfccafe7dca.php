<html lang="en" style=""
      class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths gr__coderthemes_com">


<?php echo $__env->make('admin.admin-layout.includes.core.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="bg-transparent widescreen" data-gr-c-s-loaded="true">

<!-- HOME -->
<section>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <div class="m-t-10 m-b-10">
                                <a href="index.html" class="text-success">
                              <H1 style="color: white;">PaceTutors</H1>
                                </a>
                            </div>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" action="/admin/admin_login" method="post">
<?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input class="form-control" type="text"  name="email" required="" placeholder="Username">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                    </div>
                                </div>





                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn w-md btn-bordered btn-danger waves-effect waves-light"
                                                type="submit">Log In
                                        </button>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->


                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

<?php echo $__env->make('admin.admin-layout.includes.core.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/admin/admin_login.blade.php ENDPATH**/ ?>