<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Mon Portfolio' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen">

    <!-- NAVBAR FIXE -->
    <header class="fixed top-0 left-0 right-0 bg-white dark:bg-gray-800 shadow-lg z-50 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">
                Putzolu Dylan
            </a>

            <nav class="hidden md:flex space-x-10">
                <a href="/" class="hover:text-indigo-600 dark:hover:text-indigo-400 font-medium {{ request()->is('/') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Accueil</a>
                <a href="/a-propos" class="hover:text-indigo-600 dark:hover:text-indigo-400 font-medium {{ request()->is('a-propos') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">À propos</a>
                <a href="/projets" class="hover:text-indigo-600 dark:hover:text-indigo-400 font-medium {{ request()->is('projets') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Projets</a>
                <a href="/contact" class="hover:text-indigo-600 dark:hover:text-indigo-400 font-medium {{ request()->is('contact') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Contact</a>
            </nav>

            <button id="menu-btn" class="md:hidden text-3xl">☰</button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
            <nav class="flex flex-col py-4 px-6 space-y-4">
                <a href="/" class="hover:text-indigo-600 dark:hover:text-indigo-400">Accueil</a>
                <a href="/a-propos" class="hover:text-indigo-600 dark:hover:text-indigo-400">À propos</a>
                <a href="/projets" class="hover:text-indigo-600 dark:hover:text-indigo-400">Projets</a>
                <a href="/contact" class="hover:text-indigo-600 dark:hover:text-indigo-400">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Contenu qui change selon la page -->
    <main class="pt-24 pb-12 px-6 max-w-7xl mx-auto">
    {{ $slot ?? 'Bienvenue sur mon portfolio !' }}
</main>

    <script>
        document.getElementById('menu-btn').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>