@props([
    'title' => null,
    'description' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ? "{$title} — " . config('app.name') : config('app.name') }}</title>

        @if ($description)
            <meta name="description" content="{{ $description }}">
        @endif

        {{--
            Precisa ser inline e síncrono, antes de qualquer CSS: os bundles do
            @vite são módulos (defer) e rodariam depois da primeira pintura,
            causando um flash branco. Escuro é o padrão — só o valor 'light'
            gravado explicitamente troca o tema.
        --}}
        <script>
            (function () {
                try {
                    if (localStorage.getItem('theme') === 'light') return;
                } catch (e) {}

                document.documentElement.classList.add('dark');
            })();
        </script>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex min-h-screen flex-col bg-gray-100 font-sans text-gray-900 antialiased dark:bg-gray-950 dark:text-gray-100">
        <x-nav />

        @isset($header)
            <header class="bg-white shadow-sm dark:bg-gray-900">
                <div class="mx-auto w-full max-w-5xl px-4 py-8 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="mx-auto w-full max-w-5xl flex-1 px-4 py-12 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>

        <footer class="border-t border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
            <div class="mx-auto flex w-full max-w-5xl flex-col items-center justify-between gap-2 px-4 py-8 text-sm text-gray-500 sm:flex-row sm:px-6 lg:px-8 dark:text-gray-400">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}</p>
                <p>Feito com Laravel &amp; Tailwind CSS</p>
            </div>
        </footer>
    </body>
</html>
