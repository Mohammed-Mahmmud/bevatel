<link rel="stylesheet" href="<?php echo e(asset('dashboard/layouts/components/sidebar/css/style.css')); ?>">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($item->name)): ?>
    <li class="nav-item">
        <?php if(!empty($item->route)): ?>
            <a href="<?php echo e(!empty($item->type) ? route($item->route, ['type' => $item->type]) : route($item->route)); ?>"
                class="nav-link
        <?php if(Request::fullUrl() === (!empty($item->type) ? route($item->route, ['type' => $item->type]) : route($item->route))): ?> activeSidebar <?php endif; ?>" data-key="t-detached">
                <?php if($item->icon): ?>
                    <i class="<?php echo e($item->icon); ?>"></i>
                <?php endif; ?>
                <?php echo e(ucwords($item->name)); ?>

            </a>
        <?php else: ?>
            <a class="nav-link" href="#<?php echo e($item->id); ?>" data-bs-toggle="collapse" role="button" aria-expanded="true"
                aria-controls="<?php echo e($item->id); ?>">
                <?php if($item->icon): ?>
                    <i class="<?php echo e($item->icon); ?>"></i>
                <?php endif; ?>
                <span data-key="t-multi-level"><?php echo e(ucwords($item->name)); ?></span>
            </a>
        <?php endif; ?>
        <div class="collapse menu-dropdown" id="<?php echo e($item->id); ?>">
            <?php if($item->child->count() > 0): ?>
                <ul class="nav nav-sm flex-column">
                    <?php $__currentLoopData = $item->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalae6b7803cb78df0cc74aa3c63153194f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalae6b7803cb78df0cc74aa3c63153194f = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\SidebarItems::resolve(['item' => $child] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <?php endif; ?>
        </div>
    </li>
<?php endif; ?>
<script src="<?php echo e(asset('dashboard/layouts/components/sidebar/js/script.js')); ?>"></script>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/components/dashboard/layouts/sidebar-items.blade.php ENDPATH**/ ?>