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
        
        <!-- Alpine.js Intersect Plugin -->
        <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <!-- Alpine.js Core -->
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
        <x-hero />
        <x-about />
        <x-services />
        <x-vision />

        <main>
            <section class="h-screen bg-gray-50 flex items-center justify-center">
                <p class="text-2xl text-gray-400 font-light italic">D'autres sections arrivent bientôt...</p>
            </section>
        </main>

        <footer class="bg-primary text-white py-12">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} Agence Albatros. Tous droits réservés.</p>
            </div>
        </footer>

    </body>
</html>
