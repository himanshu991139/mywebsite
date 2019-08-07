<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.2.2.3.min.js')); ?>"></script>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5d36d6906d808312283991b7/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body>


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- j Query -->

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



</body>
</html>
<?php /**PATH C:\Users\Hamar-PC\Desktop\hometutor\resources\views/layouts/app.blade.php ENDPATH**/ ?>