@props([
    'name',
    'label', // label
    'value' => '', // selected value
    'errors' => null,
    'choices' => [], // array of choices must have value and label keys
    'emptyLabel' => null, // empty option label
])
<div>
    @isset($label)
        <x-form.label :for="$name" :value="$label" />
    @endisset
    <select id="{{$name}}" name="{{$name}}" {{ $attributes->merge(['class' => 'select w-full']) }}>
        @isset($emptyLabel)
            <option value="">{{ $emptyLabel }}</option>
        @endisset
        @foreach ($choices as $choice)
            <option value="{{ $choice['value'] }}" @selected($value == $choice['value'])>
                {{ $choice['label'] }}
            </option>
        @endforeach
    </select>
    @isset($errors)
        <x-form.error :messages="$errors" class="mt-2" />
    @endisset
</div>
