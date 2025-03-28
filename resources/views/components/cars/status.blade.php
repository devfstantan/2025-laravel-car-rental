@props(['value'])

@switch($value)
    @case('available')
        <span class="badge badge-success text-white badge-lg">
            {{ __('Disponible')}}
        </span>
    @break

    @case('rented')
        <span class=" badge badge-warning text-white badge-lg">
            {{ __('En Location') }}
        </span>
    @break
    <span class=" badge badge-primary badge-lg">
        {{$value}}
    </span> 
    @default
@endswitch
