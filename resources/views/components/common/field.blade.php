@props(['title'])
<div class="p-2">

    @isset($title)
        <span class="block text-sm  text-gray-400">{{ $title }}</span>
    @endisset

    {{ $slot }}
</div>
