@props(['url', 'text'])
@php 
    $url = $url ?? url()->previous();
@endphp

<a href="{{ $url }}" class="float-right"> <x-primary-button type="button" class="">retour</x-primary-button></a>