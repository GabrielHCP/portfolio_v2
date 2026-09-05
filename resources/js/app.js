/**
 * Alternância de tema claro/escuro.
 *
 * O tema inicial é aplicado por um script inline no <head> do layout, antes
 * da primeira pintura — este arquivo é carregado como módulo (defer) e só
 * cuida da interação. Se a lógica de escolha do tema mudar, os dois lugares
 * precisam mudar juntos.
 */
const STORAGE_KEY = 'theme';
const root = document.documentElement;

function currentTheme() {
    return root.classList.contains('dark') ? 'dark' : 'light';
}

function applyTheme(theme) {
    root.classList.toggle('dark', theme === 'dark');

    try {
        localStorage.setItem(STORAGE_KEY, theme);
    } catch {
        // Modo privativo / storage bloqueado: o tema vale só para esta página.
    }

    syncToggles(theme);
}

function syncToggles(theme) {
    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        button.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');
    });
}

// Delegação: funciona para qualquer número de botões, inclusive os que
// aparecem depois (menu mobile, conteúdo carregado dinamicamente).
document.addEventListener('click', (event) => {
    if (!event.target.closest('[data-theme-toggle]')) {
        return;
    }

    applyTheme(currentTheme() === 'dark' ? 'light' : 'dark');
});

syncToggles(currentTheme());
