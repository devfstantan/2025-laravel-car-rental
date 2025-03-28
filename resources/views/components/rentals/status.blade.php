@props(['value'])


@switch($value)
    @case('new')
        <span class="badge badge-info">
            {{ __('Nouvelle')}}
        </span>
    @break

    @case('started')
        <span class=" badge badge-warning">
            {{ __('Démarrée') }}
        </span>
    @break
    @case('ended')
        <span class=" badge  badge-success">
            {{ __('Terminée') }}
        </span>
    @break
    <span class=" badge badge-neutral">
        {{$value}}
    </span> 
    @default
@endswitch