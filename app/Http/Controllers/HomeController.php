<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $lang = session('lang', 'en');

        // fetch public repositories from GitHub (cached for an hour)
        $githubRepos = \Cache::remember('github_repos', 60 * 60, function () {
            try {
                $response = \Illuminate\Support\Facades\Http::get('https://api.github.com/users/mart-gant/repos', [
                    'sort' => 'updated',
                    'per_page' => 20,
                ]);

                if ($response->ok()) {
                    return $response->json();
                }
            } catch (\Exception $e) {
                // network error - just return empty
            }

            return [];
        });

        $view = $lang === 'pl' ? 'pages.home.pl' : 'pages.home.default';
        return view($view, compact('projects', 'githubRepos'));
    }
}
