{{-- Etiqueta para stack/tecnologias: <x-badge>Laravel</x-badge> --}}
<span {{ $attributes->merge([
    'class' => 'inline-flex items-center rounded-full border border-gray-200 bg-gray-50 px-2.5 py-0.5
                text-xs font-medium text-gray-600
                dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300',
]) }}>
    {{ $slot }}
</span>
