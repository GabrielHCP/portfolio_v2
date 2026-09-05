{{-- Conteúdo abaixo é placeholder: troque textos, links e projetos pelos seus. --}}
<x-layouts.app
    title="Início"
    description="Portfólio de Gabriel — desenvolvedor back-end com foco em Laravel."
>
    <x-slot:header>
        <p class="text-xs font-semibold uppercase tracking-widest text-gray-500">
            Desenvolvedor Back-end
        </p>

        <h1 class="mt-2 text-2xl font-semibold leading-tight text-gray-900">
            Gabriel
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-relaxed text-gray-600">
            Construo aplicações web com Laravel, com atenção a testes, tipagem
            estática e código que continua legível seis meses depois.
        </p>

        <div class="mt-6 flex flex-wrap gap-3">
            <x-button-link href="mailto:seu@email.com">Entrar em contato</x-button-link>
            <x-button-link href="https://github.com/GabrielHCP" variant="secondary">GitHub</x-button-link>
        </div>
    </x-slot:header>

    <section>
        <x-section-heading
            title="Stack"
            subtitle="Ferramentas com as quais trabalho no dia a dia."
        />

        <x-card>
            <div class="flex flex-wrap gap-2">
                <x-badge>PHP 8.3</x-badge>
                <x-badge>Laravel 13</x-badge>
                <x-badge>Pest</x-badge>
                <x-badge>Larastan</x-badge>
                <x-badge>Tailwind CSS</x-badge>
                <x-badge>MySQL</x-badge>
                <x-badge>Docker</x-badge>
                <x-badge>Git</x-badge>
            </div>
        </x-card>
    </section>

    <section class="mt-12">
        <x-section-heading
            title="Projetos"
            subtitle="Seleção de trabalhos recentes."
        />

        <div class="grid gap-6 sm:grid-cols-2">
            <x-project-card
                title="Portfólio v2"
                year="2026"
                href="https://github.com/GabrielHCP/portfolio_v2"
                description="Reconstrução do portfólio em Laravel 13, com componentes Blade próprios e CI rodando Pint, Larastan e Pest."
            >
                <x-slot:stack>
                    <x-badge>Laravel</x-badge>
                    <x-badge>Tailwind v4</x-badge>
                    <x-badge>Vite</x-badge>
                </x-slot:stack>

                <x-slot:actions>
                    <x-button-link
                        href="https://github.com/GabrielHCP/portfolio_v2"
                        variant="secondary"
                    >
                        Repositório
                    </x-button-link>
                </x-slot:actions>
            </x-project-card>

            <x-project-card
                title="Projeto de exemplo"
                year="2025"
                description="Duplique este bloco para cada projeto. Remova o atributo href quando não houver link externo."
            >
                <x-slot:stack>
                    <x-badge>PHP</x-badge>
                    <x-badge>MySQL</x-badge>
                </x-slot:stack>
            </x-project-card>
        </div>
    </section>

    <section class="mt-12">
        <x-section-heading
            title="Contato"
            subtitle="Aberto a conversas sobre projetos e oportunidades."
        />

        <x-card class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
            <p class="text-sm leading-relaxed text-gray-600">
                A forma mais rápida de me achar é por e-mail.
            </p>

            <div class="flex flex-wrap gap-3">
                <x-button-link href="mailto:seu@email.com">E-mail</x-button-link>
                <x-button-link href="https://linkedin.com/in/seu-perfil" variant="secondary">
                    LinkedIn
                </x-button-link>
            </div>
        </x-card>
    </section>
</x-layouts.app>
