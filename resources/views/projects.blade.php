<x-layout title="Projets">

    <section class="py-20 px-6">
        <h1 class="text-5xl md:text-7xl font-black text-center mb-16">
            Mes projets
        </h1>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">

            <!-- Carte 1 -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 h-56 flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">Projet #1</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Application SaaS (en cours)</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Plateforme complète avec authentification, abonnements Stripe, dashboard en temps réel.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Livewire</span>
                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">Stripe</span>
                    </div>
                    <p class="text-sm text-gray-500">Bientôt disponible</p>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="bg-gradient-to-br from-pink-500 to-rose-500 h-56 flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">Projet #2</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Marketplace moderne</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Site de vente entre particuliers avec messagerie, géoloc, paiements sécurisés.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Vue 3</span>
                        <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">Inertia</span>
                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 rounded-full text-sm">Tailwind</span>
                    </div>
                    <p class="text-sm text-gray-500">En développement actif</p>
                </div>
            </div>

            <!-- Carte 3 → ton portfolio actuel (méta mais ça claque) -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="bg-gradient-to-br from-emerald-500 to-teal-600 h-56 flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">Ce site !</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Mon Portfolio 2025</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Le site que tu regardes en ce moment même → 100 % fait main avec amour.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">Laravel 12</span>
                        <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900 text-cyan-800 dark:text-cyan-200 rounded-full text-sm">Tailwind</span>
                        <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 rounded-full text-sm">Blade</span>
                    </div>
                    <a href="https://github.com/tonpseudo/portfolio" class="text-indigo-600 font-semibold">Code source</a>
                </div>
            </div>

        </div>
    </section>

</x-layout>