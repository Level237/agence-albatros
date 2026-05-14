<section id="propos" class="py-24 md:py-32 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

            <!-- Left: Content -->
            <div class="flex-1 space-y-8" x-data="{ shown: false }" x-intersect.margin.100px="shown = true">

                <div :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'"
                    class="transition-all duration-1000 ease-out">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest mb-4">
                        Notre Agence
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Une expertise 360° pour <br class="max-sm:hidden">
                        <span class="text-primary">votre réussite digitale.</span>
                    </h2>

                    <div class="relative hidden max-sm:block pb-6">
                        <!-- Main Image -->
                        <div
                            class="relative rounded-[1rem] overflow-hidden shadow-[0_20px_50px_rgba(4,38,146,0.15)] bg-primary/5">
                            <img src="{{ asset('images/about1.jpg') }}" alt="L'équipe Agence Albatros"
                                class="w-full  h-auto object-cover transform hover:scale-105 transition-transform duration-1000"
                                loading="lazy">
                        </div>

                        <!-- Stats Badge Overlay -->
                        <div :class="shown ? 'translate-x-0 opacity-100' : 'translate-x-10 opacity-0' hidden"
                            class="absolute -bottom-8 -right-8 md:-right-12 bg-white p-8 rounded-[2rem] shadow-2xl border border-gray-100 transition-all duration-1000 delay-700 hidden sm:block">
                            <div class="flex items-center gap-5">
                                <div class="text-5xl font-extrabold text-primary tracking-tighter">12+</div>
                                <div class="h-10 w-px bg-gray-200"></div>
                                <div class="text-xs font-bold text-gray-400 uppercase tracking-widest leading-tight">
                                    Années <br> d'Expertise
                                </div>
                            </div>
                        </div>

                    </div>

                    <p class="text-lg text-gray-600 leading-relaxed max-w-2xl font-light">
                        L'Agence Albatros est une agence de communication globale spécialisée dans la valorisation de
                        l'image de marque et le développement de la visibilité des entreprises. Nous croyons qu'une
                        communication réussie repose sur l'écoute, la compréhension des enjeux et la créativité
                        stratégique.
                    </p>
                </div>

                <!-- Features Grid -->
                <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    class="transition-all duration-1000 delay-300 ease-out grid sm:grid-cols-2 gap-8">
                    <div class="flex items-start gap-4 group">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-2xl bg-primary/5 flex items-center justify-center text-primary transition-colors group-hover:bg-primary group-hover:text-white">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1 text-lg">Performance</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">Optimisation continue pour des résultats
                                concrets et mesurables.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-2xl bg-primary/5 flex items-center justify-center text-primary transition-colors group-hover:bg-primary group-hover:text-white">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-4.514A9.01 9.01 0 0012 15c2.243 0 4.296.815 5.882 2.162m0 0A9 9 0 1012 1.57a9.003 9.003 0 00-11.37 11.052" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1 text-lg">Stratégie</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">Une vision globale pour anticiper vos
                                besoins et dépasser vos objectifs.</p>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    class="transition-all duration-1000 delay-500 ease-out pt-6">
                    <a href="#contact"
                        class="inline-flex items-center gap-4 px-10 py-5 bg-primary text-white font-bold rounded-full hover:bg-primary/90 transition-all shadow-2xl shadow-primary/20 group active:scale-95">
                        <span>En savoir plus sur nous</span>
                        <div
                            class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center group-hover:bg-white/40 transition-colors">
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="flex-1 relative" x-data="{ shown: false }" x-intersect.margin.100px="shown = true">

                <!-- Background Decoration -->
                <div :class="shown ? 'scale-100 opacity-100' : 'scale-90 opacity-0'"
                    class="absolute -top-10 -left-10 w-40 h-40 bg-primary/10 rounded-full blur-3xl transition-all duration-1000">
                </div>
                <div :class="shown ? 'scale-100 opacity-100' : 'scale-90 opacity-0'"
                    class="absolute -bottom-20 -right-20 w-80 h-80 bg-primary/5 rounded-full blur-[100px] transition-all duration-1000 delay-300">
                </div>

                <!-- Image Container -->
                <div :class="shown ? 'translate-x-0 opacity-100 rotate-0' : 'translate-x-20 opacity-0 rotate-3'"
                    class="relative z-10 transition-all duration-1000 ease-out">

                    <div class="relative max-sm:hidden">
                        <!-- Main Image -->
                        <div
                            class="relative rounded-[3rem] overflow-hidden shadow-[0_20px_50px_rgba(4,38,146,0.15)] bg-primary/5">
                            <img src="{{ asset('images/about1.jpg') }}" alt="L'équipe Agence Albatros"
                                class="w-full  h-auto object-cover transform hover:scale-105 transition-transform duration-1000"
                                loading="lazy">
                        </div>

                        <!-- Stats Badge Overlay -->
                        <div :class="shown ? 'translate-x-0 opacity-100' : 'translate-x-10 opacity-0'"
                            class="absolute -bottom-8 -right-8 md:-right-12 bg-white p-8 rounded-[2rem] shadow-2xl border border-gray-100 transition-all duration-1000 delay-700 hidden sm:block">
                            <div class="flex items-center gap-5">
                                <div class="text-5xl font-extrabold text-primary tracking-tighter">12+</div>
                                <div class="h-10 w-px bg-gray-200"></div>
                                <div class="text-xs font-bold text-gray-400 uppercase tracking-widest leading-tight">
                                    Années <br> d'Expertise
                                </div>
                            </div>
                        </div>

                        <!-- Floating Rating Card -->
                        <div :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                            class="absolute -top-6 -left-6 md:-left-12 bg-white/90 backdrop-blur-xl p-5 rounded-2xl shadow-xl border border-white/50 transition-all duration-1000 delay-900">
                            <div class="flex items-center gap-2 mb-2">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-xs font-bold text-gray-900 tracking-tight">Top Rated Agency</p>
                            <p class="text-[10px] text-gray-500">Basé sur 150+ avis clients</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>