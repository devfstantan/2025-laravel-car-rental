@props(['name','label', 'errors' => null])

<div>
    <x-form.label :for="$name" :value="$label" />
    <input  {{ $attributes->except(['label', 'errors'])->merge(['class' => 'input w-full mt-1']) }}>
    <x-form.error :messages="$errors" class="mt-2" />
</div>
