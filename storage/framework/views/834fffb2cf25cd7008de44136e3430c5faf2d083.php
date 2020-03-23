<?php $__currentLoopData = $article ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1> Title of the article: <?php echo e($news->title); ?> </h1>
    <p> Here is the news: <?php echo e($news->description); ?> </p>
    <p> Here are the labels: <?php echo e($news->labels); ?> </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\BackendProject\resources\views/Articles/index.blade.php ENDPATH**/ ?>