{{-- Título de seção no tom institucional: caixa alta, minúsculo, tracking largo. --}}
@props(['title', 'subtitle' => null])

<div {{ $attributes->merge(['class' => 'mb-6']) }}>
    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-500 dark:text-gray-400">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mt-2 text-sm leading-relaxed text-gray-600 dark:text-gray-400">{{ $subtitle }}</p>
    @endif
</div>
