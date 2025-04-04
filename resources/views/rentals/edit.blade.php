<x-layout.app :title="'Modifier Location - ' . $rental->car->name">

    <x-layout.section title="">
        <x-rentals.card :rental="$rental" />
        {{-- Edit form --}}
        <form
            action="{{ route('rentals.update', $rental->id) }}"
            method="POST"
            class="mt-24"
        >
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 w-1/2 gap-8">
                <x-form.input
                    id="date_start"
                    name="date_start"
                    type="date"
                    :value="$rental->date_start->format('Y-m-d')"
                    :label="__('Date Départ')"
                    :errors="$errors->get('date_start')"
                />
                <x-form.input
                    id="date_to"
                    name="date_to"
                    type="date"
                    :value="$rental->date_end->format('Y-m-d')"
                    :label="__('Date Retour')"
                    :errors="$errors->get('date_to')"
                />
            </div>

            <button
                type="submit"
                class="btn btn-primary mt-4"
            >
                <i class="fas fa-search"></i>
                {{ __('Enregistrer') }}
            </button>
        </form>
    </x-layout.section>
</x-layout.app>
