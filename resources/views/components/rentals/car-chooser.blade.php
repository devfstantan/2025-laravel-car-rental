<div class="bg-white rounded-lg shadow-md overflow-hidden grid grid-cols-5  group">
    {{-- Car col --}}
        <div class="col-span-2  ">
            <div class="flex">
                <div>
                    <img
                        src="{{ asset($car->image) }}"
                        alt="{{ $car->name }}"
                        class="w-48 h-28  object-cover"
                    >
                </div>
                <div class="grow ps-3">
                    <x-common.field :title="__('Voiture')">
                        <h3 class="font-semibold">{{ $car->name }}</h3>
                        <p class="text-gray-400 text-xs">{{ $car->brand }}</p>
                        <p class="text-gray-600 text-sm">{{ $car->registration }}</p>
                    </x-common.field>
                </div>
            </div>

        </div>

    {{-- Price per day --}}
    <div class="col-span-1">
        <x-common.field :title="__('Cout Journalier')">
            <x-common.price
                :value="$car->price"
                currency="MAD/JOUR"
                variant="small"
            />
        </x-common.field>
    </div>
    {{-- Price total --}}
    <div class="col-span-1">
        <x-common.field :title="__('Cout Total')">
            <x-common.price
                :value="$car->price * $duration"
                currency="MAD"
                variant="small"
            />
        </x-common.field>
    </div>
    {{-- actions --}}
    <div class="col-span-1 p-3">
        <form action="{{route('rentals.store')}}" method="POST">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <input type="hidden" name="client_id" value="{{ $clientId }}">
            <input type="hidden" name="date_start" value="{{ $dateStart }}">
            <input type="hidden" name="date_to" value="{{ $dateTo }}">
            <button
                type="submit"
                class="btn btn-primary btn-sm"
            >
                <i class="fas fa-plus"></i>
                {{ __('Réserver') }}
            </button>
        </form>
    </div>

</div>
