<x-layout title="À propos">

    <section class="py-20 px-6">
        <h1 class="text-5xl md:text-7xl font-black text-center mb-16">
            À propos de moi
        </h1>

        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <!-- Photo -->
            <div>
                <img src="/storage/photo.png" alt="Putzolu Dylan"
                    class="rounded-2xl shadow-2xl w-full object-cover object-top">
            </div>

            <!-- Texte + icônes -->
            <div class="space-y-8 text-lg">
                <div class="space-y-6">
                    <p>Salut ! Je m’appelle <strong>Putzolu Dylan</strong>, développeur full-stack passionné basé en
                        France.</p>
                    <p>Durant mes différents métiers, j’ai appris la rigueur, le sens du détail, le respect des délais
                        et à livrer un travail impeccable.</p>
                    <p>Aujourd’hui J'aimerai code avec exactement la même exigence des applications propres,
                        ultra-rapides et agréables à utiliser.</p>
                    <p>Actuellement en formation intensive, je recherche une alternance pour rejoindre une équipe,
                        apporter mon sérieux, mon énergie et progresser à 200 % sur des projets concrets.</p>
                </div>

                <!-- Icônes réseaux + CV (une seule div, tout propre) -->
                <div class="flex items-center space-x-10 flex-wrap gap-6">
                    <!-- GitHub -->
                    <a href="https://github.com/Dylan-Pu" target="_blank" rel="noopener"
                        class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 transition transform hover:scale-110"
                        title="GitHub">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/dylan-putzolu-b61b4631a" target="_blank" rel="noopener"
                        class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 transition transform hover:scale-110"
                        title="LinkedIn">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9.5h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9.5h3.564v10.952zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>

                    <!-- CV -->
                    <a href="/storage/cv-dylan-putzolu.pdf" target="_blank"
                        class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 transition transform hover:scale-110"
                        title="Télécharger mon CV">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layout>