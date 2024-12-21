@props([
    'value' => false,
    'id' => false,
    'type' => false,
    'name' => false,
    'label' => false,
    'required' => false,
    'placeholder' => false,
    'span',
    'class' => false,
    'multiple' => false,
    'readonly' => false,
    'disabled' => false,
])
<style>
    input:required:invalid {
        border-color: red;
    }
</style>

<div class="{{ $class ?? 'col-12' }}" style="text-transform: capitalize;">
    <label for="{{ $id ?? '' }}" class="form-label">{{ $label ?? '' }}</label>
    <input type="{{ $type }}" class="form-control" placeholder="{{ $placeholder ?? '' }}" id="{{ $id ?? '' }}"
        name="{{ $name }}" @if ($value) value="{{ $value }}" @endif
        @if ($required) required @endif @if ($readonly) readonly @endif
        @if ($disabled) disabled @endif>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
    {{-- <span class="form-text text-muted">Please {{ $span ?? $placeholder }} </span> --}}
    <br>
</div>
