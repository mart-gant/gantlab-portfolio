<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProjectController;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/

// Home / Portfolio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Satori landing
Route::get('/satori', function () {
    return view('pages.satori', [
        'meta_title' => 'Satori – Neurodiversity Friendly App',
        'meta_description' => 'Aplikacja wspierająca osoby neuroatypowe poprzez testy poznawcze i rekomendacje',
    ]);
})->name('satori');

// Kontakt (formularz)
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

/*
|--------------------------------------------------------------------------
| SEO
|--------------------------------------------------------------------------
*/

// Sitemap
Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'text/xml');
})->name('sitemap');

/*
|--------------------------------------------------------------------------
| ADMIN PANEL (MINIMAL)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin.auth')
    ->group(function () {
        Route::resource('projects', ProjectController::class);
    });

/*
|--------------------------------------------------------------------------
| LANGUAGE SWITCH (PL / EN)
|--------------------------------------------------------------------------
*/

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['pl', 'en'])) {
        abort(404);
    }

    session(['lang' => $locale, 'locale' => $locale]);
    App::setLocale($locale);

    return redirect()->back();
})->name('lang.switch');
