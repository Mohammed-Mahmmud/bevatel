<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['submit' => false, 'color' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['submit' => false, 'color' => false]); ?>
<?php foreach (array_filter((['submit' => false, 'color' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="modal-footer">
    <div class="hstack gap-2 justify-content-end">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">close</button>
        <button type="submit" class="btn btn-<?php echo e($color ? $color : 'success'); ?> " id="add-btn">save</button>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/components/form/submit.blade.php ENDPATH**/ ?>