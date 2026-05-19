<section id="portfolio" class="py-24 md:py-32 bg-gray-50/30 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 md:mb-24" x-data="{ shown: false }"
            x-intersect.margin.100px="shown = true">
            <span :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest mb-4 transition-all duration-700 ease-out">
                Nos Réalisations
            </span>
            <h2 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6 transition-all duration-700 delay-100 ease-out">
                Des projets qui <span class="text-primary">marquent les esprits.</span>
            </h2>
            <p :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                class="text-lg text-gray-600 leading-relaxed font-light transition-all duration-700 delay-200 ease-out">
                Découvrez une sélection de nos meilleurs projets. Nous accompagnons des entreprises de tous secteurs
                dans l'atteinte de leurs objectifs avec créativité et stratégie.
            </p>
        </div>

    </div>

    @php
        $projects = [
            ['image' => 'portfolio1.png', 'name' => 'Akevas', 'category' => 'E-commerce', 'link' => 'https://akevas.com'],
            ['image' => 'portfolio2.png', 'name' => 'Fecascrab', 'category' => 'Sport', 'link' => 'https://fecascrab.com'],
            ['image' => 'portfolio3.png', 'name' => 'Breteuil dentaire', 'category' => 'Santé', 'link' => 'https://breteuildentaire.fr'],
            ['image' => 'portfolio4.png', 'name' => 'Sureown company', 'category' => 'Transport', 'link' => 'https://sureowncompany.com/'],
            ['image' => 'portfolio5.png', 'name' => 'Reference medico Sarl', 'category' => 'Santé', 'link' => 'https://referencemedicosarl.com/'],
            ['image' => 'portfolio6.png', 'name' => 'Delivery Akevas', 'category' => 'E-commerce', 'link' => 'https://dev.akevas.com'],
        ];
    @endphp

    <!-- Infinite Carousel -->
    <div class="relative w-full overflow-hidden flex gap-6 pb-12 pt-4" x-data="{ paused: false }"
        @mouseenter="paused = true" @mouseleave="paused = false" @touchstart="paused = true" @touchend="paused = false">

        <!-- Shadow Overlays for fade effect -->
        <div
            class="absolute inset-y-0 left-0 w-16 md:w-48 bg-gradient-to-r from-[#F9FAFB] to-transparent z-10 pointer-events-none">
        </div>
        <div
            class="absolute inset-y-0 right-0 w-16 md:w-48 bg-gradient-to-l from-[#F9FAFB] to-transparent z-10 pointer-events-none">
        </div>

        <!-- Track 1 -->
        <div class="flex shrink-0 gap-6 animate-marquee" :style="paused ? 'animation-play-state: paused' : ''">
            @foreach($projects as $project)
                <a href="{{ $project['link'] }}"
                    class="group relative block w-[280px] md:w-[450px] h-[300px] md:h-[300px] rounded-3xl overflow-hidden shrink-0 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:shadow-primary/20 hover:-translate-y-2 transition-all duration-500">
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['name'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">

                    <!-- Gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="absolute bottom-0 left-0 right-0 p-6 md:p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span
                            class="inline-block px-3 py-1 bg-white/20 text-white text-[10px] font-bold uppercase tracking-widest rounded-full mb-3 backdrop-blur-md border border-white/20">
                            {{ $project['category'] }}
                        </span>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-2 flex items-center justify-between">
                            {{ $project['name'] }}
                            <div
                                class="w-10 h-10 rounded-full bg-primary flex items-center justify-center opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500">
                                <x-lucide-arrow-up-right class="w-5 h-5 text-white" />
                            </div>
                        </h3>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Track 2 (Duplicate for seamless loop) -->
        <div class="flex shrink-0 gap-6 animate-marquee" aria-hidden="true"
            :style="paused ? 'animation-play-state: paused' : ''">
            @foreach($projects as $project)
                <a href="{{ $project['link'] }}"
                    class="group relative block w-[280px] md:w-[450px] h-[300px] md:h-[300px] rounded-3xl overflow-hidden shrink-0 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:shadow-primary/20 hover:-translate-y-2 transition-all duration-500">
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['name'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 right-0 p-6 md:p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span
                            class="inline-block px-3 py-1 bg-white/20 text-white text-[10px] font-bold uppercase tracking-widest rounded-full mb-3 backdrop-blur-md border border-white/20">
                            {{ $project['category'] }}
                        </span>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-2 flex items-center justify-between">
                            {{ $project['name'] }}
                            <div
                                class="w-10 h-10 rounded-full bg-primary flex items-center justify-center opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500">
                                <x-lucide-arrow-up-right class="w-5 h-5 text-white" />
                            </div>
                        </h3>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- CTAs -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-12 text-center" x-data="{ shown: false }"
        x-intersect.margin.100px="shown = true">
        <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
            class="flex flex-col sm:flex-row items-center justify-center gap-4 transition-all duration-700 ease-out">
            <a href="#portfolio"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-primary text-white font-bold rounded-2xl hover:bg-blue-800 transition-all shadow-xl shadow-primary/20 hover:-translate-y-1 active:scale-95 w-full sm:w-auto group">
                <span>Voir plus de projets</span>
                <x-lucide-grid class="w-5 h-5 group-hover:rotate-12 transition-transform" />
            </a>
            <a href="#contact"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-white text-gray-900 border border-gray-200 font-bold rounded-2xl hover:border-primary hover:text-primary transition-all shadow-sm hover:-translate-y-1 active:scale-95 w-full sm:w-auto group">
                <span>Contactez-nous</span>
                <x-lucide-mail class="w-5 h-5 group-hover:-rotate-12 transition-transform" />
            </a>
        </div>
    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-100% - 1.5rem));
            }

            /* 1.5rem corresponds to gap-6 */
        }

        .animate-marquee {
            animation: marquee 45s linear infinite;
        }
    </style>
</section>