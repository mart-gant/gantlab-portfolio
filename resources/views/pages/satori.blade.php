@extends('layout.app')

@section('title', 'Satori – Neurodiversity Friendly App')
@section('description', 'Satori – aplikacja wspierająca osoby neuroatypowe poprzez testy poznawcze i rekomendacje')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-purple-50 to-pink-100 py-20 md:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-6">
                    🧠 Startup Project
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Satori
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed">
                    Aplikacja wspierająca osoby neuroatypowe poprzez indywidualne profile poznawcze.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="https://satori-two.vercel.app" target="_blank" class="px-8 py-4 bg-purple-600 text-green-300 rounded-lg hover:bg-purple-700 transition font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105">
                        Zobacz Demo
                    </a>
                    <a href="/#contact" class="px-8 py-4 bg-white text-gray-900 rounded-lg hover:bg-gray-50 transition font-semibold shadow-lg border-2 border-gray-300">
                        Skontaktuj się
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Co oferuje Satori?</h2>
                    <p class="text-xl text-gray-600">Kompleksowe wsparcie dla osób neuroatypowych</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-purple-50 to-white p-8 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            🧪
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Testy Poznawcze</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Subiektywne i obiektywne testy pomagające zrozumieć indywidualny styl funkcjonowania poznawczego.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-pink-50 to-white p-8 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-pink-600 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            👤
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Profil Użytkownika</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Szczegółowy profil pokazujący mocne strony i obszary wymagające wsparcia.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            💡
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Rekomendacje</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Spersonalizowane wskazówki i strategie dopasowane do stylu funkcjonowania użytkownika.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-white p-8 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            ♾️
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Neuroróżnorodność</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Projektowana z myślą o różnorodności poznawczej i potrzebach osób neuroatypowych.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Status Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                    <div class="text-center mb-8">
                        <div class="inline-block px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full text-sm font-semibold mb-4">
                            🚀 W Rozwoju
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Status Projektu</h2>
                        <p class="text-lg text-gray-600">
                            MVP w trakcie rozwoju. Szukam partnerów i pierwszych użytkowników do testowania aplikacji.
                        </p>
                    </div>

                    <div class="border-t border-gray-200 pt-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Szukam:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="text-purple-600 text-xl">✓</span>
                                <span class="text-gray-700">Partnerów technologicznych i biznesowych</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-600 text-xl">✓</span>
                                <span class="text-gray-700">Testerów aplikacji (osoby neuroatypowe)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-600 text-xl">✓</span>
                                <span class="text-gray-700">Organizacji wspierających neuroróżnorodność</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-600 text-xl">✓</span>
                                <span class="text-gray-700">Psychologów i specjalistów ds. neuroróżnorodności</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-6">Chcesz współtworzyć Satori?</h2>
                <p class="text-xl mb-8 text-purple-100">
                    Jeśli interesujesz się neuroróżnorodnością i chcesz pomóc w rozwoju aplikacji, skontaktuj się ze mną!
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="/#contact" class="px-8 py-4 bg-white text-purple-600 rounded-lg hover:bg-gray-100 transition font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-105">
                        Napisz wiadomość
                    </a>
                    <a href="https://satori-two.vercel.app" target="_blank" class="px-8 py-4 bg-purple-900 text-green-300 rounded-lg hover:bg-purple-950 transition font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-105 border-2 border-white">
                        Zobacz Demo
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
