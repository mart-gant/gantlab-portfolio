@extends('layout.app')

@section('title', 'Zdalny Deweloper Backend PHP – Marcin Gantkowski')
@section('description', 'Zdalny Deweloper Backend PHP. Buduję i utrzymuję stabilne systemy backendowe, REST API i integracje.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 md:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 animate-fade-in">
                    Zdalny Deweloper <span class="text-blue-600">PHP Backend</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed">
                    Buduję i utrzymuję stabilne systemy backendowe, REST API i integracje.<br>
                    Skupiam się na niezawodności, czystej architekturze i długoterminowej utrzymywalności.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#projects" class="px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                        Zobacz Projekty
                    </a>
                    <a href="#contact" class="px-8 py-4 bg-white text-gray-900 rounded-lg hover:bg-gray-50 transition font-semibold shadow-lg border border-gray-300">
                        Kontakt
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Technologie</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">🐘</div>
                        <h3 class="font-semibold">PHP</h3>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">🔴</div>
                        <h3 class="font-semibold">Laravel</h3>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">🗄️</div>
                        <h3 class="font-semibold">MySQL</h3>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">🔌</div>
                        <h3 class="font-semibold">REST API</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Projekty</h2>
                    <p class="text-xl text-gray-600">Wybrane projekty pokazujące rozwój backendu</p>
                </div>

                @if($projects->isEmpty())
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">Brak projektów do wyświetlenia</p>
                    </div>
                @else
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($projects as $project)
                            <article class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                                <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 relative">
                                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition"></div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $project->title }}</h3>
                                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>

                                    @if ($project->type)
                                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-4">
                                            {{ $project->type }}
                                        </span>
                                    @endif

                                    @if ($project->url)
                                        <a href="{{ $project->url }}" target="_blank" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold group/link">
                                            Otwórz projekt
                                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Usługi Backend</h2>
                    <p class="text-xl text-gray-600">Co mogę dla Ciebie zrobić</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- Service 1 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">🛠️</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Utrzymanie Backendu</h3>
                        <p class="text-gray-600">Naprawa błędów, optymalizacja kodu i wsparcie techniczne dla istniejących systemów.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">🔌</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">REST API</h3>
                        <p class="text-gray-600">Tworzenie nowoczesnych API oraz integracje z zewnętrznymi usługami.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">♻️</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Refaktoring</h3>
                        <p class="text-gray-600">Modernizacja i refaktoring istniejących systemów PHP/Laravel.</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">🗄️</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Bazy Danych</h3>
                        <p class="text-gray-600">Projektowanie, optymalizacja i zarządzanie bazami danych MySQL.</p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">🚀</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Architektura</h3>
                        <p class="text-gray-600">Projektowanie czystej i skalowalnej architektury aplikacji backendowych.</p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">📋</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Konsultacje</h3>
                        <p class="text-gray-600">Wsparcie technicze, code review i konsultacje dotyczące rozwiązań.</p>
                    </div>
                </div>

                <div class="bg-blue-50 border border-blue-200 p-8 rounded-lg text-center">
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Dostępny do pracy zdalnej</span> na umowę B2B, umowę o pracę lub zlecenia freelance.</p>
                    <p class="text-sm text-gray-600">Mogę dołączyć do Twojego zespołu lub pracować niezależnie na projektach.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Kontakt</h2>
                    <p class="text-xl text-gray-600">Szukasz zdalnego wsparcia backendu?<br>Skontaktuj się ze mną.</p>
                </div>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-800 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-800 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Imię</label>
                        <input 
                            type="text" 
                            id="name"
                            name="name" 
                            value="{{ old('name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="Jan Kowalski"
                            required
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email"
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="jan@example.com"
                            required
                        >
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Wiadomość</label>
                        <textarea 
                            id="message"
                            name="message" 
                            rows="6"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none"
                            placeholder="Opisz swój projekt..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>

                    <button 
                        type="submit"
                        class="w-full px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl"
                    >
                        Wyślij wiadomość
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
