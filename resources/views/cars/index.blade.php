<x-layout.app title="Voitures">
    <x-slot:actions>
        <a href="{{route('cars.create')}}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
            Nouvelle Voiture
        </a>
    </x-slot>
    <x-layout.section title="Voitures">
      <div class="grid grid-cols-2 gap-4">
        @foreach ($cars as $car)
        <x-cars.card :car="$car" />
    @endforeach
      </div>
    </x-layout.section>

</x-layout.app>
