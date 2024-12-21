@props(['data', 'label' => false, 'name', 'span' => false, 'value' => [], 'search' => false])
<label for="multiSelected" class="form-label">{{ ucfirst($label) ?? '' }}</label>
{{-- {{ dd($value) }} --}}
<select name="{{ $name }}[]" multiple multiselect-search="{{ $search ? 'true' : 'false' }}"
    data-placeholder="Choose an Option" multiselect-select-all="true" id="multiSelected">
    @foreach ($data as $item)
        <option value="{{ $item }}" {{ isset($value) && in_array($item, $value) ? 'selected' : '' }}>
            {{ ucfirst($item) }}
        </option>
    @endforeach
</select>
