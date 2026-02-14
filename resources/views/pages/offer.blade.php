@extends('layout.app')

@section('title', 'Współpraca – Marcin Gantkowski')
@section('description', 'Tworzę stabilne aplikacje webowe i mobilne – Laravel, Flutter, MVP dla startupów')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-cyan-100 py-20 md:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-6">
                    💼 Oferta Współpracy
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Współpraca
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed">
                    Tworzę stabilne aplikacje webowe i mobilne – bez zbędnych komplikacji.
                </p>
                <a href="#contact-section" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Porozmawiajmy o projekcie
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Zakres Współpracy</h2>
                    <p class="text-xl text-gray-600">Co mogę dla Ciebie zrobić?</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white border-2 border-gray-200 p-8 rounded-xl hover:border-blue-500 hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-red-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            🔴
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Laravel Backend</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600">•</span>
                                <span>REST API dla aplikacji mobilnych i webowych</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600">•</span>
                                <span>Panele administracyjne i CMS</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600">•</span>
                                <span>Integracje z zewnętrznymi API</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600">•</span>
                                <span>Systemy płatności (Stripe, PayU)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-gray-200 p-8 rounded-xl hover:border-purple-500 hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-blue-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            💙
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Flutter Mobile</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-purple-600">•</span>
                                <span>Aplikacje Android i iOS (jeden kod)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-purple-600">•</span>
                                <span>Integracja z backendem Laravel</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-purple-600">•</span>
                                <span>Responsywny UI/UX</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-purple-600">•</span>
                                <span>Push notifications i real-time</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-gray-200 p-8 rounded-xl hover:border-green-500 hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-green-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            🚀
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">MVP dla Startupów</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-green-600">•</span>
                                <span>Szybka walidacja pomysłu</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-600">•</span>
                                <span>Full-stack development (backend + frontend)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-600">•</span>
                                <span>Architektura skalowalna na przyszłość</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-600">•</span>
                                <span>Deploy i konfiguracja serwerów</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-gray-200 p-8 rounded-xl hover:border-orange-500 hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-orange-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">
                            🔧
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Utrzymanie Projektów</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-orange-600">•</span>
                                <span>Bug fixing i optymalizacja</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-orange-600">•</span>
                                <span>Aktualizacje technologiczne</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-orange-600">•</span>
                                <span>Nowe funkcjonalności</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-orange-600">•</span>
                                <span>Code review i refactoring</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Me Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Dlaczego warto ze mną pracować?</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">💬 Jasna komunikacja</h3>
                        <p class="text-gray-600">Regularne statusy, przejrzyste ustalenia i szybki feedback.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">🔒 Bezpieczny kod</h3>
                        <p class="text-gray-600">Testy, dokumentacja i best practices. Kod łatwy do utrzymania.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">📊 Doświadczenie</h3>
                        <p class="text-gray-600">Praca z realnymi projektami i użytkownikami. Portfolio do wglądu.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">🎯 User-centric</h3>
                        <p class="text-gray-600">Zrozumienie potrzeb użytkowników i biznesowych celów projektu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Jak wygląda współpraca?</h2>
                </div>

                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-300 hidden md:block"></div>
                    
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-lg">1</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Spotkanie konsultacyjne</h3>
                                <p class="text-gray-600">Poznajemy się, omawiamy projekt i ustalamy zakres prac.</p>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-lg">2</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Wycena i harmonogram</h3>
                                <p class="text-gray-600">Otrzymujesz szczegółową wycenę i plan realizacji projektu.</p>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-lg">3</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Development</h3>
                                <p class="text-gray-600">Regularny feedback, demo i iteracyjne dostarczanie funkcji.</p>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-orange-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-lg">4</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Deploy i wsparcie</h3>
                                <p class="text-gray-600">Uruchomienie projektu i opcjonalne wsparcie techniczne.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section id="contact-section" class="py-20 bg-gradient-to-br from-blue-600 to-cyan-600 text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-6">Masz projekt? Porozmawiajmy!</h2>
                <p class="text-xl mb-8 text-blue-100">
                    Napisz przez formularz lub znajdź mnie na Useme. Odpowiadam zwykle w ciągu 24h.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="/#contact" class="px-8 py-4 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition font-semibold shadow-lg hover:shadow-xl">
                        Formularz Kontaktowy
                    </a>
                    <a href="https://useme.com/pl/roles/contractor/marcin-gantkowski,11483/" target="_blank" class="px-8 py-4 bg-blue-900 text-white rounded-lg hover:bg-blue-950 transition font-semibold shadow-lg border-2 border-white">
                        Useme Profile
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
