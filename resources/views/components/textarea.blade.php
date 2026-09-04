@props(['disabled' => false, 'rows' => 5])

<textarea
    rows="{{ $rows }}"
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900 shadow-xs
                    placeholder:text-gray-400 focus:border-indigo-500 focus:outline-hidden focus:ring-2 focus:ring-indigo-500
                    disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500',
    ]) }}
>{{ $slot }}</textarea>
