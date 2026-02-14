<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Simple password-based authentication for admin panel
        $adminPassword = env('ADMIN_PASSWORD', 'admin123');
        
        if (session('admin_authenticated') !== true) {
            // Check if password is provided
            if ($request->input('password') === $adminPassword) {
                session(['admin_authenticated' => true]);
                return $next($request);
            }
            
            // Return 401 with simple auth prompt
            return response('Unauthorized. Add ?password=YOUR_PASSWORD to the URL', 401);
        }
        
        return $next($request);
    }
}
