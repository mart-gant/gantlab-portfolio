<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get language from URL query, session, or use default
        $lang = $request->query('lang') ?? session('lang') ?? session('locale') ?? 'en';

        // Validate – only EN and PL allowed
        if (!in_array($lang, ['en', 'pl'])) {
            $lang = 'en';
        }

        // Store in session for access in views
        session(['lang' => $lang]);
        App::setLocale($lang);

        // Set cookie to remember user's choice (one year)
        $response = $next($request);
        $response->cookie('lang', $lang, 60 * 24 * 365);

        return $response;
    }
}
