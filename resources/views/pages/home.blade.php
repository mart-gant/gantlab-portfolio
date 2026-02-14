@extends('layout.app')

@section('title', 'Remote PHP Backend Developer – Marcin Gantkowski')
@section('description', 'Remote PHP Backend Developer. I build and maintain stable backend systems, REST APIs and integrations.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 md:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 animate-fade-in">
                    Remote <span class="text-blue-600">PHP Backend</span> Developer
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed">
                    I build and maintain stable backend systems, REST APIs and integrations.<br>
                    Focused on reliability, clean architecture and long-term maintainability.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#projects" class="px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                        View Backend Projects
                    </a>
                    <a href="#contact" class="px-8 py-4 bg-white text-gray-900 rounded-lg hover:bg-gray-50 transition font-semibold shadow-lg border border-gray-300">
                        Contact (Remote Work)
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Technologies</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">�</div>
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
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Projects</h2>
                    <p class="text-xl text-gray-600">Selected projects showcasing backend development</p>
                </div>

                @if($projects->isEmpty())
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">No projects to display</p>
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
                                            View project
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
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Remote Backend Work</h2>
                    <p class="text-xl text-gray-600">What I can do for you</p>
                </div>

                <div class="max-w-3xl mx-auto bg-white border-2 border-gray-200 p-8 rounded-xl hover:border-blue-500 hover:shadow-xl transition-all">
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold mt-1">•</span>
                            <span>Backend maintenance and bug fixing</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold mt-1">•</span>
                            <span>REST API development</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold mt-1">•</span>
                            <span>API integrations</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold mt-1">•</span>
                            <span>Refactoring existing PHP/Laravel systems</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold mt-1">•</span>
                            <span>Database design and optimization</span>
                        </li>
                    </ul>
                    <p class="mt-8 text-center text-gray-600 italic">Available for remote contract or freelance work.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact</h2>
                    <p class="text-xl text-gray-600">Looking for remote backend support?<br>Feel free to contact me.</p>
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
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                        <input 
                            type="text" 
                            id="name"
                            name="name" 
                            value="{{ old('name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="Your Name"
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
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea 
                            id="message"
                            name="message" 
                            rows="6"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none"
                            placeholder="Describe your project..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>

                    <button 
                        type="submit"
                        class="w-full px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl"
                    >
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
