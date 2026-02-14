<?php
namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
public function index()
{
return view('admin.projects.index', [
'projects' => Project::all()
]);
}

public function create()
{
return view('admin.projects.create');
}

public function store(Request $request)
{
$data = $request->validate([
'title' => 'required',
'description' => 'required',
'type' => 'nullable',
'url' => 'nullable',
]);

$data['slug'] = Str::slug($data['title']);

Project::create($data);

return redirect()->route('admin.projects.index');
}

public function edit(Project $project)
{
return view('admin.projects.edit', compact('project'));
}

public function update(Request $request, Project $project)
{
$data = $request->validate([
'title' => 'required',
'description' => 'required',
'type' => 'nullable',
'url' => 'nullable',
]);

$data['slug'] = Str::slug($data['title']);

$project->update($data);

return redirect()->route('admin.projects.index');
}

public function destroy(Project $project)
{
$project->delete();

return back();
}
}
