{{-- Âncora com aparência de botão: "Ver projeto", "GitHub", "Baixar CV". --}}
@props(['variant' => 'primary'])

@php
    $base = 'inline-flex items-center gap-2 rounded-md px-4 py-2 text-xs font-semibold uppercase tracking-widest
             transition duration-150 ease-in-out focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2';

    $variants = [
        'primary' => 'border border-transparent bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900',
        'secondary' => 'border border-gray-300 bg-white text-gray-700 shadow-xs hover:bg-gray-50',
        'ghost' => 'border border-transparent text-gray-600 hover:bg-gray-100 hover:text-gray-900',
    ];
@endphp

<a {{ $attributes->merge(['class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
    {{ $slot }}
</a>
