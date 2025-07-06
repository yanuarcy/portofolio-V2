<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">



    <title>kartu Personal Portfolio | ROOT IDN</title>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <main>
        <?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald31f0a1d6e85408eecaaa9471b609820 = $attributes; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $attributes = $__attributesOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
        <div class="main-content">
            <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
            <article class="about active" data-page="about">
                <?php if (isset($component)) { $__componentOriginalcabc30373012b73333ffad1027234353 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcabc30373012b73333ffad1027234353 = $attributes; } ?>
<?php $component = App\View\Components\About::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\About::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcabc30373012b73333ffad1027234353)): ?>
<?php $attributes = $__attributesOriginalcabc30373012b73333ffad1027234353; ?>
<?php unset($__attributesOriginalcabc30373012b73333ffad1027234353); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcabc30373012b73333ffad1027234353)): ?>
<?php $component = $__componentOriginalcabc30373012b73333ffad1027234353; ?>
<?php unset($__componentOriginalcabc30373012b73333ffad1027234353); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal0f70ef1089d864a486e62f6bd9b44873 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f70ef1089d864a486e62f6bd9b44873 = $attributes; } ?>
<?php $component = App\View\Components\Service::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('service'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Service::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f70ef1089d864a486e62f6bd9b44873)): ?>
<?php $attributes = $__attributesOriginal0f70ef1089d864a486e62f6bd9b44873; ?>
<?php unset($__attributesOriginal0f70ef1089d864a486e62f6bd9b44873); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f70ef1089d864a486e62f6bd9b44873)): ?>
<?php $component = $__componentOriginal0f70ef1089d864a486e62f6bd9b44873; ?>
<?php unset($__componentOriginal0f70ef1089d864a486e62f6bd9b44873); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal867564707b3e77941dae1c0fd0aebcff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal867564707b3e77941dae1c0fd0aebcff = $attributes; } ?>
<?php $component = App\View\Components\Testimoni::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('testimoni'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Testimoni::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal867564707b3e77941dae1c0fd0aebcff)): ?>
<?php $attributes = $__attributesOriginal867564707b3e77941dae1c0fd0aebcff; ?>
<?php unset($__attributesOriginal867564707b3e77941dae1c0fd0aebcff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal867564707b3e77941dae1c0fd0aebcff)): ?>
<?php $component = $__componentOriginal867564707b3e77941dae1c0fd0aebcff; ?>
<?php unset($__componentOriginal867564707b3e77941dae1c0fd0aebcff); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal2ccf36a322409b76566b65fcab70ed9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ccf36a322409b76566b65fcab70ed9d = $attributes; } ?>
<?php $component = App\View\Components\Client::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('client'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Client::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ccf36a322409b76566b65fcab70ed9d)): ?>
<?php $attributes = $__attributesOriginal2ccf36a322409b76566b65fcab70ed9d; ?>
<?php unset($__attributesOriginal2ccf36a322409b76566b65fcab70ed9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ccf36a322409b76566b65fcab70ed9d)): ?>
<?php $component = $__componentOriginal2ccf36a322409b76566b65fcab70ed9d; ?>
<?php unset($__componentOriginal2ccf36a322409b76566b65fcab70ed9d); ?>
<?php endif; ?>
            </article>

            <?php if (isset($component)) { $__componentOriginalf4f55f90398bbe29e9df9657fd40b6f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf4f55f90398bbe29e9df9657fd40b6f9 = $attributes; } ?>
<?php $component = App\View\Components\Resume::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('resume'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Resume::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf4f55f90398bbe29e9df9657fd40b6f9)): ?>
<?php $attributes = $__attributesOriginalf4f55f90398bbe29e9df9657fd40b6f9; ?>
<?php unset($__attributesOriginalf4f55f90398bbe29e9df9657fd40b6f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf4f55f90398bbe29e9df9657fd40b6f9)): ?>
<?php $component = $__componentOriginalf4f55f90398bbe29e9df9657fd40b6f9; ?>
<?php unset($__componentOriginalf4f55f90398bbe29e9df9657fd40b6f9); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalecff8d897a417c1d5c1c878e98608be1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecff8d897a417c1d5c1c878e98608be1 = $attributes; } ?>
<?php $component = App\View\Components\Portofolio::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portofolio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Portofolio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecff8d897a417c1d5c1c878e98608be1)): ?>
<?php $attributes = $__attributesOriginalecff8d897a417c1d5c1c878e98608be1; ?>
<?php unset($__attributesOriginalecff8d897a417c1d5c1c878e98608be1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecff8d897a417c1d5c1c878e98608be1)): ?>
<?php $component = $__componentOriginalecff8d897a417c1d5c1c878e98608be1; ?>
<?php unset($__componentOriginalecff8d897a417c1d5c1c878e98608be1); ?>
<?php endif; ?>


            <?php if (isset($component)) { $__componentOriginal9e957fa9376c229c22c28ec4e9b6f864 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e957fa9376c229c22c28ec4e9b6f864 = $attributes; } ?>
<?php $component = App\View\Components\Blog::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Blog::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e957fa9376c229c22c28ec4e9b6f864)): ?>
<?php $attributes = $__attributesOriginal9e957fa9376c229c22c28ec4e9b6f864; ?>
<?php unset($__attributesOriginal9e957fa9376c229c22c28ec4e9b6f864); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e957fa9376c229c22c28ec4e9b6f864)): ?>
<?php $component = $__componentOriginal9e957fa9376c229c22c28ec4e9b6f864; ?>
<?php unset($__componentOriginal9e957fa9376c229c22c28ec4e9b6f864); ?>
<?php endif; ?>


            <?php if (isset($component)) { $__componentOriginal0f175370cc19626e362f7b4cb5002ea7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f175370cc19626e362f7b4cb5002ea7 = $attributes; } ?>
<?php $component = App\View\Components\Contact::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Contact::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f175370cc19626e362f7b4cb5002ea7)): ?>
<?php $attributes = $__attributesOriginal0f175370cc19626e362f7b4cb5002ea7; ?>
<?php unset($__attributesOriginal0f175370cc19626e362f7b4cb5002ea7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f175370cc19626e362f7b4cb5002ea7)): ?>
<?php $component = $__componentOriginal0f175370cc19626e362f7b4cb5002ea7; ?>
<?php unset($__componentOriginal0f175370cc19626e362f7b4cb5002ea7); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
            
        </div>
    </main>
    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\Code\VS Code\00- Template\src\Laravel\Portofolio V2\admin\resources\views/welcome.blade.php ENDPATH**/ ?>