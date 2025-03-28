@props(['value', 'currency' => 'MAD', 'variant' => 'default'])
@php
    $intValue = number_format(floor($value), 0, '.', ' ');
    $decimals = substr(number_format($value, 2), -2);
@endphp
@switch($variant)
    @case('small')
    @case(2)
        <span class="text-primary font-semibold text-xl mt-1">
            {{ $intValue }}<span class="text-sm">.{{ $decimals }}</span>
            <span class="text-xs text-gray-400">
                {{ $currency }}
            </span>
        </span>
    @break

    @default
        <span class="text-primary font-semibold text-3xl mt-2">
            {{ $intValue }}<span class="text-sm">.{{ $decimals }}</span>
            <span class="text-xs text-gray-400">
                {{ $currency }}
            </span>
        </span>
@endswitch
