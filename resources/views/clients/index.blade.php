<x-layout.app title="Clients">
    <x-slot:actions>
        <a
            href="{{ route('clients.create') }}"
            class="btn btn-primary"
        >
            <i class="fas fa-plus mr-2"></i>
            Nouveau client
        </a>
    </x-slot>
    <x-layout.section title="Client">
        <div class="overflow-x-auto">
            <table class="table    w-full">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>

                                <a
                                    href="{{ route('clients.edit', $client->id) }}"
                                    class="btn btn-ghost btn-sm"
                                >
                                    <i class="fas fa-edit"></i> Modifier
                                </a>


                                {{-- Delete Modal --}}
                                <x-common.delete-btn
                                    id="{{ $client->id }}"
                                    title="Supprimer le client {{ $client->name }}"
                                    route="{{ route('clients.destroy', $client->id) }}"
                                >
                                    <p>
                                        Êtes-vous sûr de vouloir supprimer le client <b class="text-error">{{ $client->name }}</b> ?
                                    </p>
                                </x-common.delete-btn>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $clients->links() }}
            </div>
    </x-layout.section>

</x-layout.app>
