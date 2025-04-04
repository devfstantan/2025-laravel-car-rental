@props(['dateStart', 'dateTo'])
@php
    $dStart = \Carbon\Carbon::parse($dateStart);
    $dTo = \Carbon\Carbon::parse($dateTo);

    $days = $dStart->diffInDays($dTo);
    $dateStartFormatted = $dStart->translatedFormat('d M');
    $dateToFormatted = $dTo->format('d M');
@endphp

<p class="font-medium text-lg"> {{$days}} jours</p>
<small>{{$dateStartFormatted}} - {{$dateToFormatted}}</small>