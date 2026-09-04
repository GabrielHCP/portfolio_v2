{{--
    Os links usam url()/request()->is() para não depender de rotas nomeadas.
    Quando as rotas ganharem nome, troque por route('...') e request()->routeIs('...').
--}}
<nav class="border-b border-gray-100 bg-white">
    <div class="mx-auto w-full max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <a
                href="{{ url('/') }}"
                class="rounded-md font-semibold tracking-tight text-gray-900 focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                {{ config('app.name') }}
            </a>

            <div class="hidden h-16 space-x-8 sm:flex">
                <x-nav-link :href="url('/')" :active="request()->is('/')">Início</x-nav-link>
                {{-- <x-nav-link :href="url('/projetos')" :active="request()->is('projetos*')">Projetos</x-nav-link> --}}
                {{-- <x-nav-link :href="url('/sobre')" :active="request()->is('sobre')">Sobre</x-nav-link> --}}
                {{-- <x-nav-link :href="url('/contato')" :active="request()->is('contato')">Contato</x-nav-link> --}}
            </div>

            {{-- Menu mobile com <details> nativo — sem Alpine. --}}
            <details class="relative sm:hidden">
                <summary
                    class="cursor-pointer list-none rounded-md p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:outline-hidden focus:ring-2 focus:ring-indigo-500"
                >
                    <span class="sr-only">Abrir menu</span>
                    <svg class="size-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </summary>

                <div class="absolute end-0 z-10 mt-2 w-48 rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5">
                    <x-dropdown-link :href="url('/')">Início</x-dropdown-link>
                    {{-- <x-dropdown-link :href="url('/projetos')">Projetos</x-dropdown-link> --}}
                </div>
            </details>
        </div>
    </div>
</nav>
