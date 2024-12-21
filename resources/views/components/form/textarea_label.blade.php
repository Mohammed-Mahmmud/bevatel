@props([
   'value' =>false,
    'id'   =>false ,
    'type' =>false ,
    'name' =>false ,
    'label'=>false ,
    'required' => false,
    'placeholder'=>false,
    'span'       =>false,
    'class'      =>false,
    'multiple' =>false,
    'rows'      =>false,    

])

<div class="{{ $class ?? 'col-12' }}" style="text-transform: capitalize;">
    <label for="exampleFormControlTextarea5" class="form-label">{{ $label ?? "" }}</label>
    <textarea  class="form-control" placeholder="{{ $placeholder ?? '' }}"  style="white-space: pre-line;" 
         id="exampleFormControlTextarea5" name="{{ $name }}"  
           rows="{{ $rows ?? 4 }}"   @if($required) required @endif >
          {{ $value ?? "" }}
                </textarea>
    <span class="form-text text-muted">Please  
    @if(isset($span))  
    {{ $span }}
     @elseif (isset($placeholder))
        {{ $placeholder }}
     @else
     {{ $label }} 
    @endif
    </span>
    <br><br>
</div>
