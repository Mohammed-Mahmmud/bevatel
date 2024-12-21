
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .blur-background {
            backdrop-filter: blur(10px);
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section
        class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100"style="background-image: url('<?php echo e(asset('dashboard/assets/login-bg.png')); ?>'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-11" style="width:auto">
                    <div class="card mb-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-xxl-10 mx-auto" style="position: relative; z-index: 1;">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-100 m-lg-1">
                                        <div class="text-center mt-1">
                                            <h5 class="fs-3xl"><?php echo e(trans('Dashboard/login_trans.Welcome Back')); ?></h5>
                                        </div>
                                        <div class="p-1 mt-1">

                                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php if(App::getLocale() == 'ar'): ?>
                                                    <div class="mb-3" dir="rtl">
                                                    <?php else: ?>
                                                        <div class="mb-3">
                                                <?php endif; ?>
                                                <label for="email"
                                                    class="form-label"><?php echo e(trans('Dashboard/login_trans.Email')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative ">
                                                    <input type="email" name="email"
                                                        class="form-control  password-input" id="email"
                                                        :value="old('email')" placeholder="Enter email" required autofocus
                                                        autocomplete="email">

                                                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                                                </div>
                                        </div>

                                        <?php if(App::getLocale() == 'ar'): ?>
                                            <div class="mb-3" dir="rtl">
                                            <?php else: ?>
                                                <div class="mb-3">
                                        <?php endif; ?>
                                        <label class="form-label"
                                            for="password-input"><?php echo e(trans('Dashboard/login_trans.Password')); ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="position-relative auth-pass-inputgroup mb-3 ">
                                            <input type="password" id="password" name="password"
                                                class="form-control pe-5 password-input " placeholder="Enter password"
                                                id="password-input" required autocomplete="current-password">
                                            <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('password'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember_me"
                                            name="remember">
                                        <label class="form-check-label"
                                            for="remember_me"><?php echo e(trans('Dashboard/login_trans.Remember me')); ?>

                                        </label>
                                    </div>
                                    <br>


                                    <button class="btn btn-primary w-100"
                                        type="submit"><?php echo e(trans('Dashboard/login_trans.login')); ?></button>
                                </div>


                                </form>
                                <?php if(App::getLocale() == 'ar'): ?>
                                    <div class="text-center mt-5" dir="rtl">
                                    <?php else: ?>
                                        <div class="text-center mt-5">
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        </div>
        </div>
        <!--end col-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('dashboard')); ?>/assets/js/pages/password-addon.init.js"></script>
    <!--Swiper slider js-->
    <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- swiper.init js -->
    <script src="<?php echo e(asset('dashboard')); ?>/assets/js/pages/swiper.init.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.auth.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/auth/signin.blade.php ENDPATH**/ ?>