@props(['rental', 'showCar' => true, 'showClient' => true])
@php

    // Calculate the number of columns to show
    $nbCols = 7;
    if (!$showCar) {
        $nbCols -= 2;
    }

    if (!$showClient) {
        $nbCols -= 1;
    }

@endphp


<div @class([
    'bg-white rounded-lg shadow-md overflow-hidden grid  group',
    'grid-cols-7' => $nbCols == 7,
    'grid-cols-6' => $nbCols == 6,
    'grid-cols-5' => $nbCols == 5,
    'grid-cols-4' => $nbCols == 4,
])>
    {{-- Car col --}}
    @if ($showCar)
        <div class="col-span-2  ">
            <div class="flex">
                <div>
                    <img
                        src="{{ asset($rental->car->image) }}"
                        alt="{{ $rental->car->name }}"
                        class="w-full h-28 object-cover"
                    >
                </div>
                <div class="grow ps-3">
                    <x-common.field :title="__('Voiture')">
                        <h3 class="font-semibold">{{ $rental->car->name }}</h3>
                        <p class="text-gray-400 text-xs">{{ $rental->car->brand }}</p>
                        <p class="text-gray-600 text-sm">{{ $rental->car->registration }}</p>
                    </x-common.field>
                </div>
            </div>

        </div>
    @endif
    {{-- Client --}}
    @if ($showClient)
        <div class="col-span-1">
            <x-common.field :title="__('Client')">
                <h3 class="font-semibold text-lg">{{ $rental->client->name }}</h3>
            </x-common.field>
        </div>
    @endif
    {{-- duration --}}
    <div class="col-span-1">
        <x-common.field :title="__('Durée')">
            <p class="font-medium text-lg">3 jours</p>
            <small>01 mars - 03 mars</small>
        </x-common.field>
    </div>
    {{-- Price --}}
    <div class="col-span-1">
        <x-common.field :title="__('Prix Total')">
            <x-common.price
                :value="$rental->total_price"
                currency="MAD"
                variant="small"
            />
        </x-common.field>
    </div>
    {{-- status and actions --}}
    <div class="col-span-2 p-3">
        <x-rentals.status :value="$rental->status" />
        {{-- Actions --}}
        <div class=" self-end flex justify-between items-end">
            <div
                class="flex justify-end gap-x-3 items-center mt-4 pt-4 border-t border-gray-200 opacity-0 -translate-y-2 transition-all duration-200 group-hover:opacity-100 group-hover:translate-y-0">

                <a
                    href="{{ route('rentals.show', $rental->id) }}"
                    class="btn btn-ghost btn-sm"
                >
                    <i class="fas fa-eye"></i> Afficher
                </a>
                <a
                    href="{{ route('rentals.edit', $rental->id) }}"
                    class="btn btn-ghost btn-sm"
                >
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <a
                    href="#"
                    class="btn btn-ghost btn-sm"
                >
                    <i class="fas fa-trash"></i> Supprimer
                </a>
            </div>
        </div>
    </div>

</div>
