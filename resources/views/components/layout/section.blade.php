@props(['title', 'actions'])

<section class="bg-base-100 rounded-2xl p-8 mb-8">
    {{-- Section Header --}}
    @if (isset($title) || isset($actions))
        <div class="flex justify-between items-center border-b-2 border-base-200 pb-2 mb-4">
            {{-- title area --}}
            <div>
                @isset($title)
                    <h3 class="font-semibold text-xl">{{ $title }}</h3>
                @endisset
            </div>
            {{-- actions area --}}
            <div>
                @isset($actions)
                    {{ $actions }}
                @endisset
            </div>
        </div>
    @endif
    
    {{-- Section Content --}}
    <div>
        {{ $slot }}
    </div>
</section>
