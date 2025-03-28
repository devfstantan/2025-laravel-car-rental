<x-layout.app :title="$car->name">
    <x-slot name="actions">
        <div class="flex gap-3">
            
            <a  href="{{route('cars.edit', $car->id)}}" class="btn btn-warning">
                <i class="fa-solid fa-pen-to-square mr-2"></i>
                {{ __('Modifier') }}
            </a>

            <button type="button" class="btn btn-error">
                <i class="fa-solid fa-trash mr-2"></i>
                {{ __('Supprimer') }}
            </button>
        </div>
    </x-slot>

    {{-- Car Details --}}
    <x-layout.section title="Détails de la voiture">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Image --}}
            <div class="lg:col-span-1">
                <img src="{{ asset($car->image) }}" alt="{{ $car->name }}"
                    class="w-full aspect-video object-cover rounded-lg shadow-md">
            </div>

            {{-- Details --}}
            <div class="lg:col-span-2 space-y-6">
                {{-- Basic Info --}}
                <div class="grid grid-cols-5 gap-6">
                    <x-common.field :title="__('Marque')">
                        <p class="text-lg text-gray-900">{{ $car->brand }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Modèle')">
                        <p class="text-lg text-gray-900">{{ $car->model }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Type')">
                        <p class="text-lg text-gray-900">{{ $car->type }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Carburant')">
                        <p class="text-lg text-gray-900">{{ $car->fuel }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Immatriculation')">
                        <p class="text-lg text-gray-900">{{ $car->registration }}</p>
                    </x-common.field>
                   
                </div>

                {{-- Rental Infos --}}
                <div class="grid grid-cols-5 gap-6 border-t border-base-200 pt-6 ">
                    <x-common.field :title="__('Prix par jour')">
                        <x-common.price :value="$car->price" currency="MAD/JOUR"  />
                    </x-common.field>

                    <x-common.field :title="__('Disponibilité Aujourd\'hui')">
                        <x-cars.status :value="$car->status" />
                    </x-common.field>
                    @if($car->status === 'rented')
                    <x-common.field :title="__('Rentrera le: ')">
                        <p class="text-lg text-gray-900"> 13/04/2025</p>
                    </x-common.field>
                    @endif
                </div>
            </div>
        </div>
    </x-layout.section>

    {{-- Rentals History --}}
    <x-layout.section title="Historique des locations">
            @if (count($rentals) === 0)
                <div class="text-center py-12">
                    <i class="fa-solid fa-calendar-xmark text-4xl text-gray-400 mb-3"></i>
                    <p class="text-gray-500">{{__('Aucune location pour le moment')}}</p>
                </div>
            @else
                <div class="overflow-x-auto flex flex-col gap-5">
                   @foreach ($rentals as $rental)
                       <x-rentals.card :rental="$rental" :show-car="false" />
                   @endforeach
                </div>
            @endif
        </x-layout.section>
</x-layout.app>
