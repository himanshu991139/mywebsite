<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('.layout.core.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<div class="main-page-wrapper">


    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>


    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layout.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>


    <?php echo $__env->make('layout.core.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
</body>
</html><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/layout/app.blade.php ENDPATH**/ ?>