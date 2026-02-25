@extends('layout.app')

@section('title', 'Remote Backend Engineer - Marcin Gantkowski')
@section('description', 'Inzynier backendu zdalnie. Projektuje niezawodne systemy backendowe i architekture utrzymywalna w dlugim terminie.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 md:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 animate-fade-in">
                    Remote Backend Engineer
                </h1>
                <p class="text-xl md:text-2xl font-semibold text-blue-700 mb-4">
                    C# / .NET • Kotlin • Structured Systems
                </p>
                <p class="text-lg md:text-xl text-gray-700 mb-8 leading-relaxed">
                    Projektuje i buduje silnie typowane systemy backendowe, skupione na niezawodnosci, czystej architekturze i dlugoterminowej utrzymywalnosci.<br>
                    Mam doswiadczenie w REST API, modularnym podejsciu i skalowalnych rozwiazaniach backendowych.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#projects" class="px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                        View Backend Projects
                    </a>
                    <a href="#contact" class="px-8 py-4 bg-white text-gray-900 rounded-lg hover:bg-gray-50 transition font-semibold shadow-lg border border-gray-300">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Technologies</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-4">Backend</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>C# / .NET</li>
                            <li>Kotlin (JVM)</li>
                            <li>PHP 8</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-4">Architecture &amp; Patterns</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>Clean Architecture</li>
                            <li>REST API Design</li>
                            <li>Dependency Injection</li>
                            <li>Layered Architecture</li>
                            <li>Async Programming</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-4">Database</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>MySQL</li>
                            <li>Entity Framework</li>
                            <li>JPA / Hibernate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
                    <p class="text-xl text-gray-600">Wybrane projekty backendowe skupione na architekturze i utrzymywalnosci</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <article class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Satori - Backend System</h3>
                        <p class="text-gray-600 mb-4">System backendowy zaprojektowany z architektura warstwowa i integracja bazy danych.</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                            <li>Modularna struktura backendu</li>
                            <li>Projektowanie REST API</li>
                            <li>Uwierzytelnianie i zarzadzanie danymi</li>
                            <li>Nacisk na utrzymywalnosc i czytelnosc</li>
                        </ul>
                        <p class="text-sm font-semibold text-blue-700">Tech: PHP 8 / MySQL</p>
                    </article>

                    <article class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">SimpleApi - .NET REST API</h3>
                        <p class="text-gray-600 mb-4">Czyste i uporzadkowane API backendowe zbudowane w .NET.</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                            <li>Architektura warstwowa</li>
                            <li>Dependency injection</li>
                            <li>Asynchroniczne endpointy</li>
                            <li>Dokumentacja Swagger</li>
                        </ul>
                        <p class="text-sm font-semibold text-blue-700">Tech: C# / .NET</p>
                    </article>

                    <article class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Kotlin Backend / JVM Project</h3>
                        <p class="text-gray-600 mb-4">Projekt Kotlin backend skupiony na strukturze kodu i silnym typowaniu.</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                            <li>Czytelny podzial odpowiedzialnosci</li>
                            <li>Silnie typowane modele domenowe</li>
                            <li>Utrzymywalna, modularna struktura</li>
                        </ul>
                        <p class="text-sm font-semibold text-blue-700">Tech: Kotlin / JVM</p>
                    </article>

                    <article class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Mobile Companion App</h3>
                        <p class="text-gray-600 mb-4">Aplikacja mobilna wspierajaca integracje z backend API.</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                            <li>Integracja API</li>
                            <li>Ustrukturyzowane zarzadzanie stanem</li>
                            <li>Czysty podzial logiki UI</li>
                        </ul>
                        <p class="text-sm font-semibold text-blue-700">Tech: Flutter / Dart</p>
                    </article>
                </div>

                <div class="mt-12 text-center">
                    <a href="https://github.com/mart-gant" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition font-semibold shadow-lg hover:shadow-xl">
                        View more on GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How I Work Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">How I Work</h2>
                </div>
                <ul class="space-y-4 text-lg text-gray-700">
                    <li>I focus on structured backend tasks and well-defined technical scope.</li>
                    <li>I value asynchronous communication and clear requirements.</li>
                    <li>I prioritize maintainable architecture over quick, short-term fixes.</li>
                    <li>I work independently or as part of small backend-focused teams.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Backend Services</h2>
                </div>

                <div class="bg-white border border-gray-200 p-8 rounded-lg">
                    <ul class="space-y-3 text-lg text-gray-700">
                        <li>REST API development</li>
                        <li>Backend system design</li>
                        <li>Code refactoring and architecture improvements</li>
                        <li>Database design and optimization</li>
                        <li>Backend maintenance and stabilization</li>
                    </ul>
                </div>

                <div class="bg-blue-50 border border-blue-200 p-8 rounded-lg text-center mt-8">
                    <p class="text-gray-700"><span class="font-semibold">Available for remote B2B contracts or freelance projects.</span></p>
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
                    <p class="text-xl text-gray-600">Szukasz wsparcia backendowego zdalnie?<br>Napisz do mnie.</p>
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
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Imie</label>
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
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Wiadomosc</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none"
                            placeholder="Opisz swoj projekt..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl"
                    >
                        Wyslij wiadomosc
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection