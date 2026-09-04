@props(['active' => false])

@php
    $base = 'inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition duration-150 ease-in-out focus:outline-hidden';

    $classes = $active
        ? "{$base} border-indigo-400 text-gray-900 focus:border-indigo-700"
        : "{$base} border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
