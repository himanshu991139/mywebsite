<?php $__env->startSection('title', 'Get a home tutor here'); ?>



<?php $__env->startSection('content'); ?>

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2><?php echo $__env->yieldContent('message'); ?></h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>error</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <div style="margin-top: 10%" class="container error-page">
        <h2> <?php echo $__env->yieldContent('code'); ?></h2>
        <h3>   <?php echo $__env->yieldContent('message'); ?></h3>
        <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
        <div>
            <a href="/" class="tran3s s-bg-color hvr-trim">Go Home</a>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views/errors/minimal.blade.php ENDPATH**/ ?>