<section class="service">
    <h3 class="h3 service-title">What I'm Currently Doing</h3>

    <ul class="service-list">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="service-item">
                <div class="service-icon-box">
                    <img src="<?php echo e(asset('storage/' . $item->image)); ?>

    " alt="design icon" width="40" />
                </div>

                <div class="service-content-box">
                    <h4 class="h4 service-item-title"><?php echo e($item->name); ?></h4>

                    <p class="service-item-text"><?php echo e($item->description); ?></p>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</section>
<?php /**PATH D:\Code\VS Code\00- Template\src\Laravel\Portofolio V2\admin\resources\views/components/service.blade.php ENDPATH**/ ?>