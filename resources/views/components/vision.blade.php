<section class="relative py-24 md:py-32 lg:py-40 overflow-hidden bg-primary">
    <!-- Sophisticated Background -->
    <div class="absolute inset-0">
        <!-- Gradient Mesh -->
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--color-primary)_0%,_transparent_60%)] opacity-50">
        </div>
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_#0633B5_0%,_transparent_60%)] opacity-50">
        </div>

        <!-- Abstract Bar Pattern -->
        <div
            class="absolute inset-0 flex items-end justify-between px-2 md:px-10 gap-1 opacity-[0.08] pointer-events-none select-none">
            @php $barCount = 30; @endphp
            @for ($i = 0; $i < $barCount; $i++)
                <div class="w-full bg-white rounded-t-2xl transition-all duration-[4000ms] ease-in-out"
                    x-data="{ height: '10%' }" x-intersect="height = '{{ rand(20, 80) }}%'" :style="'height: ' + height">
                </div>
            @endfor
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto" x-data="{ shown: false }" x-intersect.margin.100px="shown = true">

            <!-- Subtitle -->
            <div class="overflow-hidden mb-6">
                <span :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-full opacity-0'"
                    class="inline-block text-blue-200 font-bold uppercase tracking-[0.5em] text-[10px] md:text-xs transition-all duration-700 ease-out">
                    Notre Vision
                </span>
            </div>

            <!-- Main Title -->
            <h2 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="text-2xl md:text-2xl lg:text-6xl font-bold text-white leading-[1.1] tracking-tight mb-12 transition-all duration-1000 delay-200 ease-out">
                Accompagner nos clients vers une <br class="hidden lg:block">
                communication <span class="relative inline-block">
                    <span class="relative z-10">plus cohérente.</span>
                    <span :class="shown ? 'w-full' : 'w-0'"
                        class="absolute bottom-2 left-0 h-3 bg-white/10 -rotate-1 transition-all duration-1000 delay-700"></span>
                </span>
            </h2>

            <!-- CTA Button -->
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="transition-all duration-700 delay-500 ease-out">
                <a href="#contact"
                    class="inline-flex items-center px-10 py-5 bg-white text-primary font-bold rounded-full hover:bg-blue-50 transition-all shadow-[0_20px_50px_rgba(255,255,255,0.1)] hover:shadow-[0_20px_60px_rgba(255,255,255,0.2)] hover:-translate-y-1 active:scale-95 group">
                    <span class="text-lg">Contactez nous</span>
                    <div
                        class="ml-4 w-10 h-10 rounded-full bg-primary/5 flex items-center justify-center transition-colors group-hover:bg-primary group-hover:text-white">
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Glow -->
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-white/10 rounded-full blur-[120px] pointer-events-none"></div>
</section>