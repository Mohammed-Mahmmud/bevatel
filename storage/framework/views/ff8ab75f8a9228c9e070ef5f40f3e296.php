
<?php $__env->startSection('title', 'Users'); ?>
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
<?php $component->withAttributes(['title1' => 'Users','title2' => 'Users','title3' => 'view users']); ?>
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
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.create')): ?>
                                        <div class="col-sm-auto">
                                            <a class="btn btn-success add-btn" href="<?php echo e(route('users.create')); ?>"
                                                data-bs-toggle="modal" data-bs-target="#createNewUser">add user</a>
                                        </div>
                                    <?php endif; ?>
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
<?php $component->withAttributes(['errors' => ''.e($errors).'']); ?>
<?php echo $__env->renderComponent(); ?>
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
                                                    <th width="10%">#</th>
                                                    <th width="30%">
                                                        name</th>
                                                    <th width="20%">
                                                        role</th>
                                                    <th width="30%">
                                                        email</th>
                                                    <th width="20%">
                                                        action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($item->name); ?></td>
                                                        <td><?php echo e($item->roles->value('name')); ?></td>
                                                        <td><?php echo e($item->email); ?></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.edit')): ?>
                                                                    <div class="edit">
                                                                        <a class="btn btn-sm btn-info edit-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#edit<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>
                                                                    </div>

                                                                    <?php if (isset($component)) { $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'edit' . $item->id,'title' => 'update user','action' => route('users.update', $item->id),'method' => 'PUT']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('edit' . $item->id),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('update user'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.update', $item->id)),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('PUT')]); ?>
                                                                        <div class="col-6">
                                                                            <label for="name" class="form-label">user
                                                                                name</label>
                                                                            <input type="text" id="name" name="name"
                                                                                class="form-control"
                                                                                placeholder="Enter user Name"
                                                                                value="<?php echo e($item->name); ?>" required="">
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('name')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="email"
                                                                                class="form-label">email</label>
                                                                            <input type="text" id="email" name="email"
                                                                                class="form-control"
                                                                                placeholder=" Enter admin email"
                                                                                value="<?php echo e($item->email); ?>" required="">
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('email')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="password"
                                                                                class="form-label">password</label>
                                                                            <input type="password" id="password"
                                                                                name="password" class="form-control"
                                                                                placeholder="Enter Updated Password"
                                                                                required="" value="<?php echo e($item->password); ?>">
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('password')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                                                                        </div>
                                                                        <div class="col-xxl-2 col-sm-6">
                                                                            <label class="form-label">Choose
                                                                                User Role</label>
                                                                            <select class="form-control" id="userRole"
                                                                                data-choices="" data-choices-search-false=""
                                                                                data-choices-removeitem="" name="roles">
                                                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($role->name); ?>"
                                                                                        <?php echo e($item->roles->pluck('name')->contains($role->name) ? 'selected' : ''); ?>>
                                                                                        <?php echo e(ucfirst($role->name)); ?>

                                                                                    </option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'roles']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('roles')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                                                                        </div>
                                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19)): ?>
<?php $attributes = $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19; ?>
<?php unset($__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2de41bd58e79fb25b173007b6f0eaf19)): ?>
<?php $component = $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19; ?>
<?php unset($__componentOriginal2de41bd58e79fb25b173007b6f0eaf19); ?>
<?php endif; ?>
                                                                <?php endif; ?>
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.destroy')): ?>
                                                                    <div class="remove">
                                                                        <a class="btn btn-sm btn-danger remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.create')): ?>
                                                                    <?php if (isset($component)) { $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'delete' . $item->id,'title' => 'Remove User','action' => route('users.destroy', $item->id),'method' => 'DELETE']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('delete' . $item->id),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Remove User'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.destroy', $item->id)),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('DELETE')]); ?>
                                                                        <div class="col-12">
                                                                            <?php echo e('Are You Sure You Want To Remove' . '  ' . $item->name); ?>

                                                                        </div>
                                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19)): ?>
<?php $attributes = $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19; ?>
<?php unset($__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2de41bd58e79fb25b173007b6f0eaf19)): ?>
<?php $component = $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19; ?>
<?php unset($__componentOriginal2de41bd58e79fb25b173007b6f0eaf19); ?>
<?php endif; ?>
                                                                <?php endif; ?>
                                                            </div>
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

                <?php if (isset($component)) { $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'createNewUser','title' => 'Add User','action' => route('users.store'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('createNewUser'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Add User'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.store')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('POST')]); ?>
                    <div class="col-6">
                        <label for="name" class="form-label">user name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="user name"
                            required>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('name')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                    </div>
                    <div class="col-6">
                        <label for="email" class="form-label">email</label>
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder=" Enter admin email" required>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('email')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                    </div>
                    <div class="col-6">
                        <label for="password" class="form-label">password</label>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Enter Updated Password" value="" required>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('password')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Choose User Role</label>
                        <select class="form-control" id="userRole" data-choices="" data-choices-search-false=""
                            data-choices-removeitem="" name="roles">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->name); ?>">
                                    <?php echo e(ucfirst($role->name)); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'roles']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('roles')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19)): ?>
<?php $attributes = $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19; ?>
<?php unset($__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2de41bd58e79fb25b173007b6f0eaf19)): ?>
<?php $component = $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19; ?>
<?php unset($__componentOriginal2de41bd58e79fb25b173007b6f0eaf19); ?>
<?php endif; ?>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/pages/users/view.blade.php ENDPATH**/ ?>