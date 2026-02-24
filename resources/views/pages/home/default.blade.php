@extends('layout.app')

@section('title', 'Remote PHP Backend Developer â€“ Marcin Gantkowski')
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
                        <div class="text-4xl mb-3">ďż˝</div>
                        <h3 class="font-semibold">PHP</h3>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">đź”´</div>
                        <h3 class="font-semibold">Laravel</h3>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">đź—„ď¸Ź</div>
                        <h3 class="font-semibold">MySQL</h3>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                        <div class="text-4xl mb-3">đź”Ś</div>
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

                    {{-- GitHub repositories section --}}
                    @if(!empty($githubRepos) && count($githubRepos))
                        <div class="mt-12">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">GitHub Repositories</h3>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                                @foreach($githubRepos as $repo)
                                    <article class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                                        <div class="h-32 bg-gray-100 flex items-center justify-center text-4xl text-gray-500">
                                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.207 11.387.6.11.793-.258.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                            </svg>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $repo['name'] }}</h3>
                                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $repo['description'] ?? 'No description' }}</p>
                                            <a href="{{ $repo['html_url'] }}" target="_blank" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold group/link">
                                                View repo
                                                <svg class="w-4 h-4 group-hover/link:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endif
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
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Remote Backend Work</h2>
                    <p class="text-xl text-gray-600">What I can do for you</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- Service 1 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">đź› ď¸Ź</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Backend Maintenance</h3>
                        <p class="text-gray-600">Bug fixing, code optimization and technical support for existing systems.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">đź”Ś</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">REST API Development</h3>
                        <p class="text-gray-600">Building modern APIs and integrating with external services.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">â™»ď¸Ź</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Refactoring</h3>
                        <p class="text-gray-600">Modernization and refactoring of existing PHP/Laravel systems.</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">đź—„ď¸Ź</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Database Design</h3>
                        <p class="text-gray-600">Design, optimization and management of MySQL databases.</p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">đźš€</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Architecture</h3>
                        <p class="text-gray-600">Designing clean and scalable backend application architectures.</p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg hover:shadow-lg hover:border-blue-500 transition-all group">
                        <div class="text-4xl mb-4">đź“‹</div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Consulting</h3>
                        <p class="text-gray-600">Technical support, code review and consulting on architectural solutions.</p>
                    </div>
                </div>

                <div class="bg-blue-50 border border-blue-200 p-8 rounded-lg text-center">
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Available for remote work</span> on B2B, employment contract, or freelance basis.</p>
                    <p class="text-sm text-gray-600">I can join your team or work independently on projects.</p>
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
