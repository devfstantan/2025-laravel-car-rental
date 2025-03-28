<x-layout.app title="Modifier Voiture">


    {{-- Create Form --}}
    <x-layout.section>
        <form method="POST" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Form Fields --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- Left Section (2 columns) --}}
                <div class="lg:col-span-2">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <x-form.input id="name" name="name" type="text" :value="$car->name" :label="__('Nom')"
                            :errors="$errors->get('name')" />

                        <!-- Registration Number -->
                        <x-form.input id="registration" name="registration" type="text" :value="$car->registration"
                            :label="__('Immatricule')" :errors="$errors->get('registration')" />

                        <!-- Brand -->
                        <x-cars.brand-select name="brand" :label="__('Marque')" :value="$car->brand" :errors="$errors->get('brand')"
                            :emptyLabel="__('Choisir une marque')" />

                        <!-- Model -->
                        <x-form.input id="model" name="model" type="text" :value="$car->model" :label="__('Modèle')"
                            :errors="$errors->get('model')" />

                        <!-- Type -->
                        <x-cars.type-select name="type" :label="__('Type')" :value="$car->type" :errors="$errors->get('type')"
                            :emptyLabel="__('Choisir une type')" />

                        <!-- Fuel -->
                        <x-cars.carburant-select name="fuel" :label="__('Carburant')" :value="$car->fuel" :errors="$errors->get('fuel')"
                            :emptyLabel="__('Choisir un type de carburant')" />

                        <!-- Price -->
                        <x-form.input id="price" name="price" type="number" :value="$car->price" :label="__('Prix par jour (MAD)')"
                            :errors="$errors->get('price')" />

                    </div>
                </div>

                {{-- Right Column (Image) --}}
                <div class=" lg:pl-8">
                    <!-- Image Upload -->
                    <div>
                        <x-form.label for="image" :value="__('Image')" />
                        <div class="mt-1">
                            <x-form.file-input id="image" name="image" accept="image/*" :value="$car->image" />
                        </div>
                        <x-form.error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="flex items-center justify-end gap-2 mt-6 pt-6 border-t border-gray-200">
                <button type="button" class="btn btn-outline btn-base-content" onclick="window.history.back()">
                    {{ __('Annuler') }}</button>
                <button type="submit" class="btn btn-warning " "> {{ __('Mettre à jour') }}</button>
            </div>
        </form>
    </x-layout.section>
</x-layout.app>
