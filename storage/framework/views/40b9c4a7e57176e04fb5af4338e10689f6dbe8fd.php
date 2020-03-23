<!DOCTYPE html>
<html>



<?php $__env->startSection('title', 'Articles'); ?>
<?php $__env->startSection('home', 'Henrik\'s News Site'); ?>

<?php $__env->startSection('content'); ?>
    <div class='container'>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1> <a href='/articles/<?php echo e($article->id); ?>'> Title: <?php echo e($article->title); ?> </a></h1>
            <p> The article: <?php echo e($article->description); ?> </p>
            <p> Labels: <?php echo e($article->lables); ?> </p>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <?php $__env->startSection('navi'); ?>
        <div class='container'>
            <?php echo e($articles->links()); ?>

            <a href='<?php echo url(route('navigation'));; ?>'>Home</a><br>
            <a href='<?php echo url(route('sortedByDate'));; ?>'>Sort by date</a>
        </div>
    <?php $__env->stopSection(); ?>
    
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BackendProject\resources\views/articles/index.blade.php ENDPATH**/ ?>