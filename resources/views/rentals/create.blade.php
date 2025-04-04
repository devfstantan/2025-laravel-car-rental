<x-layout.app title="Locations">
    
    <x-layout.section title="">
        {{-- Filter --}}
        <x-slot:title>
           <form action="{{route('rentals.create')}}" method="GET">
                <div class="flex items-end gap-4">
                    <x-clients.client-select
                            name="client_id"
                            :label="__('Client')"
                            :value="$client_id"
                            :errors="$errors->get('client_id')"
                            :emptyLabel="__('Choisir un client')"
                        />
                    <x-form.input
                            id="date_start"
                            name="date_start"
                            type="date"
                            :value="$date_start"
                            :label="__('Date Départ')"
                            :errors="$errors->get('date_start')"
                        />
                    <x-form.input
                            id="date_to"
                            name="date_to"
                            type="date"
                            :value="$date_to"
                            :label="__('Date Retour')"
                            :errors="$errors->get('date_to')"
                        />
                        <button type="submit" class="btn btn-primary mt-4">
                            <i class="fas fa-search"></i>
                            {{ __('Rechercher') }}
                        </button>
                </div>
                
           </form>
        </x-slot:actions>

        {{-- Cars choosers list --}}
        <div class="flex flex-col gap-4">
            @foreach ($cars as $car)
                <x-rentals.car-chooser :car="$car" :date-start="$date_start" :date-to="$date_to" :client-id="$client_id" />
            @endforeach
        </div>
    </x-layout.section>

</x-layout.app>
