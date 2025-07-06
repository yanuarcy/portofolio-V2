<article class="blog" data-page="blog">
    <header>
        <h2 class="h2 article-title">Blog</h2>
    </header>

    <section class="blog-posts">
        <ul class="blog-posts-list">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="blog-post-item">
                    <a href="<?php echo e(route('blog.show', Crypt::encrypt($item->id))); ?>">
                        <figure class="blog-banner-box">
                            <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="Design conferences in 2022"
                                loading="lazy" />
                        </figure>

                        <div class="blog-content">
                            <div class="blog-meta">
                                

                                <span class="dot"></span>

                                <time
                                    datetime="2022-02-23"><?php echo e(\Carbon\Carbon::parse($item->created_at)->diffForHumans()); ?></time>
                            </div>

                            <h3 class="h3 blog-item-title"><?php echo e($item->title); ?></h3>

                            <p class="blog-text">
                                <?php echo e(Str::limit(strip_tags(html_entity_decode($item->description)), 100, '...')); ?></p>


                        </div>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
</article>
<?php /**PATH D:\Code\VS Code\00- Template\src\Laravel\Portofolio V2\admin\resources\views/components/blog.blade.php ENDPATH**/ ?>