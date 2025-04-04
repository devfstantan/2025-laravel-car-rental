<div class="w-full">
    <div class="mb-8 py-8 border-b-2 border-base-300 flex flex-col items-center">
        <x-common.logo />
    </div>

    <ul class="menu w-full">
        <li>
            <a href="{{route('dashboard')}}" @class([ 'menu-active' => request()->routeIs('dashboard')])>
                <i class="fas fa-tachometer-alt text-base w-4"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('cars.index')}}" @class([ 'menu-active' => request()->routeIs('cars.*')])>
                <i class="fas fa-car text-base w-4"></i> Voitures
            </a>
        </li>
        <li>
            <a href="{{route('rentals.index')}}" @class([ 'menu-active' => request()->routeIs('rentals.*')])>
                <i class="fas fa-receipt text-base w-4"></i> Locations
            </a>
        </li>
        <li>
            <a href="{{route('clients.index')}}" @class([ 'menu-active' => request()->routeIs('clients.*')])>
                <i class="fas fa-user text-base w-4"></i> Clients
            </a>
        </li>
    </ul>
</div>
