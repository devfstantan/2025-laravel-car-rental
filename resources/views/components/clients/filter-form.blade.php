<form
    action="{{ route('clients.index') }}"
    method="GET"
>
    <div class="flex items-end gap-3">
        <x-form.input
            id="search"
            name="search"
            type="search"
            :value="request('search')"
            :label="__('Chercher')"
            :errors="$errors->get('search')"
        />

        <button
            type="submit"
            class="btn btn-primary"
        >
            <i class="fas fa-search mr-2"></i>
            {{ __('Chercher') }}
        </button>
    </div>
</form>
