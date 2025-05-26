<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BirthYearRestrictionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $birthYear = $request->input('birth_year');
        if (!$birthYear || $birthYear < 1995) {
            return response('Access denied. You must be born in 1995 or later.', 403);
        }
        return $next($request);
    }
}
