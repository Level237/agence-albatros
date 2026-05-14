<section x-data="{ 
    activeSlide: 1, 
    slides: [
        { 
            id: 1, 
            title: 'Propulsez votre marque vers l\'excellence', 
            subtitle: 'Innovation Digitale', 
            desc: 'Nous créons des stratégies sur-mesure pour transformer votre vision en succès concret.', 
            img: '{{ asset('images/slider1.jpg') }}',
            cta_primary: 'Découvrir nos services',
            cta_secondary: 'Nous contacter'
        },
        { 
            id: 2, 
            title: 'Des solutions technologiques de pointe', 
            subtitle: 'Expertise & Design', 
            desc: 'Notre équipe d\'experts conçoit des interfaces intuitives et performantes pour vos utilisateurs.', 
            img: '{{ asset('images/slider2.jpg') }}',
            cta_primary: 'Voir nos projets',
            cta_secondary: 'Estimation gratuite'
        }
    ],
    timer: null,
    progress: 0,
    interval: 8000,
    
    init() {
        this.startTimer();
    },
    
    startTimer() {
        if (this.timer) clearInterval(this.timer);
        this.progress = 0;
        
        // Timer for progress bar
        let startTime = Date.now();
        this.timer = setInterval(() => {
            let elapsed = Date.now() - startTime;
            this.progress = (elapsed / this.interval) * 100;
            
            if (elapsed >= this.interval) {
                this.next();
            }
        }, 50);
    },
    
    next() {
        this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1;
        this.startTimer();
    },
    
    prev() {
        this.activeSlide = this.activeSlide === 1 ? this.slides.length : this.activeSlide - 1;
        this.startTimer();
    },
    
    setSlide(id) {
        this.activeSlide = id;
        this.startTimer();
    }
}" class="relative h-[90vh] md:h-screen w-full overflow-hidden bg-gray-900 group">

    <!-- Slides Container -->
    <div class="relative h-full w-full">
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" 
                 x-transition:enter="transition duration-1000 ease-in-out"
                 x-transition:enter-start="opacity-0 scale-105"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition duration-1000 ease-in-out"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-110"
                 class="absolute inset-0 w-full h-full">
                
                <!-- Background Image with dynamic zoom effect -->
                <div class="absolute inset-0">
                    <img :src="slide.img" class="w-full h-full object-cover transform scale-110 animate-slow-zoom" :alt="slide.title">
                    <!-- Premium Overlays -->
                    <div class="absolute inset-0 bg-primary/40 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/60 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-primary/20"></div>
                </div>

                <!-- Content -->
                <div class="relative h-full container mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                    <div class="max-w-4xl pt-32 md:pt-20">
                        <!-- Subtitle -->
                        <div class="overflow-hidden mb-3 md:mb-4">
                            <span x-show="activeSlide === slide.id"
                                  x-transition:enter="transition duration-700 delay-300 ease-out"
                                  x-transition:enter-start="translate-y-full opacity-0"
                                  x-transition:enter-end="translate-y-0 opacity-100"
                                  class="inline-flex items-center gap-2 md:gap-3 text-white font-bold uppercase tracking-[0.2em] md:tracking-[0.3em] text-[10px] md:text-sm">
                                <span class="w-6 md:w-8 h-px bg-white/50"></span>
                                <span x-text="slide.subtitle"></span>
                            </span>
                        </div>

                        <!-- Main Title -->
                        <div class="overflow-hidden mb-5 md:mb-8">
                            <h1 x-show="activeSlide === slide.id"
                                x-transition:enter="transition duration-700 delay-500 ease-out"
                                x-transition:enter-start="translate-y-full opacity-0"
                                x-transition:enter-end="translate-y-0 opacity-100"
                                class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold text-white leading-tight md:leading-[1.1] tracking-tight">
                                <span x-text="slide.title"></span>
                            </h1>
                        </div>

                        <!-- Description -->
                        <div class="overflow-hidden mb-8 md:mb-12">
                            <p x-show="activeSlide === slide.id"
                               x-transition:enter="transition duration-700 delay-700 ease-out"
                               x-transition:enter-start="translate-y-full opacity-0"
                               x-transition:enter-end="translate-y-0 opacity-100"
                               class="text-base md:text-xl text-white/70 max-w-2xl leading-relaxed font-light">
                                <span x-text="slide.desc"></span>
                            </p>
                        </div>

                        <!-- CTAs -->
                        <div x-show="activeSlide === slide.id"
                             x-transition:enter="transition duration-700 delay-900 ease-out"
                             x-transition:enter-start="opacity-0 translate-y-10"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             class="flex flex-col sm:flex-row gap-3 md:gap-5">
                            <a href="#services" class="group relative px-8 py-4 md:px-10 md:py-5 bg-white text-primary text-center font-bold rounded-full overflow-hidden transition-all hover:pr-14 hover:shadow-2xl hover:shadow-white/20 active:scale-95 text-sm md:text-base">
                                <span class="relative z-10" x-text="slide.cta_primary"></span>
                                <svg class="absolute right-6 top-1/2 -translate-y-1/2 w-5 h-5 opacity-0 -translate-x-4 transition-all group-hover:opacity-100 group-hover:translate-x-0 hidden md:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <a href="#contact" class="px-8 py-4 md:px-10 md:py-5 border-2 border-white/20 text-white text-center font-bold rounded-full transition-all hover:bg-white/10 hover:border-white/40 active:scale-95 text-sm md:text-base">
                                <span x-text="slide.cta_secondary"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Navigation Controls -->
    <div class="absolute bottom-8 md:bottom-12 left-0 w-full z-30">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6 md:gap-0">
            <!-- Indicators -->
            <div class="flex items-center gap-3 w-full md:w-auto justify-center md:justify-start">
                <template x-for="slide in slides" :key="slide.id">
                    <button @click="setSlide(slide.id)" 
                            class="group relative h-1 transition-all duration-300 overflow-hidden rounded-full"
                            :class="activeSlide === slide.id ? 'w-12 md:w-16 bg-white/20' : 'w-6 md:w-8 bg-white/10 hover:bg-white/30'">
                        <div x-show="activeSlide === slide.id" 
                             class="absolute inset-0 bg-white h-full transition-none"
                             :style="'width: ' + progress + '%'"></div>
                    </button>
                </template>
                <div class="ml-4 text-white/50 font-mono text-[10px] md:text-xs tracking-widest uppercase hidden sm:block">
                    <span class="text-white" x-text="'0' + activeSlide"></span> / <span x-text="'0' + slides.length"></span>
                </div>
            </div>

            <!-- Arrows -->
            <div class="flex items-center gap-3 md:gap-4">
                <button @click="prev()" class="p-3 md:p-4 rounded-full border border-white/20 text-white transition-all hover:bg-white hover:text-primary backdrop-blur-md active:scale-90 group">
                    <svg class="w-5 h-5 md:w-6 md:h-6 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="next()" class="p-3 md:p-4 rounded-full border border-white/20 text-white transition-all hover:bg-white hover:text-primary backdrop-blur-md active:scale-90 group">
                    <svg class="w-5 h-5 md:w-6 md:h-6 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Mouse Decor -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center gap-3 opacity-30">
        <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center pt-2">
            <div class="w-1.5 h-1.5 bg-white rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<style>
    @keyframes slow-zoom {
        from { transform: scale(1); }
        to { transform: scale(1.15); }
    }
    .animate-slow-zoom {
        animation: slow-zoom 20s ease-in-out infinite alternate;
    }
</style>
