@props(['id', 'title', 'route'])
<button
    class="btn btn-ghost btn-sm"
    onclick="document.querySelector('#modal_{{ $id }}').showModal()"
><i class="fas fa-trash"></i> Supprimer</button>
<dialog
    id="modal_{{ $id }}"
    class="modal"
>
    <div class="modal-box">
        <h3 class="text-lg font-bold">{{ $title }}</h3>
        <p class="py-4">
            {{ $slot }}
        </p>
        {{-- Actions --}}
        <div class="flex gap-4 mt-16">
            {{-- Annuler --}}
            <form method="dialog">
                <button class="btn">Annuler</button>
            </form>
            {{-- Confirmer --}}
            <form
                action="{{ $route }}"
                method="POST"
                class="inline"
            >
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="btn btn-error "
                >
                    <i class="fas fa-trash"></i> Supprimer
                </button>
            </form>
        </div>


    </div>
    <form
        method="dialog"
        class="modal-backdrop"
    >
        <button>close</button>
    </form>
</dialog>
