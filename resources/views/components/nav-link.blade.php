@props(['active' => false, 'tag' => 'a'])

@php
$classes = $active 
    ? 'rounded-md bg-gray-950/50 px-3 py-2 text-sm font-medium text-white' 
    : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white';
@endphp

@if($tag === 'button')
<button 
    class="{{ $classes }}"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>{{ $slot }}</button>
@else
<a 
    class="{{ $classes }}"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
@endif
