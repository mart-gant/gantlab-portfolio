<h1>Projekty</h1>
<a href="{{ route('admin.projects.create') }}">+ Dodaj projekt</a>

<ul>
    @foreach ($projects as $project)
        <li>
            {{ $project->title }}
            <a href="{{ route('admin.projects.edit', $project) }}">Edytuj</a>

            <form method="POST" action="{{ route('admin.projects.destroy', $project) }}">
                @csrf @method('DELETE')
                <button>Usuń</button>
            </form>
        </li>
    @endforeach
</ul>
