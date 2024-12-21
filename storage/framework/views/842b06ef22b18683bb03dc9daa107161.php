<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['data', 'label' => false, 'name', 'span' => false, 'value' => [], 'search' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['data', 'label' => false, 'name', 'span' => false, 'value' => [], 'search' => false]); ?>
<?php foreach (array_filter((['data', 'label' => false, 'name', 'span' => false, 'value' => [], 'search' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<label for="multiSelected" class="form-label"><?php echo e(ucfirst($label) ?? ''); ?></label>

<select name="<?php echo e($name); ?>[]" multiple multiselect-search="<?php echo e($search ? 'true' : 'false'); ?>"
    data-placeholder="Choose an Option" multiselect-select-all="true" id="multiSelected">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item); ?>" <?php echo e(isset($value) && in_array($item, $value) ? 'selected' : ''); ?>>
            <?php echo e(ucfirst($item)); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/components/form/dropdown-multi-select.blade.php ENDPATH**/ ?>