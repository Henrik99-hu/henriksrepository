<?php $__env->startSection('title', 'Statistics'); ?>
<?php $__env->startSection('home', 'Henrik\'s News Site'); ?>

<?php $__env->startSection('content'); ?>
    <div class='container'>
        <h1> Statisztikák </h1>
        <p>Top 10 használt címke:<br>
        </p>
        <p>Melyik cikkben van a legtöbb szó?<br>
        <?php echo e($mostWords); ?></p>
        <p>Hány karakteres cikkeket vettünk fel átlagban?<br>
        <?php echo e($dailyAvgChars); ?></p>
        <p>Naponta mennyi cikket vettünk fel?<br>
        <?php echo e($articlesPerDay); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BackendProject\resources\views/articles/statistics.blade.php ENDPATH**/ ?>