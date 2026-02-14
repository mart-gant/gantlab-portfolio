<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $lang = session('lang', 'en');

        return view('pages.home' . ($lang === 'pl' ? '.pl' : ''), compact('projects'));
    }
}
