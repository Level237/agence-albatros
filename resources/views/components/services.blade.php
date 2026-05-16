<section id="services" class="py-24 md:py-32 bg-gray-50/50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center max-w-4xl mx-auto mb-20 md:mb-24" x-data="{ shown: false }"
            x-intersect.margin.100px="shown = true">
            <h2 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 transition-all duration-700 ease-out">
                Nos Services
            </h2>
            <div :class="shown ? 'w-24 opacity-100' : 'w-0 opacity-0'"
                class="h-1.5 bg-primary mx-auto rounded-full mb-8 transition-all duration-1000 delay-300"></div>
            <p :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="text-lg md:text-xl text-gray-600 leading-relaxed transition-all duration-700 delay-500 font-light">
                Votre image est le socle de votre notoriété. Nous concevons des identités visuelles et des messages de
                marque capables de refléter vos valeurs et de vous différencier durablement.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8 lg:gap-12 items-stretch" x-data="{ shown: false }"
            x-intersect.margin.100px="shown = true">

            <!-- Service 1: Digital & Web -->
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                class="group bg-white p-8 lg:p-12 rounded-[3rem] shadow-sm hover:shadow-2xl hover:shadow-primary/10 transition-all duration-700 border border-gray-100 flex flex-col items-center text-center">
                <div
                    class="mb-10 p-7 rounded-[2rem] bg-primary/5 text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500 group-hover:scale-110 group-hover:rotate-6 shadow-sm group-hover:shadow-xl group-hover:shadow-primary/20">
                    <!-- Lucide: Layout -->
                    <x-lucide-layout-dashboard class="w-10 h-10 group-hover:text-white" />
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-5">Digital & Web</h3>
                <p class="text-gray-500 leading-relaxed mb-10 flex-grow text-base lg:text-lg font-light">
                    Nous développons des solutions digitales performantes pour renforcer votre présence en ligne et
                    générer de la valeur.
                </p>

            </div>

            <!-- Service 2: Audiovisuel & Production (Center / Highlighted) -->
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                class="group bg-white p-8 lg:p-12 rounded-[3rem] shadow-xl shadow-primary/5 hover:shadow-2xl hover:shadow-primary/10 transition-all duration-700 delay-200 border border-primary/10 flex flex-col items-center text-center relative z-10 md:-translate-y-4">
                <div
                    class="mb-10 p-7 rounded-[2rem] bg-primary text-white shadow-xl shadow-primary/30 group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500">
                    <!-- Lucide: Video -->
                    <x-lucide-video class="w-10 h-10" />
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-5">Audiovisuel & Production</h3>
                <p class="text-gray-500 leading-relaxed mb-10 flex-grow text-base lg:text-lg font-light">
                    L'image est un levier puissant de communication. Nous produisons des contenus audiovisuels
                    professionnels.-

                </p>

            </div>

            <!-- Service 3: Événementiel & Relations publiques -->
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                class="group bg-white p-8 lg:p-12 rounded-[3rem] shadow-sm hover:shadow-2xl hover:shadow-primary/10 transition-all duration-700 delay-400 border border-gray-100 flex flex-col items-center text-center">
                <div
                    class="mb-10 p-7 rounded-[2rem] bg-primary/5 text-primary  group-hover:bg-primary  transition-all duration-500 group-hover:scale-110 group-hover:rotate-6 shadow-sm group-hover:shadow-xl group-hover:shadow-primary/20">
                    <!-- Lucide: Users -->
                    <x-lucide-users-round class="w-10 h-10 group-hover:text-white" />
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-5 text-balance">Événementiel & Relations
                    publiques</h3>
                <p class="text-gray-500 leading-relaxed mb-10 flex-grow text-base lg:text-lg font-light">
                    Nous concevons des événements qui marquent les esprits et renforcent votre image de marque.
                </p>

            </div>
        </div>
    </div>
</section>