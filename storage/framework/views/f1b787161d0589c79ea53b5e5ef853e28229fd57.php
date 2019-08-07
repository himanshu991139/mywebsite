<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

<?php echo $__env->make('admin.admin-layout.includes.core.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>


<body class="fixed-left">


<div id="wrapper">


    <?php echo $__env->make('admin.admin-layout.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.admin-layout.includes.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="content-page">

        <?php echo $__env->yieldContent('content'); ?>



        <?php echo $__env->make('admin.admin-layout.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>




</div>
<?php echo $__env->make('admin.admin-layout.includes.core.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/admin/admin-layout/app.blade.php ENDPATH**/ ?>