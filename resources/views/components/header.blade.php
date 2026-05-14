<header x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-100 py-3': scrolled, 'bg-transparent py-5': !scrolled }"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo (Left Column) -->
            <div class="flex-1 flex justify-start items-center">
                <a href="/" class="transition-transform duration-300 hover:scale-105">
                    <img class="h-10 md:h-12 w-auto object-contain" src="{{ asset('images/logo-albatros.png') }}"
                        alt="Agence Albatros">
                </a>
            </div>

            <!-- Navigation Desktop (Center Column) -->
            <nav class="hidden md:flex flex-grow justify-center space-x-10 items-center">
                <a href="#propos" class="text-sm font-semibold tracking-wide transition-all duration-300 hover:opacity-80 relative group"
                    :class="scrolled ? 'text-gray-800' : 'text-gray-100'">
                    A propos de nous
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full" :class="scrolled ? 'bg-primary' : 'bg-white'"></span>
                </a>
                <a href="#services" class="text-sm font-semibold tracking-wide transition-all duration-300 hover:opacity-80 relative group"
                    :class="scrolled ? 'text-gray-800' : 'text-gray-100'">
                    Nos Services
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full" :class="scrolled ? 'bg-primary' : 'bg-white'"></span>
                </a>
                <a href="#portfolio" class="text-sm font-semibold tracking-wide transition-all duration-300 hover:opacity-80 relative group"
                    :class="scrolled ? 'text-gray-800' : 'text-gray-100'">
                    Portfolio
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full" :class="scrolled ? 'bg-primary' : 'bg-white'"></span>
                </a>
                <a href="#contact" class="text-sm font-semibold tracking-wide transition-all duration-300 hover:opacity-80 relative group"
                    :class="scrolled ? 'text-gray-800' : 'text-gray-100'">
                    Contactez nous
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full" :class="scrolled ? 'bg-primary' : 'bg-white'"></span>
                </a>
            </nav>

            <!-- CTA & Mobile Menu (Right Column) -->
            <div class="flex-1 flex justify-end items-center">
                <a href="#devis"
                    class="hidden md:inline-flex items-center px-7 py-3 rounded-full text-sm font-bold transition-all duration-300 shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 active:scale-95"
                    :class="scrolled ? 'bg-primary text-white' : 'bg-white text-primary hover:bg-gray-50'">
                    Demandez un devis
                </a>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-xl transition-colors duration-300"
                        :class="scrolled ? 'text-gray-600 hover:text-primary hover:bg-gray-100' : 'text-white hover:text-white hover:bg-white/10'"
                        aria-controls="mobile-menu" :aria-expanded="mobileMenuOpen">
                        <span class="sr-only">Ouvrir le menu</span>
                        <!-- Icon Open -->
                        <svg x-show="!mobileMenuOpen" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon Close -->
                        <svg x-show="mobileMenuOpen" x-cloak class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden absolute top-full left-0 right-0 bg-white shadow-xl border-t border-gray-100 overflow-hidden"
        id="mobile-menu">
        <div class="px-4 pt-4 pb-6 space-y-2 bg-white">
            <a href="#propos"
                class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors">
                A propos de nous
            </a>
            <a href="#services"
                class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors">
                Nos Services
            </a>
            <a href="#portfolio"
                class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors">
                Portfolio
            </a>
            <a href="#contact"
                class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors">
                Contactez nous
            </a>
            <div class="pt-4 mt-4 border-t border-gray-100">
                <a href="#devis"
                    class="block w-full text-center px-6 py-4 rounded-xl bg-primary text-white font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                    Demandez un devis
                </a>
            </div>
        </div>
    </div>
</header>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>