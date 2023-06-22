@props(['type', 'name', 'label', 'value'])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        {{ $attributes->merge(['class' => 'form-control']) }}>
</div>
