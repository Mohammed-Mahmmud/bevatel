<!doctype html>
<html lang="en" data-layout="vertical" data-layout-width="fluid" data-layout-position="scrollable" data-sidebar="dark" data-preloader="enable" data-theme="light" data-topbar="dark" data-bs-theme="light">


<head>
    <?php echo $__env->make('dashboard.layouts.main-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php if(App::getLocale()== "ar"): ?>
        <div dir="rtl">
            <?php else: ?>
            <div>
                <?php endif; ?>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('dashboard.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/layouts/auth/auth-master.blade.php ENDPATH**/ ?>