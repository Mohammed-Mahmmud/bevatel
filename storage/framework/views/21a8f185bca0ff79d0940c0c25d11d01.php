<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title1' => false,
    'title2' => false,
    'title3' => false,
    'route' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title1' => false,
    'title2' => false,
    'title3' => false,
    'route' => false,
]); ?>
<?php foreach (array_filter(([
    'title1' => false,
    'title2' => false,
    'title3' => false,
    'route' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0"><?php echo e($title1 ?? ''); ?></h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo e($route); ?>"><?php echo e($title2 ?? ''); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e($title3 ?? ''); ?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/components/dashboard/layouts/breadcrumb.blade.php ENDPATH**/ ?>