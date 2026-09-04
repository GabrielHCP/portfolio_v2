{{--
    <x-project-card title="Portfólio v2" year="2026" description="...">
        <x-slot:stack>
            <x-badge>Laravel</x-badge>
            <x-badge>Tailwind</x-badge>
        </x-slot:stack>

        <x-slot:actions>
            <x-button-link href="..." variant="secondary">Repositório</x-button-link>
        </x-slot:actions>
    </x-project-card>
--}}
@props([
    'title',
    'description' => null,
    'href' => null,
    'year' => null,
])

<article {{ $attributes->merge([
    'class' => 'flex flex-col bg-white p-6 shadow-sm transition duration-150 ease-in-out hover:shadow-md sm:rounded-lg',
]) }}>
    <div class="flex items-start justify-between gap-4">
        <h3 class="text-base font-semibold text-gray-900">
            @if ($href)
                <a href="{{ $href }}" class="rounded-sm transition hover:text-indigo-600 focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ $title }}
                </a>
            @else
                {{ $title }}
            @endif
        </h3>

        @if ($year)
            <span class="shrink-0 text-xs font-medium uppercase tracking-widest text-gray-400">{{ $year }}</span>
        @endif
    </div>

    @if ($description)
        <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $description }}</p>
    @endif

    @isset($stack)
        <div class="mt-4 flex flex-wrap gap-2">
            {{ $stack }}
        </div>
    @endisset

    @isset($actions)
        <div class="mt-6 flex flex-wrap gap-3">
            {{ $actions }}
        </div>
    @endisset
</article>
