<form
    action="{{ route('rentals.index') }}"
    method="GET"
>
    <div class="flex items-end gap-3">
        <x-cars.car-select
            name="car_id"
            :value="request('car_id')"
            :label="__('Voiture')"
            :emptyLabel="__('Toutes les voitures')"
            :errors="$errors->get('car_id')"
        />
        <x-clients.client-select
            name="client_id"
            :value="request('client_id')"
            :label="__('Client')"
            :emptyLabel="__('Tous les clients')"
            :errors="$errors->get('client_id')"
        />
       
        <button
            type="submit"
            class="btn btn-primary"
        >
            <i class="fas fa-filter mr-2"></i>
            {{ __('Filtrer') }}
        </button>
    </div>
</form>
