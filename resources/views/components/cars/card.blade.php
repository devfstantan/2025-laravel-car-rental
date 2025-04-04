@props(['car'])
<div class="card card-side bg-base-100 shadow-md  ">

    <figure class="w-36 max-h-44 object-cover">
        <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" />
    </figure>
    <div class="card-body">
        <div class="flex justify-between items-top">
            <div>
                <h2 class="card-title">{{ $car->name }}</h2>
                <small>{{ $car->brand }}</small>
                <p>{{ $car->registration }}</p>
            </div>
            <div class="flex flex-col items-end gap-2">
                <x-cars.status :value="$car->status" />
                @if ($car->status == 'rented')
                    <div class="flex flex-col items-end ">
                        <p>{{ $car->reservation->client }}</p>
                        <p>Retour : {{ $car->reservation->date_end->format('d/m/Y') }}</p>
                    </div>
                @endif
                
            </div>
        </div>

        <div class="card-actions flex justify-between items-end border-t-2 border-base-300">
            <x-common.price :value="$car->price" currency="MAD/JOUR" />
            <div>
                <a href="{{route('cars.show', $car->id)}}" class="btn btn-ghost btn-sm">
                    <i class="fas fa-eye"></i> Afficher
                </a>
                <a href="{{route('cars.edit', $car->id)}}" class="btn btn-ghost btn-sm">
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <a href="#" class="btn btn-ghost btn-sm">
                    <i class="fas fa-trash"></i> Supprimer
                </a>
            </div>

        </div>
    </div>
</div>
