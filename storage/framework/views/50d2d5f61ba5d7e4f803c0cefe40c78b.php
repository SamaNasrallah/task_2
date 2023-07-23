
<?php $__env->startSection('MainContent'); ?>
    <br>
    <div class="container p-5">
        <div class="mb-3">
            <h3>Name: <span style="color: rgb(25, 25, 28);"><?php echo e($file->name); ?></span></h3>
        </div>
        <div class="mb-3">
            <h3>Extension: <span style="color: rgb(25, 25, 28);"><?php echo e($file->extension); ?></span></h3>
        </div>
        <div class="mb-3">
            <h3>File Link: <span style="color: rgb(25, 25, 28);"><?php echo e($file->file_link); ?></span> </h3>
        </div>
        <div class="mb-3">
            <h3>File Tags: <span style="color: rgb(25, 25, 28);"><?php echo e($file->file_tags); ?></span></h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/actionfile/show.blade.php ENDPATH**/ ?>