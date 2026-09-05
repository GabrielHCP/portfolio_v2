<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'inline-flex items-center gap-2 rounded-md border border-gray-300 bg-white px-4 py-2
                text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-xs transition duration-150 ease-in-out
                hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                disabled:cursor-not-allowed disabled:opacity-50
                dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:ring-offset-gray-900
                dark:hover:bg-gray-800',
]) }}>
    {{ $slot }}
</button>
