<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Petrikov Lumina - Undangan Digital Elegan' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'lumina-gold': '#C9A961',
                        'lumina-gold-light': '#E8D5A3',
                        'lumina-cream': '#FAF6F0',
                        'lumina-navy': '#1A1A2E',
                        'lumina-dark': '#0F0F1A',
                    },
                    fontFamily: {
                        'elegant': ['Cormorant Garamond', 'serif'],
                        'modern': ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Outfit', sans-serif;
        }
        .font-elegant {
            font-family: 'Cormorant Garamond', serif;
        }

        /* Gradient text */
        .text-gradient {
            background: linear-gradient(135deg, #C9A961 0%, #E8D5A3 50%, #C9A961 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        @keyframes pulse-gold {
            0%, 100% { box-shadow: 0 0 0 0 rgba(201, 169, 97, 0.4); }
            50% { box-shadow: 0 0 30px 10px rgba(201, 169, 97, 0.2); }
        }
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-pulse-gold { animation: pulse-gold 2s ease-in-out infinite; }
        .animate-shimmer {
            background: linear-gradient(90deg, transparent 0%, rgba(201,169,97,0.3) 50%, transparent 100%);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #1A1A2E; }
        ::-webkit-scrollbar-thumb { background: #C9A961; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #E8D5A3; }
    </style>
</head>
<body class="bg-lumina-dark text-white antialiased">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-lumina-dark/90 backdrop-blur-md border-b border-lumina-gold/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <span class="font-elegant text-2xl font-bold text-gradient">Petrikov Lumina</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#fitur" class="text-gray-300 hover:text-lumina-gold transition-colors">Fitur</a>
                    <a href="#demo" class="text-gray-300 hover:text-lumina-gold transition-colors">Demo</a>
                    <a href="#template" class="text-gray-300 hover:text-lumina-gold transition-colors">Template</a>
                    <a href="#harga" class="text-gray-300 hover:text-lumina-gold transition-colors">Harga</a>
                    <a href="#kontak" class="bg-lumina-gold text-lumina-dark px-5 py-2 rounded-full font-semibold hover:bg-lumina-gold-light transition-all">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-lumina-navy border-t border-lumina-gold/20 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <span class="font-elegant text-3xl font-bold text-gradient">Petrikov Lumina</span>
                    <p class="mt-4 text-gray-400 max-w-md">
                        Membuat momen spesial Anda lebih berkilau dengan undangan digital yang elegan dan modern.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-10 h-10 rounded-full bg-lumina-gold/20 flex items-center justify-center hover:bg-lumina-gold/40 transition-colors">
                            <svg class="w-5 h-5 text-lumina-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-lumina-gold/20 flex items-center justify-center hover:bg-lumina-gold/40 transition-colors">
                            <svg class="w-5 h-5 text-lumina-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-lumina-gold/20 flex items-center justify-center hover:bg-lumina-gold/40 transition-colors">
                            <svg class="w-5 h-5 text-lumina-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.375 3.836-.807zm11.875-6.2c-2.407 0-4.348.905-5.926 2.428l-1.17 1.137-1.203.002c-3.386.005-6.131 2.759-6.133 6.138 0 3.373 2.709 6.132 6.131 6.132 3.382 0 6.131-2.759 6.132-6.131 0-1.678-.644-3.249-1.718-4.495l1.172-1.141c.469-.453 1.103-.704 1.722-.704.687 0 1.304.29 1.762.82l-.65.651c-.42.421-1.105.657-1.795.657z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-lumina-gold mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="#fitur" class="text-gray-400 hover:text-lumina-gold transition-colors">Fitur</a></li>
                        <li><a href="#demo" class="text-gray-400 hover:text-lumina-gold transition-colors">Demo</a></li>
                        <li><a href="#template" class="text-gray-400 hover:text-lumina-gold transition-colors">Template</a></li>
                        <li><a href="#harga" class="text-gray-400 hover:text-lumina-gold transition-colors">Harga</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lumina-gold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>hello@petrikovlumina.com</li>
                        <li>+62 812-3456-7890</li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-lumina-gold/20 mt-8 pt-8 text-center text-gray-500">
                <p>&copy; 2024 Petrikov Lumina. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true
        });
    </script>
</body>
</html>