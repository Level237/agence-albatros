<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agence Albatros - Votre partenaire digital</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts & Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Alpine.js for smooth interactions -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            body {
                font-family: 'Outfit', sans-serif;
            }
            .bg-primary {
                background-color: var(--color-primary);
            }
            .text-primary {
                color: var(--color-primary);
            }
            .border-primary {
                border-color: var(--color-primary);
            }
        </style>
    </head>
    <body class="antialiased bg-white text-gray-900">
        
        <x-header />

        <main>
            <!-- Hero Section to test the header -->
            <section class="relative h-screen flex items-center justify-center overflow-hidden">
                <!-- Background Image -->
                <div class="absolute inset-0 z-0">
                    <img 
                        src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2000" 
                        alt="Background" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-primary/40 to-primary/90"></div>
                </div>

                <div class="container mx-auto px-4 relative z-10 text-center">
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight">
                        Envolez-vous avec <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">Agence Albatros</span>
                    </h1>
                    <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-10 leading-relaxed">
                        Nous créons des expériences digitales d'exception pour propulser votre entreprise vers de nouveaux sommets.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#services" class="px-8 py-4 rounded-full bg-white text-primary font-bold hover:bg-blue-50 transition-all shadow-xl hover:shadow-white/20 w-full sm:w-auto">
                            Découvrir nos services
                        </a>
                        <a href="#contact" class="px-8 py-4 rounded-full border-2 border-white/30 text-white font-bold hover:bg-white/10 transition-all w-full sm:w-auto">
                            Nous contacter
                        </a>
                    </div>
                </div>

                <!-- Scroll indicator -->
                <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </section>

            <!-- Content section to allow scrolling -->
            <section id="propos" class="py-24 bg-gray-50">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">À Propos de Nous</h2>
                        <div class="w-20 h-1 bg-primary mx-auto rounded-full mb-6"></div>
                        <p class="text-gray-600 text-lg">
                            L'Agence Albatros est née d'une passion pour le design et la technologie. Nous accompagnons nos clients dans leur transformation digitale avec audace et précision.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach([
                            ['title' => 'Innovation', 'desc' => 'Nous repoussons les limites pour créer des solutions uniques.'],
                            ['title' => 'Expertise', 'desc' => '12 ans d\'expérience au service de votre réussite.'],
                            ['title' => 'Proximité', 'desc' => 'Un accompagnement personnalisé à chaque étape de votre projet.']
                        ] as $feature)
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <h3 class="text-xl font-bold text-primary mb-3">{{ $feature['title'] }}</h3>
                            <p class="text-gray-600">{{ $feature['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="h-screen bg-white flex items-center justify-center">
                <p class="text-2xl text-gray-400 font-light">Espace pour tester le scroll...</p>
            </section>
        </main>

        <footer class="bg-primary text-white py-12">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} Agence Albatros. Tous droits réservés.</p>
            </div>
        </footer>

    </body>
</html>
