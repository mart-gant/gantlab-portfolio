<footer class="bg-gray-900 text-gray-300 mt-20">
    <div class="container mx-auto px-4 lg:px-8 py-12">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div>
                <h3 class="text-white font-bold text-lg mb-4">Marcin Gantkowski</h3>
                @if(session('lang') === 'pl')
                    <p class="text-gray-400">Inzynier backendu pracujacy zdalnie. Projektuje i rozwijam niezawodne systemy backendowe.</p>
                @else
                    <p class="text-gray-400">Remote Backend Engineer. I design and build reliable backend systems.</p>
                @endif
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">
                    @if(session('lang') === 'pl')
                        Linki
                    @else
                        Links
                    @endif
                </h4>
                <ul class="space-y-2">
                    @if(session('lang') === 'pl')
                        <li><a href="/?lang=pl" class="hover:text-blue-400 transition">Portfolio</a></li>
                        <li><a href="/?lang=pl#projects" class="hover:text-blue-400 transition">Projekty</a></li>
                        <li><a href="/?lang=pl#contact" class="hover:text-blue-400 transition">Kontakt</a></li>
                    @else
                        <li><a href="/" class="hover:text-blue-400 transition">Portfolio</a></li>
                        <li><a href="/#projects" class="hover:text-blue-400 transition">Projects</a></li>
                        <li><a href="/#contact" class="hover:text-blue-400 transition">Contact</a></li>
                    @endif
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">
                    @if(session('lang') === 'pl')
                        Kontakt
                    @else
                        Contact
                    @endif
                </h4>
                <ul class="space-y-2">
                    <li><a href="https://github.com/mart-gant" target="_blank" class="hover:text-blue-400 transition">GitHub</a></li>
                    <li><a href="https://linkedin.com/in/marcingant" target="_blank" class="hover:text-blue-400 transition">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 text-center text-gray-500">
            <p>&copy; {{ date('Y') }} Marcin Gantkowski. Backend Engineering • .NET • Kotlin • PHP</p>
        </div>
    </div>
</footer>