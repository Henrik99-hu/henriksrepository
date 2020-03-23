<?php $__env->startSection('title', 'Directly asked article'); ?>
<?php $__env->startSection('home', 'Henrik\'s News Site'); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($article->title); ?></h1>
<p><?php echo e($article->description); ?></p>
<p><?php echo e($article->lables); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navi'); ?>
<a href='<?php echo url(route('mainList'));; ?>'>Back to all news</a><br>
<a href='<?php echo url(route('sortedByDate'));; ?>'>Back to sorted news</a><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BackendProject\resources\views/articles/show.blade.php ENDPATH**/ ?>