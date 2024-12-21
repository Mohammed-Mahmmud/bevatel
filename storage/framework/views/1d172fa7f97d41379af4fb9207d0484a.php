<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="dark" data-bs-theme="light">

<head>
    <?php echo $__env->make('dashboard.layouts.main-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php if (isset($component)) { $__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2)): ?>
<?php $attributes = $__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2; ?>
<?php unset($__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2)): ?>
<?php $component = $__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2; ?>
<?php unset($__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2); ?>
<?php endif; ?>
        <?php echo $__env->make('dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('dashboard.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/layouts/master.blade.php ENDPATH**/ ?>