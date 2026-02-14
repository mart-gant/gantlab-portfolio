<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="/" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition">
                Marcin Gantkowski
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition font-medium">Home</a>
                <a href="/#projects" class="text-gray-700 hover:text-blue-600 transition font-medium">Projects</a>
                <a href="/#contact" class="text-gray-700 hover:text-blue-600 transition font-medium">Contact</a>
                
                <!-- Language Toggle -->
                <div class="flex items-center gap-2 ml-4 pl-4 border-l border-gray-200">
                    <a href="/?lang=en" class="@if(session('lang', 'en') === 'en') font-bold text-gray-900 @else text-gray-600 hover:text-gray-900 @endif transition">EN</a>
                    <span class="text-gray-300">|</span>
                    <a href="/?lang=pl" class="@if(session('lang', 'en') === 'pl') font-bold text-gray-900 @else text-gray-600 hover:text-gray-900 @endif transition">PL</a>
                </div>
                
                <a href="https://github.com/mart-gant" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    GitHub
                </a>
            </nav>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2 text-gray-700 hover:text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</header>
