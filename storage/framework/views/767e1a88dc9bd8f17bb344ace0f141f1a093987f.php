<?php $__env->startSection('title', 'News Upload'); ?>
<?php $__env->startSection('home', 'Henrik\'s News Site'); ?>

<?php $__env->startSection('content'); ?>
        <div class="container">
            <h2>Add new article</h2>

            <form action="/articles/store" method="post">
                <table>
                <tr>
                    <?php echo e(csrf_field()); ?>

                    <td>Title:</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Article text:</td>
                    <td><textarea type="text" name="description"></textarea></td>
                </tr>
                <tr>
                    <td>Labels:</td>
                    <td><input type="text" name="lables"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
                </table>
            </form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BackendProject\resources\views/articles/create.blade.php ENDPATH**/ ?>