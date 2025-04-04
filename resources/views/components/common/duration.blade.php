@props(['dateStart', 'dateTo'])
@php
    $days = \Carbon\Carbon::parse($dateStart)->diffInDays(\Carbon\Carbon::parse($dateTo));
    $dateStartFormatted = \Carbon\Carbon::parse($dateStart)->translatedFormat('d M');
    $dateToFormatted = \Carbon\Carbon::parse($dateTo)->format('d M');
@endphp

<p class="font-medium text-lg"> {{$days}} jours</p>
<small>{{$dateStartFormatted}} - {{$dateToFormatted}}</small>