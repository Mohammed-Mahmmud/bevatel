@props([
'value' => false,
'id' => false,
'disabledOption' => false,
'name' => false,
'label' => false,
'selectedData' => false,
'data' => false,
'span' =>false,
'class' => false,
])

<div class="{{ $class ?? 'col-12' }}">
    <label for="{{ $id }}" class="form-label">{{ $label ?? "" }}</label>
    <select class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}">
        <option value="" selected disabled>{{ $disabledOption }}</option>
        @foreach ($data as $item)
        <option value="{{ $item->id }}" @if(isset($selectedData)) {{ $item->id == $selectedData ? 'selected' : '' }} @endif>
            {{ $item->name }}
        </option>
        @endforeach
    </select>
    @if($span)
    <span class="form-text text-muted">
        Please {{ $span}}
    </span>
    @endif
    <br>
</div>
