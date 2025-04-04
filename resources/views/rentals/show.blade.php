<x-layout.app :title="'Location - ' . $rental->car->name">
    {{-- Page Actions --}}
    <x-slot name="actions">
        <div class="flex gap-3">
            <a
                href="{{ route('rentals.edit', $rental->id) }}"
                class="btn btn-ghost "
            >
                <i class="fas fa-edit"></i> Modifier
            </a>
            <a
                href="#"
                class="btn btn-ghost "
            >
                <i class="fas fa-trash"></i> Supprimer
            </a>

        </div>
    </x-slot>

    {{-- Car Details Section --}}
    <x-layout.section title="Détails de la voiture">
        <x-slot:actions>
            <a
                href="{{ route('cars.show', $rental->car->id) }}"
                class="btn btn-warning "
            >
                <i class="fas fa-play"></i> Démarrer
            </a>
        </x-slot:actions>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <x-common.field :title="__('Client')">
                <p class="text-lg text-gray-900">{{ $rental->client->name }}</p>
            </x-common.field>

            <x-common.field :title="__('Durée')">
               <x-common.duration
                    :date-start="$rental->date_start"
                    :date-to="$rental->date_end"
                />
            </x-common.field>
            {{-- Price --}}
            <x-common.field :title="__('Prix Total')">
                <x-common.price
                    :value="$rental->total_price"
                    currency="MAD"
                    variant="small"
                />
            </x-common.field>
            {{-- Status --}}
            <x-common.field :title="__('Statut actuel')">
                <x-rentals.status :value="$rental->status" />
            </x-common.field>
        </div>
    </x-layout.section>

    {{-- Car Details Section --}}
    <x-layout.section title="Détails de la voiture">
        <x-slot:actions>
            <a
                href="{{ route('cars.show', $rental->car->id) }}"
                class="btn btn-ghost btn-sm"
            >
                <i class="fas fa-eye"></i> Afficher
            </a>
        </x-slot:actions>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Image --}}
            <div class="lg:col-span-1">
                <img
                    src="{{ asset($rental->car->image) }}"
                    alt="{{ $rental->car->name }}"
                    class="w-full aspect-video object-cover rounded-lg shadow-md"
                >
            </div>

            {{-- Details --}}
            <div class="lg:col-span-2 space-y-6">
                {{-- Basic Info --}}
                <div class="grid grid-cols-5 gap-6">
                    <x-common.field :title="__('Marque')">
                        <p class="text-lg text-gray-900">{{ $rental->car->brand }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Modèle')">
                        <p class="text-lg text-gray-900">{{ $rental->car->model }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Type')">
                        <p class="text-lg text-gray-900">{{ $rental->car->type }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Carburant')">
                        <p class="text-lg text-gray-900">{{ $rental->car->fuel }}</p>
                    </x-common.field>
                    <x-common.field :title="__('Immatriculation')">
                        <p class="text-lg text-gray-900">{{ $rental->car->registration }}</p>
                    </x-common.field>

                </div>

                {{-- Rental Infos --}}
                <div class="grid grid-cols-5 gap-6 border-t border-base-200 pt-6 ">
                    <x-common.field :title="__('Prix par jour')">
                        <x-common.price
                            :value="$rental->car->price"
                            currency="MAD/JOUR"
                        />
                    </x-common.field>
                </div>
            </div>
        </div>
    </x-layout.section>


</x-layout.app>
