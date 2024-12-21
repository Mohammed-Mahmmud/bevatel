<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="<?php echo e(route('mainDashboard.index')); ?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(asset('dashboard/assets/images/logo-light.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(asset('dashboard/assets/images/logo-light.png')); ?>" alt="" height="30px">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav" style="font-weight: bold;">
                <li class="menu-title"><span data-key="t-menu"><?php echo e(trans('Dashboard/sidebar.Menu')); ?></span></li>
                <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalae6b7803cb78df0cc74aa3c63153194f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalae6b7803cb78df0cc74aa3c63153194f = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\SidebarItems::resolve(['item' => $item] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.sidebar-items'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\SidebarItems::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalae6b7803cb78df0cc74aa3c63153194f)): ?>
<?php $attributes = $__attributesOriginalae6b7803cb78df0cc74aa3c63153194f; ?>
<?php unset($__attributesOriginalae6b7803cb78df0cc74aa3c63153194f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae6b7803cb78df0cc74aa3c63153194f)): ?>
<?php $component = $__componentOriginalae6b7803cb78df0cc74aa3c63153194f; ?>
<?php unset($__componentOriginalae6b7803cb78df0cc74aa3c63153194f); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/components/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>