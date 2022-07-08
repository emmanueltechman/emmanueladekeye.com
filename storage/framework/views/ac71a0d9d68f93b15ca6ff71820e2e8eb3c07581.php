<div class="row">
    <div class="col-12">
        <?php if($message = Session::get('success')): ?>
            <div id="alert_message" class="alert alert-success custom-alert alert-dismissible fade show" role="alert">
                <span><?php echo e(__($message)); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if($message = Session::get('warning')): ?>
            <div id="alert_message" class="alert alert-warning custom-alert alert-dismissible fade show" role="alert">
                <span><?php echo e(__($message)); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div id="alert_message" class="alert alert-danger custom-alert alert-dismissible fade show" role="alert">
                <strong><?php echo e(__('Whoops!')); ?></strong> <?php echo e(__('There were some problems with your input.')); ?><br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e(__($error)); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\tempo\resources\views/admin/alert/alert.blade.php ENDPATH**/ ?>