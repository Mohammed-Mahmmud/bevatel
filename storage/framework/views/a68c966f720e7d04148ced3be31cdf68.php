
<?php $__env->startSection('title', 'Blogs'); ?>
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
<?php $component->withAttributes(['title1' => 'Blogs','title2' => 'Posts','title3' => 'view Posts']); ?>
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
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('createBlog')): ?>
                                        <div class="col-sm-auto">
                                            <a class="btn btn-success add-btn" href="<?php echo e(route('blogs.create')); ?>"
                                                data-bs-toggle="modal"
                                                data-bs-target="#createNewBlog"><?php echo e(ucwords('add blog')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('exportBlogExcel')): ?>
                                        <div class="col-sm-auto">
                                            <a class="btn btn-info add-btn"
                                                href="<?php echo e(route('blogs.export')); ?>"><?php echo e(ucwords('export blogs')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('importBlogExcel')): ?>
                                        <div class="col-sm-auto">
                                            <a class="btn btn-danger add-btn" href="" data-bs-toggle="modal"
                                                data-bs-target="#importBlogs"><?php echo e(ucwords('import blogs')); ?></a>
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
                                                    <th width="20%">
                                                        Title</th>
                                                    <th width="10%">
                                                        Author</th>
                                                    <th width="20%">
                                                        slug</th>
                                                    <th width="30%">
                                                        Image</th>
                                                    <th width="10%">
                                                        action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($item->title); ?></td>
                                                        <td><?php echo e($item->user->name); ?></td>
                                                        <td><?php echo e($item->slug); ?></td>
                                                        <td>
                                                            <?php if($item->getFirstMediaUrl($item->slug)): ?>
                                                                <img src="<?php echo e($item->getFirstMediaUrl($item->slug)); ?>"
                                                                    class="w-50 rounded object-cover" height="80">
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editBlog')): ?>
                                                                    <div class="edit">
                                                                        <a class="btn btn-sm btn-info edit-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#edit<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>
                                                                    </div>

                                                                    <?php if (isset($component)) { $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'edit' . $item->id,'title' => 'update blog','action' => route('blogs.update', $item->id),'method' => 'PUT']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('edit' . $item->id),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('update blog'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('blogs.update', $item->id)),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('PUT')]); ?>
                                                                        <div class="col-6">
                                                                            <label for="title" class="form-label">Blog
                                                                                title</label>
                                                                            <input type="text" id="title" name="title"
                                                                                value="<?php echo e($item->title ?? ''); ?>"
                                                                                class="form-control" placeholder="Blog title"
                                                                                required>
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('title')]); ?>
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
                                                                            <label for="slug"
                                                                                class="form-label">slug</label>
                                                                            <input type="text" id="slug" name="slug"
                                                                                class="form-control"
                                                                                placeholder="Enter Updated slug"
                                                                                value="<?php echo e($item->slug ?? ''); ?>" required>
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'slug']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('slug')]); ?>
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
                                                                        <div class="col-12">
                                                                            <label for="content"
                                                                                class="form-label">content</label>
                                                                            <textarea id="content" name="content" class="form-control" placeholder=" Enter blog content" required rows="5"><?php echo e($item->content ?? ''); ?></textarea>
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'content']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('content')]); ?>
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
                                                                            <label for="image"
                                                                                class="form-label">image</label>
                                                                            <input type="file" id="image" name="image"
                                                                                class="form-control"
                                                                                placeholder=" Enter blog image"
                                                                                accept="image/*">
                                                                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('image')]); ?>
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
                                                                        <?php if(auth()->user()->hasRole('Admin')): ?>
                                                                            <div class="col-6">
                                                                                <label class="form-label">Choose Author</label>
                                                                                <select class="form-control" id="user_id"
                                                                                    data-choices="" data-choices-search-false=""
                                                                                    data-choices-removeitem="" name="user_id">
                                                                                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($author->id); ?>"
                                                                                            <?php echo e($author->id == $item->user_id ? 'selected' : ''); ?>>
                                                                                            <?php echo e(ucfirst($author->name)); ?>

                                                                                        </option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                                <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'user_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('user_id')]); ?>
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
                                                                        <?php else: ?>
                                                                            <input type="hidden" name="user_id"
                                                                                value="<?php echo e(auth()->user()->id); ?>">
                                                                        <?php endif; ?>
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
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteBlog')): ?>
                                                                    <div class="remove">
                                                                        <a class="btn btn-sm btn-danger remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete<?php echo e($item->id); ?>">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('createBlog')): ?>
                                                                    <?php if (isset($component)) { $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'delete' . $item->id,'title' => 'Remove Blog','action' => route('blogs.destroy', $item->id),'method' => 'DELETE']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('delete' . $item->id),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Remove Blog'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('blogs.destroy', $item->id)),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('DELETE')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'createNewBlog','title' => 'Add Blog','action' => route('blogs.store'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('createNewBlog'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Add Blog'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('blogs.store')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('POST')]); ?>
                    <div class="col-6">
                        <label for="title" class="form-label">Blog title</label>
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Blog title" required>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('title')]); ?>
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
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" id="slug" name="slug" class="form-control"
                            placeholder="Enter Updated slug" value="" required>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'slug']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('slug')]); ?>
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
                    <div class="col-12">
                        <label for="content" class="form-label">content</label>
                        <textarea id="content" name="content" class="form-control" placeholder=" Enter blog content" required
                            rows="5"></textarea>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'content']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('content')]); ?>
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
                        <label for="image" class="form-label">image</label>
                        <input type="file" id="image" name="image" class="form-control"
                            placeholder=" Enter blog image" required accept="image/*">
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('image')]); ?>
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
                    <?php if(auth()->user()->hasRole('Admin')): ?>
                        <div class="col-6">
                            <label class="form-label">Choose Author</label>
                            <select class="form-control" id="user_id" data-choices="" data-choices-search-false=""
                                data-choices-removeitem="" name="user_id">
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($author->id); ?>">
                                        <?php echo e(ucfirst($author->name)); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'user_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('user_id')]); ?>
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
                    <?php else: ?>
                        <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
                    <?php endif; ?>
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
                <?php if (isset($component)) { $__componentOriginal2de41bd58e79fb25b173007b6f0eaf19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2de41bd58e79fb25b173007b6f0eaf19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.modal','data' => ['id' => 'importBlogs','title' => 'import Blog','action' => route('blogs.import'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('importBlogs'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('import Blog'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('blogs.import')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('POST')]); ?>
                    <div class="col-6">
                        <label for="title" class="form-label">Blogs images</label>
                        <input type="file" id="images" name="images[]" class="form-control"
                            placeholder="Blog images" required accept="image/*" multiple>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'images']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('images')]); ?>
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
                        <label for="file" class="form-label">Blogs Excel File</label>
                        <input type="file" id="file" name="file" class="form-control"
                            placeholder="Enter Updated file" required accept=".xls,.xlsx,.xlsm,.ods,.ots">
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'file']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('file')]); ?>
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

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/pages/blogs/view.blade.php ENDPATH**/ ?>