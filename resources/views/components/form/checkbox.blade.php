@props([
   'value' =>false,
    'id'   =>false ,
    'name' =>false ,
    'label'=>false ,
    'required' => false,
    'span'       =>false,
    'class'      =>false,
    'style'=>false

])

<div class="form-check {{ $class ?? "col-12" }}">
    <div style="{{$style}}" >
        <label class="form-check-label" for="{{ $id }}" >{{ $label }}</label>
        <input class="form-check-input  {{ $class }}" type="checkbox" role="switch" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" {{ old($name, $value) == 1 ? 'checked' : '' }} @if($required) required @endif>
        @if($span)
        @endif

    </div>
</div>
