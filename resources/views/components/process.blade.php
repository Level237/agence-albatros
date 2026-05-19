<section id="processus" class="py-24 md:py-32 bg-gray-50/50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 items-stretch" x-data="{ shown: false }"
            x-intersect.margin.100px="shown = true">

            <!-- Left: Hero Card -->
            <div class="lg:col-span-5 flex" :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'"
                class="transition-all duration-1000 ease-out">
                <div
                    class="relative w-full max-sm:p-8 rounded-[2.5rem] bg-primary p-10 md:p-14 overflow-hidden flex flex-col justify-center text-white shadow-2xl shadow-primary/20 group">
                    <!-- Background Effects -->
                    <div
                        class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/10 rounded-full blur-3xl group-hover:scale-110 transition-transform duration-1000">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 -ml-20 -mb-20 w-60 h-60 bg-blue-400/20 rounded-full blur-2xl group-hover:scale-110 transition-transform duration-1000 delay-200">
                    </div>

                    <div class="relative z-10 space-y-8">
                        <div>
                            <span
                                class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-white/90 font-bold text-[10px] uppercase tracking-[0.3em] mb-6 backdrop-blur-md border border-white/10">
                                Comment nous travaillons
                            </span>
                            <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                                Notre processus <br>
                                <span class="text-blue-300">d'accompagnement</span>
                            </h2>
                        </div>

                        <p class="text-lg text-blue-100/80 leading-relaxed font-light">
                            Chaque projet est abordé comme une collaboration sur mesure, avec un objectif clair : faire
                            rayonner votre marque sur les bons canaux, auprès des bonnes cibles.
                        </p>

                        <div class="pt-6">
                            <a href="#contact"
                                class="inline-flex items-center gap-3 px-8 py-4 bg-white text-primary font-bold rounded-2xl hover:bg-blue-50 transition-all hover:shadow-xl hover:-translate-y-1 active:scale-95 group/btn">
                                <span>Démarrer un projet</span>
                                <x-lucide-arrow-right
                                    class="w-5 h-5 transition-transform group-hover/btn:translate-x-1" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Steps Grid (Mobile Carousel) -->
            <div
                class="lg:col-span-7 flex overflow-x-auto snap-x snap-mandatory gap-6 pb-8 -mx-4 px-4 md:grid md:grid-cols-2 md:overflow-visible md:snap-none md:gap-8 md:pb-0 md:mx-0 md:px-0 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                @php
                    $steps = [
                        [
                            'number' => '01',
                            'title' => 'Briefing',
                            'description' => 'Immersion totale dans votre univers pour comprendre vos objectifs, vos cibles et l\'essence même de votre marque.',
                            'icon' => 'lucide-message-square',
                            'delay' => '0'
                        ],
                        [
                            'number' => '02',
                            'title' => 'Stratégie',
                            'description' => 'Élaboration d\'une feuille de route précise alliant créativité et données pour garantir un impact maximal.',
                            'icon' => 'lucide-compass',
                            'delay' => '200'
                        ],
                        [
                            'number' => '03',
                            'title' => 'Production',
                            'description' => 'Mise en œuvre concrète de votre projet avec une attention méticuleuse portée aux détails et à la performance.',
                            'icon' => 'lucide-layers',
                            'delay' => '400'
                        ],
                        [
                            'number' => '04',
                            'title' => 'Suivi',
                            'description' => 'Analyse des résultats et accompagnement continu pour faire évoluer votre présence digitale dans la durée.',
                            'icon' => 'lucide-line-chart',
                            'delay' => '600'
                        ]
                    ];
                @endphp

                @foreach($steps as $step)
                    <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        class="snap-center shrink-0 w-[85vw] sm:w-[350px] md:w-auto group relative bg-white p-8 md:p-10 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-700 hover:-translate-y-2 ease-out"
                        style="transition-delay: {{ $step['delay'] }}ms">

                        <!-- Step Number & Icon -->
                        <div class="flex items-center justify-between mb-8">
                            <span
                                class="text-5xl font-black text-gray-300 group-hover:text-primary/10 transition-colors duration-500">
                                {{ $step['number'] }}
                            </span>
                            <div
                                class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-gray-400 group-hover:bg-primary group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                                <x-dynamic-component :component="'lucide-' . str_replace('lucide-', '', $step['icon'])"
                                    class="w-7 h-7" />
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            {{ $step['title'] }}
                        </h3>

                        <p class="text-gray-500 leading-relaxed font-light">
                            {{ $step['description'] }}
                        </p>

                        <!-- Bottom Accent Line -->
                        <div
                            class="absolute bottom-0 left-10 right-10 h-1 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-t-full">
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>