<x-layout.app title="Editer Client">


    {{-- Create Form --}}
    <x-layout.section>
        <form
            method="POST"
            action="{{ route('clients.update',$client->id) }}"
        >

            @csrf
            @method('PUT')

            <div class="grid md:grid-cols-1 gap-6 w-1/2  ">

                <!-- Name -->
                <x-form.input
                    id="name"
                    name="name"
                    type="text"
                    :value="$client->name"
                    :label="__('Nom')"
                    :errors="$errors->get('name')"
                />

                <!-- email -->
                <x-form.input
                    id="email"
                    name="email"
                    type="email"
                    :value="$client->email"
                    :label="__('Email')"
                    :errors="$errors->get('email')"
                />


                <!-- phone -->
                <x-form.input
                    id="phone"
                    name="phone"
                    type="text"
                    :value="$client->phone"
                    :label="__('Téléphone')"
                    :errors="$errors->get('phone')"
                />


            </div>

            {{-- Form Actions --}}
            <div class="flex items-center justify-start gap-2 mt-6 pt-6 border-t border-gray-200">
                <button
                    type="button"
                    class="btn btn-outline btn-base-content"
                    onclick="window.history.back()"
                >
                    {{ __('Annuler') }}</button>
                <button
                    type="submit"
                    class="btn btn-primary " "> {{ __('Enregistrer') }}</button>
               
            </div>
        </form>
    </x-layout.section>
</x-layout.app>
