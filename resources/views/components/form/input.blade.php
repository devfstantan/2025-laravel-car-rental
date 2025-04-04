@props(['name', 'value', 'label', 'errors' => null])

<div>
    <x-form.label
        :for="$name"
        :value="$label"
    />
    <input
        {{ $attributes->merge(['class' => 'input w-full mt-1']) }}
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value }}"
    />
    <x-form.error
        :messages="$errors"
        class="mt-2"
    />
</div>
