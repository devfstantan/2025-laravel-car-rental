<x-layout.app title="Locations">
    <x-slot:actions>
        <a href="{{ route('rentals.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
            Nouvelle Location
        </a>
    </x-slot>
    <x-layout.section title="">
        {{-- Filter --}}
        <x-slot:actions>
            <x-rentals.filter-form />
        </x-slot:actions>
        {{-- Rentals list --}}
        <div class="flex flex-col gap-4">
            @foreach ($rentals as $rental)
                <x-rentals.card :rental="$rental" />
            @endforeach
        </div>
    </x-layout.section>

</x-layout.app>
