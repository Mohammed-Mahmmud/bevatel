
<?php $__env->startSection('title', 'Roles'); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?php if (isset($component)) { $__componentOriginaldc389108284df2874c4495ee5f24d137 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc389108284df2874c4495ee5f24d137 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Breadcrumb::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title1' => ''.e('Roles and Permissions').'','title2' => ''.e(trans('Dashboard/users.users')).'','title3' => ''.e(trans('Dashboard/users.viewusers')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc389108284df2874c4495ee5f24d137)): ?>
<?php $attributes = $__attributesOriginaldc389108284df2874c4495ee5f24d137; ?>
<?php unset($__attributesOriginaldc389108284df2874c4495ee5f24d137); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc389108284df2874c4495ee5f24d137)): ?>
<?php $component = $__componentOriginaldc389108284df2874c4495ee5f24d137; ?>
<?php unset($__componentOriginaldc389108284df2874c4495ee5f24d137); ?>
<?php endif; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row g-1 mb-0">
                                    <div class="col-sm-auto">
                                        <a class="btn btn-success add-btn" href="<?php echo e(route('dashboard.roles.create')); ?>"
                                            data-bs-toggle="modal" data-bs-target="#showModal">Create New Role</a>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div id="customerList">
                                    <?php if (isset($component)) { $__componentOriginal3ee8e6cd618674982f34cd16ebf8436b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\ErrorVerify::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error-verify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\ErrorVerify::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => ''.e($errors).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b)): ?>
<?php $attributes = $__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b; ?>
<?php unset($__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ee8e6cd618674982f34cd16ebf8436b)): ?>
<?php $component = $__componentOriginal3ee8e6cd618674982f34cd16ebf8436b; ?>
<?php unset($__componentOriginal3ee8e6cd618674982f34cd16ebf8436b); ?>
<?php endif; ?>
                                        <div class="table">
                                            <table class="table align-middle mb-0 table_id">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>Record ID</th>
                                                        <th>
                                                            <?php echo e(trans('Dashboard/users.name')); ?></th>
                                                        <th>
                                                            <?php echo e(trans('Dashboard/users.joinDate')); ?></th>
                                                        <th>
                                                            <?php echo e(trans('Dashboard/users.action')); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    
                                                    <?php
                                                        $i = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e(1 + $key++); ?></td>
                                                            <td><?php echo e($item->name); ?></td>
                                                            <td><?php echo e($item->created_at); ?></td>
                                                            <td>
                                                                <div class="d-flex gap-2">
                                                                    <div class="edit">
                                                                        <a class="btn btn-sm btn-info edit-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#edit<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>
                                                                    </div>

                                                                    <div class="remove">
                                                                        <a class="btn btn-sm btn-danger remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- Modal -->
                                                                <form
                                                                    action="<?php echo e(route('dashboard.roles.destroy', $item->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <div class="modal fade" id="delete<?php echo e($item->id); ?>"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="exampleModalCenterTitle"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLongTitle">
                                                                                        <?php echo e(trans('Dashboard/users.remove')); ?>

                                                                                        <?php echo e($item->name); ?></h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <?php echo e(trans('Dashboard/users.delete_message') . '  ' . $item->name); ?>

                                                                                </div>
                                                                                <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => ['submit' => 'delete','color' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'delete','color' => 'danger']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <form class="tablelist-form"
                                                                    action="<?php echo e(route('dashboard.roles.update', $item)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    <div class="modal fade" id="edit<?php echo e($item->id); ?>"
                                                                        tabindex="-1" aria-labelledby="exampleModalLabel2"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog  modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-light p-3">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel2">
                                                                                        <?php echo e(trans('Dashboard/users.edit') . ' ' . $item->name); ?>

                                                                                    </h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                </div>
                                                                                <div class="modal-body"
                                                                                    style="height: 1000px">

                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <label for="name"
                                                                                                class="form-label"><?php echo e(trans('Dashboard/users.name')); ?></label>
                                                                                            <input type="text"
                                                                                                id="name"
                                                                                                name="name"
                                                                                                class="form-control"
                                                                                                placeholder="Enter user Name"
                                                                                                value="<?php echo e($item->name); ?>"
                                                                                                required="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <?php if (isset($component)) { $__componentOriginal790df7f44302ddf124043596e8ccb3ef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal790df7f44302ddf124043596e8ccb3ef = $attributes; } ?>
<?php $component = App\View\Components\Form\DropdownMultiSelect::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown-multi-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\DropdownMultiSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->permissions
                                                                                                        ->pluck(
                                                                                                            'name',
                                                                                                            'id',
                                                                                                        )
                                                                                                        ->toArray()),'label' => 'Choose Permissions:','name' => 'permission','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permissions->pluck(
                                                                                                        'name',
                                                                                                        'id',
                                                                                                    )),'span' => 'Choose Permissions:']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal790df7f44302ddf124043596e8ccb3ef)): ?>
