@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-400']) }}>
    {{ $value ?? $slot }}
</label> 