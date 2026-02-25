<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $lang = session('lang', 'en');

        $view = $lang === 'pl' ? 'pages.home.pl' : 'pages.home.default';

        return view($view);
    }
}