<?php $attributes = $__attributesOriginal790df7f44302ddf124043596e8ccb3ef; ?>
<?php unset($__attributesOriginal790df7f44302ddf124043596e8ccb3ef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal790df7f44302ddf124043596e8ccb3ef)): ?>
<?php $component = $__componentOriginal790df7f44302ddf124043596e8ccb3ef; ?>
<?php unset($__componentOriginal790df7f44302ddf124043596e8ccb3ef); ?>
<?php endif; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </td>
                                                        </tr>
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                </div>
                            </div><!-- end card -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="row g-1 mb-0">
                                    <div class="col-sm-auto">
                                        <a class="btn btn-success add-btn"
                                            href="<?php echo e(route('dashboard.permissions.create')); ?>" data-bs-toggle="modal"
                                            data-bs-target="#storePermission">New Permission</a>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div id="customerList">
                                    <?php if (isset($component)) { $__componentOriginal3ee8e6cd618674982f34cd16ebf8436b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\ErrorVerify::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error-verify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\ErrorVerify::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => ''.e($errors).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b)): ?>
<?php $attributes = $__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b; ?>
<?php unset($__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ee8e6cd618674982f34cd16ebf8436b)): ?>
<?php $component = $__componentOriginal3ee8e6cd618674982f34cd16ebf8436b; ?>
<?php unset($__componentOriginal3ee8e6cd618674982f34cd16ebf8436b); ?>
<?php endif; ?>
                                        <div class="table">
                                            <table class="table align-middle mb-0 table_id">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>Record ID</th>
                                                        <th>
                                                            <?php echo e(trans('Dashboard/users.name')); ?></th>
                                                        <th>
                                                            <?php echo e(trans('Dashboard/users.joinDate')); ?></th>
                                                        <th>
                                                            <?php echo e(trans('Dashboard/users.action')); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    
                                                    <?php
                                                        $i = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e(1 + $key++); ?></td>
                                                            <td><?php echo e($item->name); ?></td>
                                                            <td><?php echo e($item->created_at); ?></td>
                                                            <td>
                                                                <div class="d-flex gap-2">
                                                                    <div class="edit">
                                                                        <a class="btn btn-sm btn-info edit-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#edit<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>
                                                                    </div>

                                                                    <div class="remove">
                                                                        <a class="btn btn-sm btn-danger remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- Modal -->
                                                                <form
                                                                    action="<?php echo e(route('dashboard.permissions.destroy', $item->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <div class="modal fade"
                                                                        id="delete<?php echo e($item->id); ?>" tabindex="-1"
                                                                        role="dialog"
                                                                        aria-labelledby="exampleModalCenterTitle"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLongTitle">
                                                                                        <?php echo e(trans('Dashboard/users.remove')); ?>

                                                                                        <?php echo e($item->name); ?></h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <?php echo e(trans('Dashboard/users.delete_message') . '  ' . $item->name); ?>

                                                                                </div>
                                                                                <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => ['submit' => 'delete','color' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'delete','color' => 'danger']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <form class="tablelist-form"
                                                                    action="<?php echo e(route('dashboard.permissions.update', $item)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    <div class="modal fade" id="edit<?php echo e($item->id); ?>"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel2"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog  modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-light p-3">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel2">
                                                                                        <?php echo e(trans('Dashboard/users.edit') . ' ' . $item->name); ?>

                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <label for="name"
                                                                                                class="form-label"><?php echo e(trans('Dashboard/users.name')); ?></label>
                                                                                            <input type="text"
                                                                                                id="name"
                                                                                                name="name"
                                                                                                class="form-control"
                                                                                                placeholder="Enter user Name"
                                                                                                value="<?php echo e($item->name); ?>"
                                                                                                required="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </td>
                                                        </tr>
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                
                <form class="tablelist-form" action="<?php echo e(route('dashboard.permissions.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal fade" id="storePermission" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Create New Permission
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="" action="" method="">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="name"
                                                    class="form-label"><?php echo e(trans('Dashboard/users.name')); ?></label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    placeholder="<?php echo e(trans('Dashboard/users.name')); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => ['submit' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'submit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                
                
                <form class="tablelist-form" action="<?php echo e(route('dashboard.roles.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Create New Role
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="" action="" method="">
                                    <div class="modal-body" style="height: 1000px">
                                        <div class="mb-3 row">
                                            <div class="col-12">
                                                <label for="name"
                                                    class="form-label"><?php echo e(trans('Dashboard/users.name')); ?></label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    placeholder="<?php echo e(trans('Dashboard/users.name')); ?>" required>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php if (isset($component)) { $__componentOriginal790df7f44302ddf124043596e8ccb3ef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal790df7f44302ddf124043596e8ccb3ef = $attributes; } ?>
<?php $component = App\View\Components\Form\DropdownMultiSelect::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown-multi-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\DropdownMultiSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Choose Permissions:','name' => 'permission','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permissions->pluck('name', 'id')),'span' => 'Choose Permissions:']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal790df7f44302ddf124043596e8ccb3ef)): ?>
<?php $attributes = $__attributesOriginal790df7f44302ddf124043596e8ccb3ef; ?>
<?php unset($__attributesOriginal790df7f44302ddf124043596e8ccb3ef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal790df7f44302ddf124043596e8ccb3ef)): ?>
<?php $component = $__componentOriginal790df7f44302ddf124043596e8ccb3ef; ?>
<?php unset($__componentOriginal790df7f44302ddf124043596e8ccb3ef); ?>
<?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => ['submit' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'submit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <i class="bi bi-trash3 display-5 text-danger"></i>
                                    <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                        <h4>Are you Sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Grade ?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-info"
                                        data-bs-dismiss="modal"><?php echo e(trans('Dashboard/users.close')); ?></button>
                                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete
                                        It!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/pages/roles/index.blade.php ENDPATH**/ ?>