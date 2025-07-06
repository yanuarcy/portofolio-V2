<article class="portfolio" data-page="portfolio">
    <header>
        <h2 class="h2 article-title">Portfolio</h2>
    </header>

    <section class="projects">
        <ul class="filter-list">
            <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
            </li>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="filter-item">
                    <button data-filter-btn><?php echo e($item->name); ?></button>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <div class="filter-select-box">
            <button class="filter-select" data-select>
                <div class="select-value" data-selecct-value>Select category</div>

                <div class="select-icon">
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
            </button>

            <ul class="select-list">
                <li class="select-item">
                    <button data-select-item>All</button>
                </li>

                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="select-item">
                        <button data-select-item><?php echo e($item->name); ?></button>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <ul class="project-list">
            <?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="project-item active" data-filter-item
                    data-category="<?php echo e(strtolower($item->fieldOfSkill->name)); ?>">
                    <a href="<?php echo e(route('project.show', Crypt::encrypt($item->id))); ?>">
                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->name); ?>"
                                loading="lazy" />
                        </figure>

                        <h3 class="project-title"><?php echo e($item->name); ?></h3>

                        <p class="project-category"><?php echo e($item->fieldOfSkill->name); ?></p>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
</article>
<?php /**PATH D:\Code\VS Code\00- Template\src\Laravel\Portofolio V2\admin\resources\views/components/portofolio.blade.php ENDPATH**/ ?>