
<?php $__env->startSection('MainContent'); ?>
<br>
<div class="container p-5">
    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mb-3">
            <h3>File Name: <span style="color: rgb(25, 25, 28);"><?php echo e($file->name); ?></span></h3>
            <h3>Folder: <span style="color: rgb(25, 25, 28);"><?php echo e($file->folder->name); ?></span> </h3>
            <h3>File Tags: <span style="color: rgb(25, 25, 28);"><?php echo e($file->file_tags); ?></span></h3>
        </div>

        <hr>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/actionfile/search.blade.php ENDPATH**/ ?>